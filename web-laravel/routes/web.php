<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

# VIEW routes
Route::get('/dashboard', [CarsController::class, 'index']);

Route::get('/new-cars', [CarsController::class, 'newCars']);

Route::get('/used-cars', [CarsController::class, 'usedCars']);

Route::get('/create-car', [CarsController::class, 'indexCreateCar']);

Route::get('/edit-car/{id}', [CarsController::class, 'editCar']);

Route::get('/item/{id}', [CarsController::class, 'showCar']);

Route::get('/about', function () {
    return view('about');
});


# CRUD routes
Route::post('/create-car', [CarsController::class, 'store']);

Route::delete('/dashboard/{id}', [CarsController::class, 'delete']);

Route::put('/edit-car/{id}', [CarsController::class, 'update']);


# Api Routes
Route::get('/cars', function () {
    $reponse = Http::acceptJson()->get('http://192.168.0.140:3000/cars');
    $data = $reponse->json();
    $dataJson = $reponse->object();
    dd($data, $dataJson);
});
