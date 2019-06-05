<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roleables extends Model
{
    protected $table ='roleables';
    protected $fillable = ['role_id', 'object_id', 'object_type'];
    public $timestamps = true;

    public function roleables(){
        return $this->morphMany();
    }
}
