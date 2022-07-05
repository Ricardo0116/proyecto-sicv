<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RolUserController;

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


Route::redirect('/', 'inicio');

Route::get('inicio', function () {
    return view('index.index');
});

Route::get('sesion-productos', function () {
    return view('index.productos');
});
Route::get('contactos', function () {
    return view('index.contactenos');
});



// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('dashboard', function(){
    return view('dashboard');
});



Route::resource('usuarios', UserController::class);

Route::resource('usuarios', UserController::class);
    Route::resource('productos', ProductController::class);
    Route::resource('pedidos', OrderController::class);

// rutas con permisos

    // Route::middleware('role:administrador|vendedor|cliente')->group(function(){


    // Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //     return view('dashboard');
    // });

    // Route::resource('usuarios', UserController::class );
    // Route::resource('productos', ProductController::class);
    // Route::resource('pedidos', OrderController::class);
    // Route::resource('update-profile', RolUserController::class);
        
    //     });



