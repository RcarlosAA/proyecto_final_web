<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PaginaController::class, 'index']);

// Marcas
Route::get('/marcas', [MarcaController::class, 'index']);

Route::get('/registrar_marca',function () {
    return view('marcas.registrar');
});

Route::post('/marcas', [MarcaController::class, 'store']);

Route::get('/marcas/editar/{id}', [MarcaController::class, 'edit']);
Route::put('/marcas/editar/{id}', [MarcaController::class, 'putEdit']);
Route::get('/marcas/eliminar/{id}', [MarcaController::class, 'delete']);




// CATEGOIRAS
Route::get('/categorias', [CategoriaController::class, 'index']);

Route::get('/registrar_categorias', [CategoriaController::class, 'registrar']);

Route::post('/categorias', [CategoriaController::class, 'store']);
Route::get('/categorias/editar/{id}', [CategoriaController::class, 'edit']);
Route::put('/categorias/editar/{id}', [CategoriaController::class, 'putEdit']);
Route::get('/categorias/eliminar/{id}', [CategoriaController::class, 'delete']);


// PRODUCTOS
Route::get('/productos', [ProductoController::class, 'index']);

Route::get('/registrar_productos', [ProductoController::class, 'registrar']);
Route::post('/productos', [ProductoController::class, 'store']);

Route::get('/productos/editar/{id}', [ProductoController::class, 'edit']);
Route::put('/productos/editar/{id}', [ProductoController::class, 'putEdit']);
Route::get('/productos/eliminar/{id}', [ProductoController::class, 'delete']);


// pagina web

Route::get('/pagina_web', [PaginaController::class, 'index']);
Route::get('/pagina_web/categoria/{id}', [PaginaController::class, 'productos_categoria']);
Route::get('/ver_producto/{id}', [PaginaController::class, 'ver_producto']);

Route::get('/loginproplay',function () {
    return view('pagina.loginproplay');
});

Route::get('/registerproplay',function () {
    return view('pagina.registerproplay');
});

Route::get('/aboutus',function () {
    return view('pagina.aboutus');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
