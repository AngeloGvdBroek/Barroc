<?php

namespace App\Http\Controllers;
use App\productorder;
use Auth;
use Illuminate\Http\Request;
use test\Mockery\ReturnTypeObjectTypeHint;


class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productorders = \App\productorder::all();
        return view('productsOrder/create', ['productorders' => $productorders] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $products = \App\Supply::where('id', '<', '5')->get();

        return view('productsOrder/create', array('products' => $products));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->middleware('auth');
        $user_id = Auth::user()->id;
        $order_id =

        $this->validate($request, [
            'order_id'      =>'max:250',
            'supplies_id'         => 'max:250',
            'amount'         => 'max:250',

        ]);


if ($request->product1 != null)
    {

        productorder::insert([
            'order_id' => $order_id,
            'supplies_id'          => $request->product1,
            'amount'          => $request->amount1,

            'user_id' => $user_id
        ]);
}

if ($request->product2 != null)
        {

            productorder::insert([
                'order_id' =>$request->order_id,
                'supplies_id'          => $request->product2,
                'amount'          => $request->amount2,

                'user_id' => $user_id
            ]);

        }

if ($request->product3 != null)
        {

            productorder::insert([
                'order_id' =>$request->order_id,
                'supplies_id'          => $request->product3,
                'amount'          => $request->amount3,

                'user_id' => $user_id
            ]);
        }

if ($request->product4 != null)
        {

            productorder::insert([
                'order_id' =>$request->order_id,
                'supplies_id'          => $request->product4,
                'amount'          => $request->amount4,

                'user_id' => $user_id
            ]);
        }





        return redirect()->route('order');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
