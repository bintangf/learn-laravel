<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function master(){
        return view('master');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
      return view('tickets.create');
    }

}
