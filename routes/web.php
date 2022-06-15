<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AstrophotographyController;
use App\Http\Controllers\StartAndInterstellarsMattersController;

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

Route::get('/', function () { return view('welcome'); });

Route::get('startandinster/create', [StartAndInterstellarsMattersController::class, 'create']);
Route::post('startandinster/add',[StartAndInterstellarsMattersController::class, 'addImage']);


Route::get('astrophotography/create', [AstrophotographyController::class, 'create']);
