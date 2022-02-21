<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return '<a href="https://www.educastudio.com">educastudio</a>';
    }
}
