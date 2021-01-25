<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders_detail extends Model
{
    protected $table = "orders_detail";
    public function order()
    {
        return $this->belongsTo('App\order', 'orderID', 'Id');
    }
    public function products(){
        return $this->belongsTo('App\products','productID', 'Id');
    }
}
