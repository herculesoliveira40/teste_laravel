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
    return view('home');
});

Route::get('sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    $email = "taldo_laravel@mail.com";
    return view('contato', ['email' => $email]);
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/produtoid/{id}', function ($id = null) {
    
    return view('produtoid',['id' => $id]);
});
