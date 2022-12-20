<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {


    public function authenticate(Request $request)
     {
         {

        $credentials= $request->validate(
            'Gebruikersnaam',
            'Wachtwoord'
        );

        if(auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'Gebruikersnaam' => 'Onjuist.',
        ])->onlyInput('Gebruikersnaam');

    }
}
};
