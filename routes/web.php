<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/contact', function () {
    return view('index');
});
Route::get('/sample', function () {
    return view('sample');
});
Route::get('/fetch_sample', 'App\Http\Controllers\SampleController@sample');
Route::post('/sample_post', 'App\Http\Controllers\SampleController@samplePost');

Route::get('{any}', function () {
    return view('index');
})->where('any', '.*');

Route::get('test', function() {
    return \App\Models\Article::all();
});
