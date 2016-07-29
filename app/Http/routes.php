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

Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('/domain', function()
{
    return View::make('pages.domain');
});
Route::get('/research', function()
{
    return View::make('pages.research');
});
Route::get('/ideation', function()
{
    return View::make('pages.ideation');
});
Route::get('/fieldbook', function()
{
    return View::make('pages.fieldbook');
});
Route::get('/team', function()
{
    return View::make('pages.team');
});