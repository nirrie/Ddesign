<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    protected function authenticated(request $request) {
        if ($request->session()->has('key')) {
            $sessionData = $request->session()->get('key');
                return redirect()->route('checkout');
            }

            return redirect($this->redirectTo);

    }
}
