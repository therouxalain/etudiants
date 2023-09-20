<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
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
    return view('welcome');
});

Route::get('/', [EtudiantController::class, 'index'])->name("bottin.index");
Route::get('etudiant/create', [EtudiantController::class, 'create'])->name("bottin.create");
Route::post('etudiant/create', [EtudiantController::class, 'store'])->name("bottin.store");

Route::get('etudiant/{etudiant}', [EtudiantController::class, 'show'])->name("bottin.show");

Route::get('/modifier/{etudiant}', [EtudiantController::class, 'edit'])->name("bottin.edit");
Route::put('/modifier/{etudiant}', [EtudiantController::class, 'update']);

Route::delete('etudiant/{etudiant}', [EtudiantController::class, 'destroy'])->name("bottin.delete");

