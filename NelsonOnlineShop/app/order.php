<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = "order";
    public function orders_detail()
    {
        return $this->hasMany('App\orders_detail', 'orderID', 'Id');
    }
    public function accounts()
    {
        return $this->belongsTo('App\account', 'orderID', 'Id');
    }
}
