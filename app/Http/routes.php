<?php

/*
 * Home page | Requires Authorisation
 */
Route::get('/', 'PagesController@index');

/*
 * Login page and request
 */
Route::get('login', 'SessionsController@index');
Route::post('login', 'SessionsController@doLogin');
Route::get('logout','FunctionsController@doLogout');


