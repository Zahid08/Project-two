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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/catagory/add', function () {
    return "I am in catagory add";
});

//Route::get('/catagory', function () {
//    return view('Catagory');
//});

Route::get('/', 'WelcomeControler@index');
Route::get('/support', 'WelcomeControler@support');
Route::get('/about', 'WelcomeControler@about');
Route::get('/blog', 'WelcomeControler@blog');
Route::get('/contact', 'WelcomeControler@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/catagory/add-catagory','CatagoryController@index');
Route::get('catagory/manage-catagory','CatagoryController@ManageCatagory');
Route::post('/catagory/new-catagory','CatagoryController@savecatagory');