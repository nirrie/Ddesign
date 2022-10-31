<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
   public function index() {
        return view('index');
    }

    public function login() {
        return view('login');
    }

    public function error() {
        return view('404page');
    }

    public function gridproducts() {
        return view('gridproducts');
    }

    public function listproducts() {
        return view('listproducts');
    }

}
