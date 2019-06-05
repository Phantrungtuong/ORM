<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    protected $table = 'keys';
    protected $fillable = ['id', 'name'];
    public $timestamps = true;

    public function lock(){
        return $this->hasOne('App\Lock');
    }
}
