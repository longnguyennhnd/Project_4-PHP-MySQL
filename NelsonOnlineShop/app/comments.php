<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table="comments";
    public function products()
    {
        return $this->hasMany('App\products', 'productid', 'Id');
    }
}
