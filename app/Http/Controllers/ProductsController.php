<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getProductsIndex(){
        $products = Product::orderBy('created_at', 'desc');
        return view('frontend.shop',['products' => $products]);
    }

    public function getSingleProduct($productId){
        $product = Product::find($productId);
        return view('frontend.shop-single',['product' => $product]);
    }

    public function getAdminIndex(){
        $products = Product::all();
        return view('admin.product',['products' => $products]);
    }

    public function getProductCreate(){

        $categories = Category::pluck('name','id');
        return view('admin.new-product',compact('categories'));
    }

    public function postProductCreate(Request $request){
        $this->validate($request,[
            'name' => 'required|min:5',
            'description' => 'required:min:10',
            'price' => 'required',
            'image' => 'required',
            ' category_id' => 'required',
        ]);

        $image = " ";

        // Upload Image
        if ($request->hasFile('image')){
            $location = 'uploads/images';
            $image = $request->image;
            $imagename = rand(1111,9999). '.' . $image->getClientOriginalExtension();
            $image->move($location,$imagename);
            $image = $imagename;

        }


        $product = new Product([

            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'image' => $image,
        ]);

        $product->save();
        //$product->categories()->attach($request->input('categories') === null ? [] : $request->input('categories'));


        return redirect()->route('admin.new-product')->with('info','Blog Post successfully created');

    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
