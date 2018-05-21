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

Route::resource('heroes', 'HeroController');
Route::get('/api/heroes', 'HeroAPI@getAll');
//Route::get('/', 'herro@index');
//Route::get('/add', 'herro@create');
//Route::post('/create', 'herro@store');
//Route::get('/submit', 'herro@addHero');
//Route::get('/all', 'herro@allHero');
//Route::get('/all/show', 'herro@allShow');
//Route::get('/hero/{id}', 'herro@showmore');
//Route::get('/hero/del/{id}', 'herro@delete');
//Route::get('/update/{id}', 'herro@update');
//Route::get('/updatehero', 'herro@updateHero');

