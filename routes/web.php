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

Route::get('/', function () {
    return view('welcome');
});

Route::get('gmaps', 'HomeController@gmaps');
Auth::routes();

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


//Route::get('sitters/login', 'SitterRegisterController@showLoginForm');


//Route::post('sitter-register', 'SitterRegisterController@register');

Route::get('/sitter_home', function(){
  return view('sitters.dashboard');
});