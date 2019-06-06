<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table ='roles';
    protected $fillable =['id', 'role', 'display_role'];
    public $timestamps = true;

    public function admins(){
        return $this->belongsToMany('App\Admin', 'admin_roles', 'role_id', 'admin_id');
    }

    public function permissons(){
        return $this->belongsToMany('App\Permission', 'role_permissions', 'role_id', 'permission_id');
    }

    public function adminspolimorphic(){
        return $this->morphedByMany('App\Admin', 'object', 'roleables');
    }

    public function permissionspolimorphic(){
        return $this->morphedByMany('App\Permission', 'object', 'roleables');
    }
}
