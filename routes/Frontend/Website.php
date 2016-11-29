<?php

/**
 * Frontend Website Routes go here.
 */
Route::group(['middleware' => 'guest'], function ()
{
    Route::group(['namespace' => 'Website'], function ()
    {
        Route::get('/', 'PagesController@index')->name('index');
        Route::get('/meet-the-team', 'PagesController@meetTheTeam');
        Route::get('/{name?}', 'PagesController@show');
    });
});