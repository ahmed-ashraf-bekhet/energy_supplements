<?php

namespace App\Http\Controllers;

use App\BranchProduct;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use PHPUnit\TextUI\Command;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products',compact('products'));
    }

    public function managerProducts()
    {
        $products = Product::all();
        return view('manager.managerProducts',compact('products'));
    }

    public function getCost($id)
    {
        $product = Product::find($id);
        return response()->json($product->cost, 200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('manager.addProduct',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $category = new Category;
        // $category->name = $request->category_name;
        // $category->save();

        $product = new Product;
        $product->name = $request->product_name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->cost = $request->cost;
        $product->image = $request->fileURL;
        $product->category_id = $request->category_id;
        $product->save();

        $bb = new BranchProduct;
        $bb->product_id = Product::all()->last()->id;
        $bb->branch_id = 1;
        $bb->quantity = $request->quantity;
        $bb->save();

        $categories = Category::all();
        return view('manager.addProduct',compact('categories'));

    }


    public function add_category(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return view('manager.addCategory');
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
