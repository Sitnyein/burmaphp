<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

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
Route::view('chan/koko/sitnyein/testing','test',['person' => "hello i am lazy boy","fruit" => ['apple','mango','orange','banana']])->name('coco');
//
Route::view('service','custom.service')->name('ser');

Route::get('add/{num1}/{num2}',function($num1,$num2){
    return $num1 * $num2;
})->name('name');

//pure php code
Route::get('getdata',function(){
    //echo "<pre>";
   $data = file_get_contents("https://fakestoreapi.com/products");
   $jsonData = json_decode($data);
   // dd($jsonData);
   //dd($jsonData[0]->price);
   //var_dump($jsonData);
    $result = array_filter($jsonData,fn($j) => $j->price<50); //just like foreach function looping
    dd($result);
    //dd($result[0]->price)
 });

 //larvel code
Route::get('laraCode',function() {
    $data = Http::get("https://fakestoreapi.com/products");
   // $jsonData= $data->json();
   // dd($jsonData[0]['price']);
   $jsonData=$data->object();
    // dd($jsonData[1]->price);
 //$result=collect($jsonData)->where("price","<",10);
 //dd($result[6]->title);
 // foreach($result as $item) {
 //     echo $item->title."<br>";
 // }
 //$result=collect($jsonData)->last();
 //dd($result);
 $result=collect($jsonData)->whereIn("price",[109,168])->toArray();
 dd($result);
 });


 Route::get('data',function(){
   $data = file_get_contents("https://fakestoreapi.com/products");
   $data= json_decode($data);
   $person= array_filter($data,fn($j) => $j->price < 50 );
   dd($person);
 });

 Route::post('postmethod',function(Request $req) {
    echo "this is postmethod ";
    dd($req->all());
 });

 Route::get('test',[testController::class,'home']);
