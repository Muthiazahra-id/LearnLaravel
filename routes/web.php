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

//URL index/ Home
Route::get('/', function () {
    $user =  ['name' => '', 'role' => 'admin'];
    return view('pages.home',$user);
});

Route::redirect('/home', '/');

Route::get('/about', function () {
    $user =  ['name' => 'ZAHRA', 'role' => 'admin'];
    return view('pages.about',$user);
});

Route::get('/contact', function () {
    $data =[
        "person"=> ["Rizky", "Gavin", "Dzaky","Iqbal"]
    ];
    return view('pages.contact', $data);
});













