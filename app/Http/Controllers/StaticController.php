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

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function gridproducts() {
        return view('gridproducts');
    }

    public function listproducts() {
        return view('listproducts');
    }

    public function shoppingcart() {
        return view('shoppingcart');
    }

    public function checkout() {
        return view('checkout');
    }

    public function Betaling() {
        return view('Betaling');
    }

    public function verwerkt() {
        return view('verwerkt');
    }

    public function p1() {
        return view('p1');
    }
}
