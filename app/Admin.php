<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='admins';
    protected $fillable =['id', 'name', 'email'];
    public $timestamps = true;

    public function roles(){
        return $this->belongsToMany('App\Role', 'admin_roles', 'admin_id', 'role_id');
    }

    public function rolespolimorphic(){
        return $this->morphToMany('App\Role','object','roleables');
    }
}
