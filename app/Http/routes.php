<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'WelcomeController@index');


// Provide controller methods with object instead of ID
Route::model('contactos', 'Contacto');
Route::model('citas', 'Cita');
 
// Use slugs rather than IDs in URLs
Route::bind('contactos', function($value, $route) {
	return App\Contacto::whereSlug($value)->first();
});
Route::bind('citas', function($value, $route) {
	return App\Cita::whereSlug($value)->first();
});
 
Route::resource('citas', 'CitasController');
Route::resource('citas.contactos', 'ContactosController');