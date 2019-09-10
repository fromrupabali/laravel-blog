<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='Welcome to Laravel!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        return view('pages.about');
    }

    public function service(){
        $data = array(
            'title'=>'Services',
            'services' =>['Web Development', 'Programming', 'SEO']
        );
        return view('pages.service')->with($data);
    }
}
