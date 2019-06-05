<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePost extends Model
{
    protected $table ='type_posts';
    protected $fillable =['id', 'type', 'display_type'];
    public $timestamps = true;

    public function post(){
        return $this->hasMany('App\Post', 'type_id', 'id');
    }
}
