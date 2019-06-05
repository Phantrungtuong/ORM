<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table ='roles';
    protected $fillable =['id', 'role', 'display_role'];
    public $timestamps = true;

    public function admins(){
        return $this->belongsToMany('App\Admin', 'roleables', 'role_id', 'object_id');
    }

    public function permissons(){
        return $this->belongsToMany('App\Admin', 'roleables', 'role_id', 'object_id');
    }

    public function adminspolimorphic(){
        return $this->morphedByMany('App\Admin', 'rd oleables');
    }

    public function permissionspolimorphic(){
        return $this->morphedByMany('App\Permission', 'roleables');
    }
}
