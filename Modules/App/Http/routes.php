<?php

Route::group(['middleware' => 'web', 'prefix' => 'app', 'namespace' => 'Modules\App\Http\Controllers'], function()
{
    Route::get('/', 'AppController@index');
});
