<?php

// http://54.200.197.102:8080/generic?url=gPFGUruPP4&app=1234
/*
Route::get('/', function() {
    return View::make('404');
});
 */


//Route::get('/php-info', 'HomeController@PHPInfo');

    Route::get('/', 'GrantController@Init');

// backporting of old application
Route::get('/generic', function()
{
    if (count(array_filter($filter = filter_var_array(
        Input::only(['url', 'app']), // $_GET request
        [
            'url' => [
                'filter'  => FILTER_VALIDATE_REGEXP,
                'flags'   => FILTER_NULL_ON_FAILURE,
                'options' => [
                    'regexp' => '/^[a-zA-Z0-9_]+$/'
                ],
            ],

            'app' => [
                'filter'  => FILTER_VALIDATE_INT,
                'flags'   => FILTER_REQUIRE_SCALAR | FILTER_FLAG_ALLOW_OCTAL | FILTER_NULL_ON_FAILURE,
                'options' => [
                    'min_range' => 00000, // limit 00001
                    'max_range' => 99999, // limit 99999
                ],
            ],
        ])
    )) !== count(Input::only(['url', 'app']))) Throw New \RuntimeException("Bad metrics in GET request..");

    // make a generic view
    return View::make('generic', [
        'url' => $filter['url'],
        'app' => $filter['app'],
    ]);
});