<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class themes extends Model
{
   protected $table="themes";
    public function productcategories()
    {
    return $this->hasMany('App\productcategories', 'themeID', 'Id');
    }
}
