<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Super Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

    Route::get('/super-admin/home', [HomeController::class, 'superAdminHome'])->name('super.admin.home');
});

/*------------------------------------------
--------------------------------------------
All Agent Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:agent-admin'])->group(function () {

    Route::get('/agent-admin/home', [HomeController::class, 'agentAdminHome'])->name('agent.admin.home');
});

/*------------------------------------------
--------------------------------------------
All Garage Owner Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:garage-owner'])->group(function () {

    Route::get('/garage-owner/home', [HomeController::class, 'garageOwnerHome'])->name('garage.owner.home');
});

/*------------------------------------------
--------------------------------------------
All Garage Manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:garage-manager'])->group(function () {

    Route::get('/garage-manager/home', [HomeController::class, 'garageManagerHome'])->name('garage.manager.home');
});
