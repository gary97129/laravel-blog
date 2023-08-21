<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postscontroller extends Controller
{
    public function index(){
        return "posts";
    }

    public function show(int $id){
        return "posts, " . $id;
    }
}

