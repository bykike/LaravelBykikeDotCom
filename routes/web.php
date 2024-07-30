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
    return view('index');
});

Route::get('/work1', function () {
    return view('work1'); // Point to the HTML page
});

Route::get('/work2', function () {
    return view('work2'); // Point to the HTML page
});

Route::get('/work3', function () {
    return view('work3'); // Point to the HTML page
});

Route::get('/work4', function () {
    return view('work4'); // Point to the HTML page
});

Route::get('/work5', function () {
    return view('work5'); // Point to the HTML page
});

Route::get('/work6', function () {
    return view('work6'); // Point to the HTML page
});

Route::get('/work7', function () {
    return view('work7'); // Point to the HTML page
});

Route::get('/work8', function () {
    return view('work8'); // Point to the HTML page
});

Route::get('/work9', function () {
    return view('work9'); // Point to the HTML page
});

Route::get('/moredesign', function () {
    return view('moredesign'); // Point to the HTML page
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/

