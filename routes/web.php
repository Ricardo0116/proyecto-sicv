<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// rutas con permisos

Route::middleware('role:administrador|vendedor')->group(function(){



Route::resource('usuarios', UserController::class );
    
    });



