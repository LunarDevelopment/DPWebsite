<?php

/**
 * Website
 */
Route::group(['namespace' => 'Website'], function ()
{
    Route::get('/', function ()
    {
        \Debugbar::disable();
        return view('frontend.index');
    })->name('frontend.index');
    Route::get('/about-us', function ()
    {
        \Debugbar::disable();
        return view('frontend.about-us');
    })->name('frontend.about-us');
    Route::get('/meet-the-team', 'MeetTheTeamController@index')->name('frontend.meet-the-team');
    Route::get('/marketing-lists', function ()
    {
        \Debugbar::disable();
        return view('frontend.marketing-lists');
    })->name('frontend.marketing-lists');
    Route::get('/cpe-campaigns', function ()
    {
        \Debugbar::disable();
        return view('frontend.cpe-campaigns');
    })->name('frontend.cpe-campaigns');
    Route::get('/managed-email-campaigns', function ()
    {
        \Debugbar::disable();
        return view('frontend.managed-email-campaigns');
    })->name('frontend.managed-email-campaigns');
    Route::get('/design', function ()
    {
        \Debugbar::disable();
        return view('frontend.design');
    })->name('frontend.design');
    Route::get('/contact-us', 'ContactController@index')->name('frontend.contact-us');
    Route::get('/contact-us/submit', 'ContactController@submit');
    Route::get('/subscribe', 'SubscribeController@index')->name('frontend.subscribe');
    Route::get('/subscribe/submit', 'SubscribeController@submit');
    Route::get('/privacy-policy', function ()
    {
        \Debugbar::disable();
        return view('frontend.privacy-policy');
    })->name('frontend.privacy-policy');
    Route::get('/faq', function ()
    {
        \Debugbar::disable();
        return view('frontend.faq');
    })->name('frontend.faq');
    Route::get('/site-map', function ()
    {
        \Debugbar::disable();
        return view('frontend.site-map');
    })->name('frontend.site-map');
    Route::get('/products', function ()
    {
        \Debugbar::disable();
        return view('frontend.products');
    })->name('frontend.products');
});

Route::get('/sitemap', 'SiteMapController@scan');