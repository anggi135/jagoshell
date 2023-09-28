<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QerzaAdminController;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */


Route::controller(QerzaAdminController::class)->group(function () {
    Route::get('/', 'dashboard_1');
    Route::get('/index', 'dashboard_1');
});


