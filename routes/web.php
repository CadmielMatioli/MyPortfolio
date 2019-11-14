<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/logout', function()
{
    Auth::logout();
    Session::flush();
    return Redirect::to('/');

})->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('user/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('user/update/{id}', 'UserController@update')->name('user.update');
    Route::post('more', 'MoreController@create')->name('more.description');
    Route::post('skill', 'SkillController@create')->name('skill.insertupdate');

});