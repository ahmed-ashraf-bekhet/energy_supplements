<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Branch;
use App\Order;

class Order_detail extends Model
{
    protected $fillable = [
        'quantity', 'total_price', 'total_cost','total_net_profit','order_id','product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }


}
