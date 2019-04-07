<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name'];

    //
    public  function products(){

      //  return this->$this->hasMany('App\product');
        return $this->hasMany(products::class);
    }
}
