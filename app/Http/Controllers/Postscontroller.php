<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postscontroller extends Controller
{
    public function index(){
        return view("posts.index");
    }

    public function show(int $id){
        return view("posts.show");
    }
}

