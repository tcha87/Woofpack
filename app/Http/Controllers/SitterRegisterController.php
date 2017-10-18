<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Sitter;
use Auth;

class SitterRegisterController extends Controller
{

	protected $redirectPath = 'sitter_home';

   public function showRegistrationForm()
  {
      return view('sitters.register');
  }


   public function showLoginForm()
  {
      return view('sitters.login');
  }

    public function register(Request $request)
    {

    		//dd($request);
    	$sitter = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($sitter);

       //Redirects sellers
        return redirect($this->redirectPath);
    }

     protected function create(array $data)
    {
        return Sitter::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone_number' => $data['phone_number'],
             'whatsapp_number' => $data['whatsapp_number'],
            'res_address' => $data['res_address'],
            'city' => $data['city'],
            'postcode' => $data['postcode'],
            'dogs' => $data['dogs'],
            'outdoor' => $data['outdoor'],
            'dogwalks' => $data['dogwalks'],
            'food' => $data['food'],
            'bio' => $data['bio'],

        ]);
    }


    

   
   
    protected function guard()
   {
       return Auth::guard('web_seller');
   }

 
}
