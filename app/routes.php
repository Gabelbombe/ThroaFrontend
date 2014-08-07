<?php

Route::get('/', 'GrantController@Init');


Route::post('/accept/{itemID}/{widgetID}', ['as' => 'response', 'uses' => 'ResponseController@Init'])->where([
        'widgetID'  => '[0-9]+',
        'itemID'    => '[0-9]+',
    ]);


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