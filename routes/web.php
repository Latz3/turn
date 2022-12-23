<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tournament;
use App\Models\Pool;

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
    return view('welcome', [
        'tournaments' => Tournament::all()
    ]);
});

Route::get('/tournaments', function () {
    return view('tournaments', [
        'tournaments' => Tournament::all()
    ]);
});

Route::resource('/tournaments/{tournament}/pools'
        , App\Http\Controllers\PoolController::class);

Route::get('tournaments/{tournament}', function ($id) {
    return view ('tournament', [
        'tournament' => Tournament::findOrFail($id)
    ]);
});
