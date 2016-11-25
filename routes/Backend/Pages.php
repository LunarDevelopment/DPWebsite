<?php

/**
 * All route names are prefixed with 'admin.'
 */
Route::get('pages', 'PagesController@index');
Route::get('pages/edit/{id}', 'PagesController@edit');
Route::post('pages/save', 'PagesController@save');
Route::post('pages/delete', 'PagesController@delete');