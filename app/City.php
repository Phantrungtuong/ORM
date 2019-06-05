<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable =['id', 'member_id', 'city'];
    public $timestamps = true;

    public function member(){
        return $this->belongsTo('App\Member');
    }
}
