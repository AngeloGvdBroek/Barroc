<?php

namespace App\Http\Controllers;
use App\Category;
use \App\Product;
use Illuminate\Http\Request;

class productsController extends Controller

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

        $products = Product::paginate(15);
        return view('products/index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();

        return view('products/create', ['categories'=>$categories]);
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

        Product::insert([
            'name'           => $request->name,
            'price'          => $request->price,
            'image_path'          => $fileName,
            'categories_id'  => $request->categorie_id
        ]);
        $request->image->storeAs('public/images', $fileName);

        return (new \App\Mail\TestMail($request->name))->render();

        \Mail::to(\Auth::user())->send(new \App\Mail\TestMail($request->name) );

        return redirect()->route('products.index');
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
        $product = \DB::table('products')
            ->where('id', $id)
            ->first();

        // nieuw met model
        $product = Product::find($id);


        return view('products/show', ['product' => $product] );
    }

    public function addItem($id){

        $pro = products::find($id);
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
        $product = Product::find($id);

        $categories = Category::all();

        return view('products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request){
        $btn = $_POST['submitbtn'];
        if($btn == "clear"){
            $products = Supplies::all();
            return view('supplies.index', [ 'products' => $products]);
        }

        $name = $request->input('name');
        $products = Supplies::where('name')
            ->orWhere( 'name',  'like',  '%' . $name . '%' )->get();

        $checkbox_stock = $request->input('enough', false);
        if($checkbox_stock == 'to-little'){

            $products = Supplies::where('units')
                ->orWhere('units' , '<', 3)->get();

        }

        if($checkbox_stock == 'enough'){
            $products = Supplies::where('units')
                ->orWhere('units', '>', 3)->get();
        }
        return view('inkoop.index', ['products' => $products]);
    }
    public function update(Request $request, $id)
    {

        $fileName = $request->image->getClientOriginalName();
        // 1. ingekomen aanpassingen aanpassen op de juiste plaats
        // 2. redirecten naar show of index
        \DB::table('products')
            ->where('id', $id)
            ->update([
                'name'          => $request->name,
                'price'         => $request->price,
                'image_path'          => $fileName,
                'categories_id'  => $request->categorie_id
            ]);
        $request->image->storeAs('public/images', $fileName);

        return redirect()->route('products.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect()->route('products.index');
    }
}