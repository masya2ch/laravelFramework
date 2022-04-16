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
    return view('welcome');
});

Route::get('/my-name', function () {
    return ('Орлов Максим Денисович');
});
Route::get('/my-friend', function () {
    return ('Александр Роденко Витальевич');
});

Route::get('/my-friend/{name}', function ($name) {
    return $name;
});

Route::get('/my-friend/{sity}', function ($sity) {
    return $sity;
});

Route::get('/level/{lvl}', function ($lvl) {
    if($lvl<=25){
        return 'Новичек';
    }
    if($lvl>=26 && $lvl<=50){
        return 'Специалист';
    }
    if($lvl>=51 && $lvl<=75){
        return 'Босс';
    }
    if($lvl>=76 && $lvl<=98){
        return 'Старик';
    }
    else{
        return 'Король';
    }
});

Route::get('/power/{name}', function ($name) {
    return $name;
});
