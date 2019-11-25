<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::paginate(15);

        return view('sales/customers/index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales/customers/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'companyName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postalCode' => 'required',
            'phoneNumber' => 'required'
        ]);

        // Insert new user in database
        $user = new User();
        $user->name = "";
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        // Insert new customer in database
        $customer = new Customer();
        $customer->user_id = $user->id;
        $customer->company_name = $request->companyName;
        $customer->phonenumber = $request->phoneNumber;
        $customer->addres = $request->address;
        $customer->postaddres = $request->postalCode;
        // $customer->city = $request->city;
        $customer->save();

        $id = $customer->id;

        return redirect()->route('customers.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $user = User::find($customer->user_id);

        return view('sales/customers/show', array('customer' => $customer, 'user' => $user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
