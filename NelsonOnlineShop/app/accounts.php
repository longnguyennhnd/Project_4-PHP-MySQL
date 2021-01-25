<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    protected $table="accounts";

    public function order()
    {
        return $this->hasMany('App\order', 'id_acc', 'Id');
    }
    public function wishlists()
    {
        return $this->hasMany('App\wishlists', 'id_acc', 'Id');
    }
}
