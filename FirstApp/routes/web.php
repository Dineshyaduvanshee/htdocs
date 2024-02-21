<?php

// use Illuminate\Support\Facades\Route;
// use App\http\Controllers\DemoController;
// use App\Http\Controllers\SingleActionController;
// use App\Http\Controllers\PhotoController;
// use App\Http\Controllers\RegistrationController;
// use App\Http\Controllers\CustomerController;

// use App\Models\Customer; // Make sure to import the Customer model at the top of your file
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
//     return view('home');
// });

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/home', function () {
//     return view('home');
// });


// Route :: get('/',[DemoController::class,'index']);
// Route :: get('/about','App\Http\Controllers\DemoController@about');
// Route ::get('/courses',SingleActionController::class);
// Route ::resource('photo',PhotoController::class);

// Route::get('/register',[RegistrationController::class,'index']);
// Route::get('/login',[RegistrationController::class,'login']);
// Route::get('/home',[RegistrationController::class,'home']);
// Route::post('/register', [RegistrationController::class, 'register']);

// Route::get('/customer',[CustomerController::class,'index']);
// Route::post('/customer',[CustomerController::class, 'store']);

// Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
// Route::get('/customer/delete/{id}',[CustomerController::class, 'delete'])->name('customer.delete');
// Route::get('/customer/update/{id}',[CustomerController::class, 'update'])->name('customer.update');
// Route::get('/customer/edit/{id}',[CustomerController::class, 'edit'])->name('customer.edit');
// Route::post('/customer/index', [CustomerController::class, 'index']);
// Route::get('/customer/store', [CustomerController::class, 'store']);
// Route::get('/customer/view',[CustomerController::class,'view'])->name('customer.view');

// Route::get('customer',function(){
//     $customer = Customer::all();
//     echo "<pre>";
//     print_r($customer);
// }); 


// Route::get('customer', function () {
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });


//================================================================
use App\Models\Customer;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegistrationController::class, 'index']);
Route::get('/login', [RegistrationController::class, 'login']);
Route::get('/home', [RegistrationController::class, 'home']);
Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create'); 
Route::post('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');

Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::get('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/view', [CustomerController::class, 'view']);
Route::post('/customer/store', [CustomerController::class, 'store']);
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');





// Route::get('/', function () {
//         return view('home');
//     });
    
//     Route::get('/login', function () {
//         return view('login');
//     });
//     Route::get('/home', function () {
//         return view('home');
//     });
    
    
//     Route :: get('/',[DemoController::class,'index']);
//     Route :: get('/about','App\Http\Controllers\DemoController@about');
//     Route ::get('/courses',SingleActionController::class);
//     Route ::resource('photo',PhotoController::class);
    
//     Route::get('/register',[RegistrationController::class,'index']);
//     Route::get('/login',[RegistrationController::class,'login']);
//     Route::get('/home',[RegistrationController::class,'home']);
//     Route::post('/register', [RegistrationController::class, 'register']);
    
//     Route::get('/customer',[CustomerController::class,'index']);
//     Route::post('/customer',[CustomerController::class, 'store']);
    
//     Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
//     Route::get('/customer/delete/{id}',[CustomerController::class, 'delete'])->name('customer.delete');
//     Route::get('/customer/update/{id}',[CustomerController::class, 'update'])->name('customer.update');
//     Route::get('/customer/edit/{id}',[CustomerController::class, 'edit'])->name('customer.edit');
//     Route::post('/customer/index', [CustomerController::class, 'index']);
//     Route::get('/customer/store', [CustomerController::class, 'store']);
//     Route::get('/customer/view',[CustomerController::class,'view'])->name('customer.view');
    
//     Route::get('customer',function(){
//         $customer = Customer::all();
//         echo "<pre>";
//         print_r($customer);
//     }); 
    
    
//     Route::get('customer', function () {
//         $customers = Customer::all();
//         echo "<pre>";
//         print_r($customers->toArray());
//     });
    

// Route::get('/customer/update/{id}', [CustomerController::class, 'edit'])->name('customer.update');

// Route::get('/customer',[CustomerController::class,'index']);
// Route::post('/customer',[CustomerController::class, 'store']);



// // Route::get('customer', function () {
// //     $customers = Customer::all();
// //     echo "<pre>";
// //     print_r($customers->toArray());
// // });
