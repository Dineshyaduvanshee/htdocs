<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\DestinationController;
use App\Http\Controllers\Frontend\GuideController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PackageController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\SingleController;
use App\Http\Controllers\Frontend\TestimonialController;

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
// Route::get('/', [HomeController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});

