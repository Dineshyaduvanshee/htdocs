<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\ProductController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/api/posts', [PostController::class, 'index']);
// Route::get('/posts/{id}', [PostController::class, 'show']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::put('/posts/{id}', [PostController::class, 'update']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']);

Route::get('students',[StudentController::class, 'index']);
Route::post('students',[StudentController::class, 'store']);
Route::get('students/{id}',[StudentController::class, 'show']);
Route::get('students/{id}/edit',[StudentController::class, 'edit']);
Route::put('students/{id}/edit',[StudentController::class, 'update']);
Route::delete('students/{id}/delete',[StudentController::class, 'destroy']);

Route::get('admin',[AdminController::class, 'indexAdmin']);
Route::post('admin',[AdminController::class, 'storeAdmin']);
Route::get('admin/{id}',[AdminController::class, 'showAdmin']);
Route::get('admin/{id}/edit',[AdminController::class, 'editAdmin']);
Route::put('admin/{id}/edit',[AdminController::class, 'updateAdmin']);
Route::delete('admin/{id}/delete',[AdminController::class, 'destroyAdmin']);

//ProductController,  
//ProductController,  

Route::get('product',[ProductController::class, 'indexProduct']);
Route::post('product',[ProductController::class, 'storeProduct']);
Route::get('product/{id}',[ProductController::class, 'showProduct']);
Route::get('product/{id}/edit',[ProductController::class, 'editProduct']);
Route::put('product/{id}/edit',[ProductController::class, 'updateProduct']);
Route::delete('product/{id}/delete',[ProductController::class, 'destroyProduct']);