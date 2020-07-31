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
    return view('pages/home_content');
});

Route::get('/download', function(){
	$file = public_path()."/eugenio2.zip";

	return Response::download($file);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/url_download', function()
    {
        return view('pages/download');
    });

Route::get('/url_eugenio', function()
    {
        return view('pages/eugenio');
    });

Route::get('/url_ajuda', function()
    {
        return view('pages/ajuda');
    });

Route::get('/url_caa', function()
    {
        return view('pages/caa');
    });

Route::get('/url_testemunhos', function()
    {
        return view('pages/testemunhos');
    });