<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    public function new($id){
        switch($id){
            case 1:
            return '<a href="https://www.educastudio.com/news">news</a>';
            break;
            case 2:
            return '<a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19</a>';
            break;
        }
}
}
