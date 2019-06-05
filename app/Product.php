<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable =['id', 'name', 'price'];
    public $timestamps = true;

    public function comments(){
        return $this->morphMany('App\Comment', 'object');
    }
}
