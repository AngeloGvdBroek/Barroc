<?php

namespace App\Http\Controllers;
use \App\fault;
use Auth;
use Illuminate\Http\Request;

class FaultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware('role:1');


    }
    public function index()
    {
        $faults = \App\fault::all();
        return view('faults/overview', ['faults' => $faults] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


            return view('faults/create');
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

        $this->validate($request, [
            'title'          => 'required|max:50',
            'description'         => 'required|max:250',

        ]);


        fault::insert([

            'title'           => $request->title,
            'description'          => $request->description,
            'user_id' => $user_id
        ]);







        return redirect()->route('faults.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        \App\fault::all();

        $faults = \DB::table('faults')
            ->where('id', $id)
            ->first();

        // nieuw met model
        $fault = Fault::find($id);


        return view('faults/overview', ['fault' => $fault] );
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
