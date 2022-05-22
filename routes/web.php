<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\DashboardController;

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
    if (Auth::user()) {
        return redirect()->route('home');
    } else {
        return redirect()->route('login');
    }
});

Auth::routes(['register' => false]);


Route::group(['middleware' => 'auth'], function() {

    Route::resources([
        'home' => DashboardController::class,
        'kampuses' => KampusController::class,

    ]);
    });
