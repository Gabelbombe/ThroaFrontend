<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/{url}/{app}', function($url, $app)
{
    return View::make('grant', [
        'url' => $url,
        'app' => $app,
    ]);
})
->where(['url' => '^[a-zA-Z0-9_]{10}+', 'name' => '[0-9]{4,10}+']);