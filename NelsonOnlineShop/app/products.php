<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table="products";
    protected $primaryKey='Id';
    public function productcategories()
    {
    	return $this->belongsTo('App\productcategories','categoryID','id');
    }

     public function orders_detail()
    {
    	return $this->hasMany('App\orders_detail','productID','Id');
    }
    public function suppliers()
    {
    	return $this->belongsTo('App\suppliers','SupplierID','Id');
    }
    public function comments()
    {
    	return $this->belongsTo('App\comments','productid','Id');
    }

    public function wishlists()
    {
    	return $this->belongsTo('App\wishlists','id_pro','Id');
    }
}
