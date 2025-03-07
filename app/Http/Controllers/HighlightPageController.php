<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HighlightPageController extends Controller
{
    public function nav(){
     return view("layouts.navbar");
    }
}
