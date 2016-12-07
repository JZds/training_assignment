<?php

// Home route
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home',
]);

// Authentication routes...
Route::get('auth/login', [
    'uses' => 'Auth\AuthController@showLoginForm',
    'as' => 'auth.login',
    'middleware' => ['guest'],
]);
Route::post('auth/login', [
    'uses' => 'Auth\AuthController@login',
    'as' => 'auth.login',
    'middleware' => ['guest'],
]);
Route::get('auth/logout', [
    'uses' => 'Auth\AuthController@logout',
    'as' => 'auth.logout',
    'middleware' => ['auth'],
]);

// Registration routes...
Route::get('auth/register', [
    'uses' => 'Auth\AuthController@showRegistrationForm',
    'as' => 'auth.register',
    'middleware' => ['guest'],
]);
Route::post('auth/register', [
    'uses' => 'Auth\AuthController@register',
    'as' => 'auth.register',
    'middleware' => ['guest'],
]);

Route::controllers([
    'password' => 'Auth\PasswordController',
]);

// Advertisement routes
Route::get('advertisements/create', [
    'uses' => 'AdsController@create',
    'as' => 'advertisements.create',
    'middleware' => ['auth'],
]);
Route::post('advertisements/store', [
    'uses' => 'AdsController@store',
    'as' => 'advertisements.store',
    'middleware' => ['auth'],
]);

Route::get('advertisements/myAdvertisements', [
    'uses' => 'AdsController@index',
    'as' => 'advertisements.index',
    'middleware' => ['auth'],
]);