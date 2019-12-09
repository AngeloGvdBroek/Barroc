<?php

namespace App\Http\Controllers;
use \App\fault;
use App\workorder;
use Auth;
use Illuminate\Http\Request;

class workOrdersController extends Controller
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
        $workorders = \App\workorder::all();
        return view('workorder/overview', ['workorders' => $workorders] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('workOrder/create');
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
            'work_adress'          => 'required|max:50',
            'description'         => 'required|max:250',
            'total_price'         => 'required|max:250',

        ]);


        workorder::insert([

            'work_adress'           => $request->work_adress,
            'description'          => $request->description,
            'total_price'          => $request->total_price,
            'user_id' => $user_id
        ]);







        return redirect()->route('work');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        \App\workorder::all();

        $faults = \DB::table('workorders')
            ->where('id', $id)
            ->first();

        // nieuw met model
        $workorder = workorder::find($id);


        return view('faults/overview', ['workorder' => $workorder] );
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
