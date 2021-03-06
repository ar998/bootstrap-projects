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
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/logout', function () {
    return view('pages.logout');
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/view', function () {
    return view('pages.view');
});

Route::get('/card', function () {
    return view('pages.card');
});

Route::post('/contact', function () {
    $data = request()->all();
    echo "Email:".$data['email']. '<br>';
    echo "Subject:".$data['subject']. '<br>';
    echo "Body:".$data['body'];
});