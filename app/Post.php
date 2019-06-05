<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts';
    protected $fillable = ['id', 'title', 'type_id'];
    public $timestamps = true;

    public function type(){
        return $this->belongsTo('App\TypePost');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag', 'post_tags', 'post_id', 'tag_id');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'object');
    }
}
