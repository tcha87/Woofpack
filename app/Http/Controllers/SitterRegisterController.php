<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SitterRegisterController extends Controller
{

	protected $redirectPath = 'sitter_home';

   public function showRegistrationForm()
  {
      return view('sitters.register');
  }

    public function register(Request $request)
    {

    		dd($request);



       
    }

    //Validates user's Input
   
     protected function create(array $data)
    {
        return Sitter::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function guard()
   {
       return Auth::guard('web_sitter');
   }
}
