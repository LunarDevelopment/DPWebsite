<?php

/**
 * Frontend Website Routes go here.
 */
Route::group(['middleware' => 'guest'], function ()
{
    Route::group(['namespace' => 'Website'], function ()
    {
        Route::get('/', 'PagesController@index')->name('index');
        Route::get('/about-us', 'PagesController@about')->name('about-us');
        Route::get('/meet-the-team', 'MeetTheTeamController@index')->name('meet-the-team');
        Route::get('/marketing-lists', 'PagesController@marketingLists')->name('marketing-lists');
        Route::get('/cpe-campaigns', 'PagesController@cpeCampaigns')->name('cpe-campaigns');
        Route::get('/managed-email-campaigns', 'PagesController@managesEmailCampaigns')->name('managed-email-campaigns');
        Route::get('/design', 'PagesController@design')->name('design');
        Route::get('/contact-us', 'ContactController@index')->name('contact-us');
        Route::get('/contact-us/submit', 'ContactController@submit');
        Route::get('/subscribe', 'SubscribeController@index')->name('subscribe');
        Route::get('/subscribe/submit', 'SubscribeController@submit');
        Route::get('/privacy-policy', 'PagesController@privacyPolicy')->name('privacy-policy');
        Route::get('/faq', 'PagesController@frequentlyAskedQuestions')->name('faq');
        Route::get('/products', 'PagesController@products')->name('products');
        Route::get('/site-map', 'SiteMapController@index');
    });
});