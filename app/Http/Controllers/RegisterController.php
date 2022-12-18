<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{	

	public function store(Request $request)


	{	
		
		$user =	User::create($request->validate([
			'username' =>['required', 'min:2', 'max:50', Rule::unique('users', 'username')],
			'password' =>['required', 'min:7', 'max:200',],
			'email' =>['required', 'email', Rule::unique('users', 'email')],
			
		])); 

		session()->flash('succes', 'Je account is gecreëerd.');

		Auth()->login($user);
		return redirect('/');

		
		
	}
    

		
	
	


   

}
