<?php

use App\Http\Controllers\recettecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        return view('layouts.app');
    })->name('Homepage');


// recette routes
Route::get('/list/recettes', [recettecontroller::class, 'list_recettes'])->name('recettes.list');
Route::get('/create/recette', [recettecontroller::class, 'show_recettes'])->name('recettes.create');
Route::post('/store/recettes', [recettecontroller::class, 'store_recettes'])->name('recettes.store');
Route::get('/recettes/{id}', [RecetteController::class, 'show_one_recette'])->name('onerecette.list');
Route::delete('delete/recettes/{id}', [recettecontroller::class, 'delete_recettes'])->name('recettes.delete');

