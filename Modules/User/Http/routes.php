<?php

Route::group(['middleware' => ['web','LoginMiddleware'], 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
	Route::get('/','UserController@index')->name('list.user');
	Route::get('/remove/{id}', 'UserController@remove')->name('user.remove');
	Route::get('/update/{id?}', 'UserController@update')->name('user.update');
	Route::post('/saveuser'	 , 'UserController@saveuser')->name('user.save');
});
