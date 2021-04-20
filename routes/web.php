<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');


//PARTIE BACK
    
    //crud read/index
Route::get('/admin/animal', [AnimalController::class, 'index'])->name('animal.index');

    //crud create
Route::get('/admin/animal/create', [AnimalController::class, 'create'])->name('animal.create');
Route::post('/admin/animal/store', [AnimalController::class, 'store'])->name('animal.store');

    //crud show
Route::get('/admin/animal/{id}', [AnimalController::class, 'show'])->name('animal.show');

    //crud delete
Route::delete('/admin/animal/{id}/delete', [AnimalController::class, 'destroy'])->name('animal.delete');

    //crud edit - update
Route::get('/admin/animal/{id}/edit', [AnimalController::class, 'edit'])->name('animal.edit');
Route::put('/admin/animal/{id}/udpate', [AnimalController::class, 'update'])->name('animal.update');