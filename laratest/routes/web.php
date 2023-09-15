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

Route::get('/chankhine', function () {
    echo "hello world i am waiting laravel";
});

Route::get('/aiolab/{age?}',function($age=22) {
    echo "his age is".$age;
});

Route::get('/custom',function() {
    return view('custom.list',['name' => "<h4>he is sithu</h4>"]);
});

Route::get('/chan',function() {
    return view('chan')
            ->with('name', 'Victoria')
            ->with('job', 'programmer');
});
