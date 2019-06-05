<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['id', 'tag', 'diplay_tag'];
    public $timestamps = true;

    public function posts(){
        return $this->belongsToMany('App\Post', 'post_tags', 'tag_id', 'post_id');
    }
}
