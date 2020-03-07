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

Route::get('/', 'indexController@index')->name('home');


Route::get('/portfolio', 'portfolioController@index')->name('portfolio');

Route::get('/about', 'aboutController@index')->name('about');

Route::get('/services', 'servicesController@index')->name('services');

Route::get('/team', 'teamController@index')->name('team');

Route::get('/blog', 'blogController@index')->name('blog');

Route::get('/contact', 'contactController@index')->name('contact');

/* Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*Route::get('/{page?}', function ($page) {
    $data = array('description' => 'Moderna - ' . $page,
        'title' => 'Moderna - ' . $page);
    return view($page, $data);
}); */





