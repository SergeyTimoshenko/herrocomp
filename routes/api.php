<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/heroes', 'HeroAPI@getAll');
Route::get('/heroes/{id}', 'HeroAPI@showHero');
Route::post('/heroes/send', 'HeroAPI@addHero');
Route::delete('/heroes/{id}', 'HeroAPI@deleteHero');
Route::put('/heroes/{id}', 'HeroAPI@updateHero');