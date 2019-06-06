<?php

namespace App\Http\Controllers;

use App\Admin;
use App\City;
use App\Comment;
use App\Country;
use App\Key;
use App\Lock;
use App\Post;
use App\Product;
use App\Role;
use App\Tag;
use App\TypePost;
use Illuminate\Http\Request;
class Relationship extends Controller
{
    public function hasone(){
        $data = Key::find(1)->lock()->get()->toArray();
        $eager = Key::with(['lock' => function ($query){
            $query->where('id', '=', 1);
        }])->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "<br>";
        print_r($eager);
        echo "</pre";
    }
    public function belongto(){
        $data = Lock::find(1)->key()->get()->toArray();
        $eager = Lock::with('key')->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "<br>";
        print_r($eager);
        echo "</pre";
    }

    public function onemany(){
        $data = TypePost::find(1)->post()->get()->toArray();
        $eager = TypePost::with('post')->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "<br>";
        print_r($eager);
        echo "</pre";
    }

    public function manyone(){
        $data = Post::find(2)->type()->get()->toArray();
        $eager = Post::with('type')->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "<br>";
        print_r($eager);
        echo "</pre";
    }

    public function manymany(){
        $data = Post::find(1)->tags()->get()->toArray();
        $eager = Post::with('tags')->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "<br>";
        print_r($eager);
        echo "</pre";
    }

    public function many_many(){
        $data = Tag::find(2)->posts()->get()->toArray();
        $eager = Tag::with('posts')->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "<br>";
        print_r($eager);
        echo "</pre";
    }

    //trinity relationship
    public function trinity(){
        $data = Country::find(1)->city()->get()->toArray();
        $eager = Country::with('members.city')->where('id', 1)->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "<br>";
        print_r($eager);
        echo "</pre";
    }

    public function trinity_backwards(){
        $data = City::with('member.country')->where('id', 1)->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "</pre";
    }





//One-To-Many Polymorphic Relations
    public function cmtpost(){
        $data = Post::find(1)->comments()->get()->toArray();
        $eager = Post::with('comments')->where('id', 1)->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "<br>";
        print_r($eager);
        echo "</pre";
    }

    public function cmtproduct(){
        $data = Product::find(1)->comments()->get()->toArray();
        $eager= Product::with('comments')->where('id', '1')->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "<br>";
        print_r($eager);
        echo "</pre";
    }


 //backwards Polymorphic Relations one-many
    public function objectcmt(){
        $data = Comment::find(2)->object()->get()->toArray();
        $eager = Comment::with('object')->where('id', 2)->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "<br>";
        print_r($eager);
        echo "</pre";
    }


//Many-To-Many Polymorphic Relations
    public function admin_roles(){
        $data = Admin::find(1)->rolespolimorphic()->get()->toArray();
        $eager = Admin::with('rolespolimorphic')->where('id', 1)->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "<br>";
        print_r($eager);
        echo "</pre";
    }

    public function admin_roles_permissions(){
        $eager = Admin::with('rolespolimorphic.permissionspolimorphic')->where('id', 1)->get()->toArray();

        echo "<pre>";
        print_r($eager);
        echo "</pre";
    }

//many-many relationship
    public function admin_role_per(){
        $eager = Admin::with('roles.permissons')->where('id', 1)->get()->toArray();

        echo "<pre>";
        print_r($eager);
        echo "</pre";
    }

}
