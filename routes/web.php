<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AstrophotographyController;
use App\Http\Controllers\SolarSystemObjectController;
use App\Http\Controllers\StartAndInterstellarsMattersController;
use App\Http\Controllers\WeatherDataController;
use App\Models\StartAndInterstellarsMatterImage;

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

Route::get('startandinster/image', [StartAndInterstellarsMattersController::class, 'image']);
Route::get('startandinster/spectra', [StartAndInterstellarsMattersController::class, 'spectra']);
Route::get('startandinster/create_image', [StartAndInterstellarsMattersController::class, 'createImage'])->name('create_image_star');
Route::get('startandinster/create_spectra', [StartAndInterstellarsMattersController::class, 'createSpectra'])->name('create_spectra_star');
Route::post('startandinster/add_image',[StartAndInterstellarsMattersController::class, 'addImage'])->name('add_image');
Route::post('startandinster/add_spectra',[StartAndInterstellarsMattersController::class, 'addSpectra'])->name('add_spectra_star');

Route::get('solarsystemobject/index', [SolarSystemObjectController::class, 'index'])->name('solar_index');
Route::get('solarsystemobject/create_image', [SolarSystemObjectController::class, 'createImage'])->name('create_image_solar');
Route::get('solarsystemobject/create_spectra', [SolarSystemObjectController::class, 'createSpectra'])->name('create_spectra_solar');
Route::post('solarsystemobject/add_image',[SolarSystemObjectController::class, 'addImage'])->name('add_image_solar');
Route::post('solarsystemobject/add_spectra',[SolarSystemObjectController::class, 'addSpectra'])->name('add_spectra_solar');


Route::get('astrophotography/index', [AstrophotographyController::class, 'index'])->name('index_astrophotography');
Route::get('astrophotography/create', [AstrophotographyController::class, 'create'])->name('create_astrophotography');
Route::post('astrophotography/add_astrophotography', [AstrophotographyController::class, 'addAstrophotography'])->name('add_astrophotography');

Route::get('weatherdata/index', [WeatherDataController::class, 'index'])->name('index_weatherdata');
Route::get('weatherdata/create', [WeatherDataController::class, 'createWeatherData'])->name('create_weather_data');
Route::get('weatherdata/add_weatherdata', [WeatherDataController::class, 'addWeatherData'])->name('add_weatherdata');