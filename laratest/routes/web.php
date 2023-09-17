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

Route::get('/chankhine', fn () => "hello world i am waiting laravel");

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

// urI view parameter
Route::view('chan/koko/sitnyein/testing','test',['person' => "hello i am lazy boy"])->name('coco');
//
Route::view('service','custom.service')->name('ser');

Route::get('add/{num1}/{num2}',function($num1,$num2){
    return $num1 * $num2;
})->name('name');
