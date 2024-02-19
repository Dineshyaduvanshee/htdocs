<!-- <?php

//use Illuminate\Support\Facades\Route;

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
//     return view('demo');
// });

// Route ::get('/demo', function (){
//     return view('welcome');
// });
// Route :: post('/test', function(){
//     echo 'Testing...';
// });

// Route :: put('user/{id}',function(){

// });

// Route::any('/user/{id}', function ($id) {
//     // Your code for the delete route
// }); -->

//use Illuminate\Support\Facades\Route;

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
// use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('demo');
// });

// Route::get('/demo', function () {
//     return view('demo');
// });

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('demo');
});


// Other routes are currently commented out
// Uncomment and modify them as needed

// Route::post('/test', function () {
//     echo 'Testing...';
// });

// Route::put('user/{id}', function () {
// });

// Route::any('/user/{id}', function ($id) {
//     // Your code for the delete route
// });
