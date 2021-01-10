<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'image', 'quantity','price','cost','category_id'
    ];

    public function order_details()
    {
        return $this->hasMany(Order_detail::class, 'product_id' ,'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function branch_product()
    {
        return $this->hasMany(BranchProduct::class, 'product_id', 'id');
    }
}
