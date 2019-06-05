<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = ['id','name'];
    public $timestamps = true;

    public function members(){
        return $this->hasMany('App\Member', 'country_id', 'id');
    }

    public function city(){
        return $this->hasManyThrough('App\City', 'App\Member', 'country_id', 'member_id', 'id');
    }
}
