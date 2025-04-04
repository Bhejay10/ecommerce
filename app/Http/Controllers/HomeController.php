<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index(){
        return view('index');
    }
    public function cart(){
        return view ('cart');
    }
    public function payment(){
        return view('payment');
    }
}