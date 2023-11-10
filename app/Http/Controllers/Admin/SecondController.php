<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    public function __construct(){
        $this->middleware("auth")->except('showstring2');
    }
    public function showstring0(){
        return "anime0";
    }
    public function showstring1(){
        return "anime1";
    }
    public function showstring2(){
        return "anime2";
    }
    public function showstring3(){
        return "anime3";
    }
}

