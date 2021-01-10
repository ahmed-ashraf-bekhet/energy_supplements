<?php

namespace App\Http\Controllers;

use App\BranchProduct;
use App\Category;
use App\Order;
use App\Order_detail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['getDetails','store','order_request']);
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
        $categories = Category::all();
        // dd($categories[0]->products);
        return view('admin.addOrder',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->branch_id;
        // return $request->products;
        $order = new Order();
        $order->total_price = $request->total_price;
        $order->total_cost = $request->total_cost;
        $order->total_net_profit = $request->total_net;
        $order->branch_id = $request->branch_id;
        $order->status = 2;
        $order->save();
        // return 200;
        return $request->products;
        $order_details = $request->products;
        foreach ($order_details as $prod) {
            // return 1;
            $item = new Order_detail;
            $item->product_id = $prod['product_id'];
            $item->order_id = Order::all()->last()->id;
            $item->quantity = $prod['quantity'];
            $item->total_price = $prod['total_price'];
            $item->total_cost = $prod['total_cost'];
            $item->total_net_profit = $prod['total_net'];
            $item->save();
            $product = Product::find($item->product_id);
            $product->quantity -= $item->quantity;
            $product->save();
            $branch_product = BranchProduct::where('branch_id',$order->branch_id)->where('product_id',$item->product_id)->first();
            $branch_product->quantity -= $item->quantity;
            $branch_product->save();
        }
        return response()->json(['success' => $order], 200);
    }

    public function order_request(Request $request)
    {
        $order = new Order();
        $order->total_price = $request->total_price;
        $order->total_cost = $request->total_cost;
        $order->total_net_profit = $request->total_net;
        $order->branch_id = $request->branch_id;
        $order->customer_id = $request->customer_id;
        $order->status = 0;
        $order->save();
        $order_details = $request->products;
        foreach ($order_details as $prod) {
            $item = new Order_detail;
            $item->product_id = $prod['id'];
            $item->order_id = Order::all()->last()->id;
            $item->quantity = $prod['quantity'];
            $item->total_price = $prod['price'];
            $item->total_cost = $prod['cost'];
            $item->total_net_profit = $prod['price'] * $prod['cost'];
            $item->save();
        }
        return response()->json(['success' => $order], 200);
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
        $order = Order::find($id);
        $order->status = $request->status;
        $order->branch_id = $request->branch;
        $order->save();
        if($order->status == 2){
            foreach ($order->order_details as $key => $value) {
                $product = Product::find($value->product_id);
                $product->quantity -= $value->quantity;
                $product->save();
                $branch_product = BranchProduct::where('branch_id',$order->branch_id)->where('product_id',$value->product_id)->first();
                $branch_product->quantity -= $value->quantity;
                $branch_product->save();
            }
        }
        if(Auth::User()->id == 3)
        return redirect('');
        else
        return redirect('adminOrders');
    }

    public function getDetails($id)
    {
        $orderDetails = Order_detail::where('order_id',$id)->with('product')->get();
        // dd($orderDetails);
        return response()->json($orderDetails, 200);
    }

    public function adminOrders()
    {
        $branch_id = Auth::User()->branch_id;
        $orders = Order::where('status',1)->where('branch_id',$branch_id)->get();
        // dd($orders[0]->customer);
        return view('admin.orders',compact('orders'));
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
