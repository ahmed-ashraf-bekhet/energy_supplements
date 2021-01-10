<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order_detail;

class Order extends Model
{
    protected $fillable = [
        'total_price', 'total_cost', 'total_net_profit', 'customer_id', 'branch_id', 'status'
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }

    public function order_details()
    {
        return $this->hasMany(Order_detail::class, 'order_id' ,'id');
    }
}
