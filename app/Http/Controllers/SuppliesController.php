<?php

namespace App\Http\Controllers;
use App\Category;
use \App\Supply;
use Illuminate\Http\Request;

class suppliesController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplies = Supply::paginate(15);
        return view('supply/index', ['supplies' => $supplies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();

        return view('supply/create', ['categories'=>$categories]);
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
        $this->validate($request, [
            'name'          => 'required|max:50',
            'price'         => 'required|numeric',
            'image'         => 'image',

        ]);

        $fileName = $request->image->getClientOriginalName();

        supply::insert([
            'name'           => $request->name,
            'price'          => $request->price,
            'image_path'          => $fileName,
            'categories_id'  => $request->categorie_id
        ]);
        $request->image->storeAs('public/images', $fileName);

        return (new \App\Mail\TestMail($request->name))->render();

        \Mail::to(\Auth::user())->send(new \App\Mail\TestMail($request->name) );

        return redirect()->route('supply.index');
    }

    /**
     * Display the specified resource.
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 1. id ophalen ($id)
        // 2. 1 categorie selecteren uit database
        // 3. show template returnen met opgehaalde data

        // oud
        $supply = \DB::table('supply')
            ->where('id', $id)
            ->first();

        // nieuw met model
        $supply = supply::find($id);


        return view('supply/show', ['supply' => $supply] );
    }

    public function addItem($id){

        $pro = supply::find($id);
        Cart::add(['id' => $pro->id, 'name' => $pro->pro_name,
            'qty' => 1, 'price' => $pro->pro_price,
            'options' =>[
                'img' => $pro->pro_img
            ]]);
        //echo "add to cart successfully";


        //Return the user back to the page they came from with a message
        return back()->with('status', 'add to cart successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supply = supply::find($id);

        $categories = Category::all();

        return view('supply.edit', [
            'supply' => $supply,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *su
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request){

        $btn = $_POST['submitbtn'];
        if($btn == "clear"){
            $supply = Supply::all();
            return view('supply.index', [ '$supply' => $supply]);
        }

        $name = $request->input('name');
        $supplies = Supply::where('name')
            ->orWhere( 'name',  'like',  '%' . $name . '%' )->paginate();

        $checkbox_stock = $request->input('enough', false);
        if($checkbox_stock == 'to-little'){

            $supplies = Supply::where('in_stock')
                ->orWhere('in_stock' , '<', 3)->paginate();

        }

        if($checkbox_stock == 'enough'){
            $supplies = Supply::where('in_stock')
                ->orWhere('in_stock', '>', 3)->paginate();
        }

        return view('supply.index', ['supplies' => $supplies]);
    }

    public function update(Request $request, $id)
    {

        $fileName = $request->image->getClientOriginalName();
        // 1. ingekomen aanpassingen aanpassen op de juiste plaats
        // 2. redirecten naar show of index
        \DB::table('supply')
            ->where('id', $id)
            ->update([
                'name'          => $request->name,
                'price'         => $request->price,
                'image_path'          => $fileName,
                'categories_id'  => $request->categorie_id
            ]);
        $request->image->storeAs('public/images', $fileName);

        return redirect()->route('supply.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
            {
        supply::destroy($id);

        return redirect()->route('supply.index');
    }
}