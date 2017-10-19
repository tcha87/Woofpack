<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Sitter;
use Auth;

class SitterRegisterController extends Controller
{

	public function __construct()
    {
      $this->middleware('guest:sitter');
    }



	protected $redirectPath = 'sitters/dashboard';



   public function showRegistrationForm()
  {
      return view('sitters.register');
  }


   public function showLoginForm()
  {
      return view('sitters.login');
  }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      if (Auth::guard('sitter')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

        return redirect()->intended(route('sitters.dashboard'));
      }

      return redirect()->back()->withInput($request->only('email', 'remember'));
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
						 'lat' => $data['lat'],
						 'lng' => $data['lng'],
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
       return Auth::guard('sitter');
   }


}
