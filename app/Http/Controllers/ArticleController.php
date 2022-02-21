<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return 'Hi! Selamat Datang';
    }
    public function about(){
        return 'Izzatun Nauly, 2041720166';
    }
    public function articles($id){
        return 'Ini adalah halaman artikel dengan ID : '.$id;
    }
}
