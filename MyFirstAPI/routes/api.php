<?php
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\TaskController;

// Students
Route::get('students', [StudentController::class, 'index']);
Route::post('students', [StudentController::class, 'store']);
Route::get('students/{id}', [StudentController::class, 'show']);
Route::get('students/{id}/edit', [StudentController::class, 'edit']);
Route::put('students/{id}/edit', [StudentController::class, 'update']);
Route::delete('students/{id}/delete', [StudentController::class, 'destroy']);

// Admin
Route::get('admin', [AdminController::class, 'indexAdmin']);
Route::post('admin', [AdminController::class, 'storeAdmin']);
Route::get('admin/{id}', [AdminController::class, 'showAdmin']);
Route::get('admin/{id}/edit', [AdminController::class, 'editAdmin']);
Route::put('admin/{id}/edit', [AdminController::class, 'updateAdmin']);
Route::delete('admin/{id}/delete', [AdminController::class, 'destroyAdmin']);

// Products
Route::get('products', [ProductController::class, 'indexProduct']);
Route::post('products', [ProductController::class, 'storeProduct']);
Route::get('products/{id}', [ProductController::class, 'showProduct']);
Route::get('products/{id}/edit', [ProductController::class, 'editProduct']);
Route::put('products/{id}/edit', [ProductController::class, 'updateProduct']);
Route::delete('products/{id}/delete', [ProductController::class, 'destroyProduct']);

// Tasks
Route::get('login', [TaskController::class, 'indexTaskLogin']);
Route::post('login', [TaskController::class, 'storeTaskLogin']);
Route::get('login/{id}', [TaskController::class, 'showTaskLogin']);
Route::get('login/{id}/edit', [TaskController::class, 'editTaskLogin']);
Route::put('login/{id}/edit', [TaskController::class, 'updateTaskLogin']);
Route::delete('login/{id}/delete', [TaskController::class, 'destroyTaskLogin']);
