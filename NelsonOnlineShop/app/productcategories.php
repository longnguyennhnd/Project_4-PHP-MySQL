<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productcategories extends Model
{
    protected $table = "productcategories";
    public function themes()
    {
    return $this->belongsTo('App\themes', 'themeID', 'Id');
    }
    public function products()
    {
        return $this->hasMany('App\products', 'categoryID', 'Id');
    }
}
