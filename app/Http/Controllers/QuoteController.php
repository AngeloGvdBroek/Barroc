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
        $customers = \App\Customer::all();

        return view('sales/quotes/create', ['customers' => $customers]);
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
            'product'       => 'required|max:50',
            'amount'        => 'required',
            'price'         => 'required'
        ]);

        $quote = new Quote();
        $quote->sales_id = 1;
        $quote->customer_id = $request->customerId;
        $quote->product = $request->product;

        $quote->save();

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
        $user = \App\User::find($quote->customer_id);
        $customer = \App\Customer::find($user->id);

        return view('sales/quotes/show', array('customer' => $customer, 'quote' => $quote) );
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
