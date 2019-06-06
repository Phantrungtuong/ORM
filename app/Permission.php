<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table ='permissions';
    protected $fillable =['id', 'permission', 'display_permission'];
    public $timestamps = true;

    public function roles(){
        return $this->belongsToMany('App\Role', 'role_permissions', 'permission_id', 'role_id');
    }

    public function rolespolimorphic(){
        return $this->morphToMany('App\Role', 'object', 'roleables');
    }
}
