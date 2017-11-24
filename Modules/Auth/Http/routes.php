<?php
use  Modules\Auth\Http\Middleware\LoginMiddleware;
Route::group(['middleware' => ['web'], 'prefix' => '', 'namespace' => 'Modules\Auth\Http\Controllers'], function()
{
	Route::get('/', 'AuthController@index');

	Route::get('login', 'AuthController@getLogin')->name('login');

	Route::post('login', 'AuthController@postLogin');

	Route::get('logout', function(){
		Auth::logout();
		return redirect(route('login'));
	})->name('logout');
});
