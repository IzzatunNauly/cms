<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programController extends Controller
{
    public function program($id){
        switch($id){
            case 1:
            return '<a href="https://www.educastudio.com/program/karir">karir</a>';
            break;
            case 2:
            return '<a href="https://www.educastudio.com/program/magang">magang</a>';
            break;
            case 3:
            return '<a href="https://www.educastudio.com/program/kunjungan-industri">kunjungan-industri</a>';
            break;
        }
}
}
