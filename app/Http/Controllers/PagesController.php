<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
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
