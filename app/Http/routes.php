<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//static pages

//index/homepage series
Route::get('/', 'PagesController@index');

Route::get('/WhatIsCvd', 'PagesController@WhatIsCvd');
Route::get('/GeneralCvdFacts', 'PagesController@GeneralCvdFacts');
Route::get('/RiskRactors', 'PagesController@RiskRactors');
Route::get('/LifestyleRisks', 'PagesController@LifestyleRisks');
Route::get('/Prevention', 'PagesController@Prevention');
Route::get('/HowWeHelp', 'PagesController@HowWeHelp');


//about series
Route::get('/about', 'PagesController@about');


//tools page
Route::resource('/tools', 'ToolsController@index');


//account page
Route::resource('/account', 'AccountController@index');
