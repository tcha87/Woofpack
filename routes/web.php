<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Sitter as Sitter;

Route::get('/', function () {
    return view('welcome');
});

Route::get('gmaps', 'HomeController@gmaps');
Auth::routes();

Route::get('/sittergenerator',function ()
{
	$faker = Faker\factory::create();

	for($i=0 ; $i<50; $i++){

		$sitter = array('name'=>$faker->name,'email'=>$faker->email,'password'=>\Hash::make('password'),'phone_number'=>$faker->phoneNumber, 'whatsapp_number'=>$faker->phoneNumber,'res_address'=>$faker->address ,'city'=>$faker->city,'postcode'=>$faker->postcode,'dogs'=>'yes','outdoor'=> 'no','dogwalks'=>'no','food'=>'no','bio'=>'I am a stay at home mother with extensive animal care & training experience.'  );
		Sitter::create($sitter);

	}

	
});


Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/profile/{id}', 'Controller@show')->name('show');


Route::resource('profile', 'ProfileController');



Route::get('sitters/sitter-register', 'SitterRegisterController@showRegistrationForm');


Route::post('sitters/sitter-register',[
    'uses' => 'SitterRegisterController@register', 
    'as' => 'sitter.register'
]);

Route::get('sitters/login',[
    'uses' => 'SitterRegisterController@showLoginForm', 
    'as' => 'sitters.login'
]);

Route::post('sitters/login',[
    'uses' => 'SitterRegisterController@login', 
    'as' => 'sitters.login'
]);


//Route::get('sitters/login', 'SitterRegisterController@showLoginForm');


//Route::post('sitter-register', 'SitterRegisterController@register');



Route::get('sitters/dashboard',[
    'uses' =>'SitterController@index', 
    'as' => 'sitters.dashboard'
]);



