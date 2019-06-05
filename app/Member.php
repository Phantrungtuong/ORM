<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable =['id', 'country_id', 'name'];
    public $timestamps = true;

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function city(){
        return $this->hasOne('App\City');
    }
}
