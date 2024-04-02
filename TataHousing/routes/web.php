<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// Route::get('/post/{id?}/comment/{commentid?}', function (string $id=null,string $commentid=null) {
//     if($id){
//         return "<h1>Psot Id :". $id ."</h1><h2>".$commentid."</h2>";
//     }else{
//         return "<h1>Psot Id not found</h1>";
//     }

// });

// Route::get('/post/{id}', function (string $id) {
//     if($id){
//         return "<h1>Psot Id :". $id ."</h1>";
//     }else{
//         return "<h1>Psot Id not found</h1>";
//     }

// })->whereNumber('id');  //whereAlpha

// Route::get('/post/{id}', function(string $id){
//     if($id){
//         return "<h1>Psot Id :". $id ."</h1>";
//     }
//     else{
//         return "<h1>Psot Id not found</h1>";
//     }
// })->whereAlpha('id');

// Route::get('/post/{id}', function(string $id){
//     if($id){
//         return "<h1>Psot Id :". $id ."</h1>";
//     }else{
//         return "<h1>Psot Id not found</h1>";
//     }
// })->whereAlphaNumeric('id');

// Route::get('post/{id}', function(string $id){
//     if($id){
//         return "<h1>Psot Id :". $id ."</h1>";
//     }else{
//         return "<h1>Psot Id not found</h1>";
//     }
// })->whereIn('id',['movie','song','painting']);




// Route::view('/post','post');

// Route::get('/post', function () {
//     return view("post");
// });


// Route::get('post/{id}', function(string $id){
//     if($id){
//         return "<h1>Psot Id :". $id ."</h1>";
//     }else{
//         return "<h1>Psot Id not found</h1>";
//     }
// })->where('id','[a-zA-Z]+');


Route::get('post/{id}/comment/{commentid}', function(string $id,string $comment){
    if($id){
        return "<h1>Psot Id :". $id ." & Comment : ".$comment."</h1>";
    }else{
        return "<h1>Psot Id not found</h1>";
    }
})->where('id','[0-9]+')->whereAlpha('commentid');
