<?php

namespace App\Http\Controllers;

use \App\Quote;
use \App\User;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quote::paginate(15);

        return view('sales/quotes/index', ['quotes' => $quotes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = \App\User::where('role_id', 7)->get();
        $products = \App\Supply::where('id', '<', '5')->get();

        return view('sales/quotes/create', array('customers' => $customers, 'products' => $products));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Stores quote in database
        $this->validate($request, [
            'customerId'    => 'required|exists:users,id',
            'price'         => 'required'
        ]);

        $quote = new Quote();
        $quote->sales_id = 1;
        $quote->customer_id = $request->customerId;

        $quote->save();

        $purchase = new \App\Purchase();
        $purchase->user_id = \Auth::user()->id;

        $purchase->save();

        // Purchase Rule 1
        if ($request->amount1 != null) {
            $purchaseRules = new \App\Purchase_Rule();
            $purchaseRules->purchase_id = $purchase->id;
            $purchaseRules->supply_id = $request->amount1;

            $purchaseRules->save();
        }

        // Purchase Rule 2
        if ($request->amount2 != null) {
            $purchaseRules = new \App\Purchase_Rule();
            $purchaseRules->purchase_id = $purchase->id;
            $purchaseRules->supply_id = $request->amount2;

            $purchaseRules->save();
        }

        // Purchase Rule 3
        if ($request->amount3 != null) {
            $purchaseRules = new \App\Purchase_Rule();
            $purchaseRules->purchase_id = $purchase->id;
            $purchaseRules->supply_id = $request->amount3;

            $purchaseRules->save();
        }

        // Purchase Rule 4
        if ($request->amount4 != null) {
            $purchaseRules = new \App\Purchase_Rule();
            $purchaseRules->purchase_id = $purchase->id;
            $purchaseRules->supply_id = $request->amount4;

            $purchaseRules->save();
        }

        // When quote has been made, send message to finance so they can confirm this
        //\Mail::to( \Auth::user() )->send( new \App\Mail\QuoteMail('gebruikersnaam') );

        //return ( new \App\Mail\QuoteMail('gebruikersnaam') )->render(); // Renders the mail in HTML

        $id = $quote->id; // ID of quote

        return redirect()->route('quotes.show', $quote);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        $customer = \App\User::find($quote->customer_id);
        $user = \App\User::find($quote->sales_id);

        return view('sales/quotes/show', array('customer' => $customer, 'user' => $user) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
