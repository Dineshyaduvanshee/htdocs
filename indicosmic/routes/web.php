<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/demo/{name}/{id?}', function ($name,$id=null) { 
    echo $name ."  ";
    echo $id;
    $data = compact('name', 'id');
    return view('demo')->with($data);
   // return view('demo');
});



Route::get('/{name?}', function ($name=null) {
    $demo = "<h2>Dineshyaduvanshee</h2>"; 
    $data = compact('name','demo');
    return view('home')->with($data); 
});

// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/courses', function () {
//     return view('courses');
// });

Route :: get('/',[DemoController::class,'index']);
Route :: get('/about','App\Http\Controllers\DemoController@about');
Route ::get('/courses',SingleActionController::class);
Route ::resource('photo',PhotoController::class);


