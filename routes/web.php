<?php

use App\Http\Controllers\ComicController;
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

Route::get('/', [ComicController::class, "index"])->name("homepage");

Route::get('/comic/create', [ComicController::class, "create"])->name("comic.create");
Route::post("/comic", [ComicController::class, "store"])->name("comic.store");

Route::get("/comic/trash", [ComicController::class, "trash"])->name("comic.trash");
Route::get('/comic/{id}', [ComicController::class, "show"])->name("comic.show");

Route::get("/comic/{id}/edit", [ComicController::class, "edit"])->name("comic.edit");
Route::put("/comic/{id}", [ComicController::class, "update"])->name("comic.update");

Route::delete("/comic/{id}", [ComicController::class, "destroy"])->name("comic.destroy");