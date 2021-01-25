<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlists extends Model
{
    protected $table="wishlists";
    public function accounts()
    {
    	return $this->belongsTo('App\accounts','id_acc','Id');
    }
    public function products()
    {
    	return $this->belongsTo('App\products','id_pro','Id');
    }
}
