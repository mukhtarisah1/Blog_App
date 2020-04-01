<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        return view('pages.index')->with('posts', $posts);
        
    }

    public function services(){
        $serve = array('title'=>'services',
                        'services'=>['Programming','SEO','Web design']);
        return view('pages.services')->with($serve);
    }

    public function about(){
        return view('pages.about');
    }
}
