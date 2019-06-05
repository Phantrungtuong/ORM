<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id', 'content', 'object_id', 'object_type'];
    public $timestamps = true;

    public function object(){
        return $this->morphTo();
    }
}
