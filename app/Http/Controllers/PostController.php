<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function views() {
        return view('page.home');
    }

    public function index() {
        return view('posts.index');
    }

    public function contact() {
        return view('page.contact');
    }
}
