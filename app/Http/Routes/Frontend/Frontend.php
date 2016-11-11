<?php

/**
 * Frontend Controllers
 */
//Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('macros', 'FrontendController@macros')->name('frontend.macros');

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
    });
});

/**
 * Website
 */
Route::get('/', function() {
    \Debugbar::disable();
    return view('frontend.index');
});
Route::get('/about-us', function() {
    \Debugbar::disable();
    return view('frontend.about-us');
});
Route::get('/meet-the-team', function() {
    \Debugbar::disable();
    return view('frontend.meet-the-team');
});
Route::get('/marketing-lists', function() {
    \Debugbar::disable();
    return view('frontend.marketing-lists');
});
Route::get('/cpe-campaigns', function() {
    \Debugbar::disable();
    return view('frontend.cpe-campaigns');
});
Route::get('/managed-email-campaigns', function() {
    \Debugbar::disable();
    return view('frontend.managed-email-campaigns');
});
Route::get('/design', function() {
    \Debugbar::disable();
    return view('frontend.design');
});
Route::get('/contact-us', function() {
    \Debugbar::disable();
    return view('frontend.contact-us');
});
Route::get('/subscribe', function() {
    \Debugbar::disable();
    return view('frontend.subscribe');
});
Route::get('/privacy-policy', function() {
    \Debugbar::disable();
    return view('frontend.privacy-policy');
});
Route::get('/faq', function() {
    \Debugbar::disable();
    return view('frontend.faq');
});
Route::get('/site-map', function() {
    \Debugbar::disable();
    return view('frontend.site-map');
});