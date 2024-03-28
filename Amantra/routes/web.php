<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/post', function () {
//     return view('post');
// });
//Route::view('/post', 'post');


Route::get('/about',function (){
   // return view('about');
   return "<h1>`welcome`</h1>";
});

Route::get('/post',function (){
    return view('post');
});

route::get('/post/firstpost',function (){
    return view('firstpost');
});
