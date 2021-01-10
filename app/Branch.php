<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Branch extends Model
{
    protected $fillable = [
        'name'
    ];

    public function admin()
    {
        return $this->hasOne(User::class, 'branch_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'order_id' ,'id');
    }

    public function branch_product()
    {
        return $this->hasMany(BranchProduct::class, 'branch_id', 'id');
    }
}
