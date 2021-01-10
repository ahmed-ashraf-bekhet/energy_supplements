<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchProduct extends Model
{
    protected $table='branches_products';
    public $primaryKey='id';
    public $timestamps=true;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }
}
