<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{

    public function showUserName(){
        return "Ahmed Emam";
    }
    public function getIndex(){
        $data = [];
        $data['name'] = "Malik Anas";
        $data['id'] = "10";
        $obj = new \stdClass();

        $obj -> name = "Malik";
        $obj -> id = "7";
        $obj -> gender = "male";
   $data = [];
        return view("welcome",compact("data"))->with("name","ahmed em");
    }
}
