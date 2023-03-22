<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicRoutingController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/{url}', [DynamicRoutingController::class, 'handleGetRequest'])->where('url', '.*');
Route::post('/{url}', [DynamicRoutingController::class, 'handlePostRequest'])->where('url', '.*');