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
       //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $seller = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($seller);

       //Redirects sellers
        return redirect($this->redirectPath);
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:sellers',
            'password' => 'required|min:6|confirmed',
        ]);
    }

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
