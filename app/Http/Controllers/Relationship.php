<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Relationship extends Controller
{
    public function hasone(){
        $data = Key::find(1)->lock()->get()->toArray();
    }
}
