<?php

use App\Branch;
use App\Category;
use App\Http\Controllers\ProductController;
use App\Order;
use App\Product;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        if(Auth::User()->user_role_id==2)
        {
            $categories = Category::all();
            // dd($categories[0]->products);
            return view('admin.addOrder',compact('categories'));
        }
        else{
            if(Auth::User()->user_role_id==3){
                $orders = Order::where('status','<>',2)->get();
                $branches = Branch::all();
                // dd($orders[2]->customer);
                return view('manager.orders',compact('orders','branches'));
            }
        }
    }
    return view('welcome');
});

Route::resource('/order', 'OrderController');
Route::resource('/product', 'ProductController');

Route::post('/newCategory', 'ProductController@add_category')->name('add_category');

Route::get('/addOrder','OrderController@create');
Route::get('/addCategory',function(){
    return view('manager.addCategory');
});
Route::get('/adminOrders','OrderController@adminOrders');


Route::get('/addProduct', 'ProductController@create');


Route::get('/createReport', function () {
    return view('admin.createReport');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', 'ProductController@index');

Route::get('/showProducts', 'ProductController@managerProducts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'HomeController@logout');

