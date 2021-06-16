<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Support\Services\ApiService;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', [CarsController::class, 'index']);

// Route::get('/dashboard', function () {
//     $reponse = Http::acceptJson()->get('http://192.168.0.140:3000/users');
//     $datas = $reponse->object();

//     //return view('dashboard', $datas);
//     return view('dashboard', compact('datas'));
// });

Route::get('/item/{id}', function ($id) {
    return view('item', ['nameId' => $id]);
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/new-cars', function () {
    return view('new-cars');
});

Route::get('/used-cars', function () {
    return view('used-cars');
});

Route::get('/create-car', function () {
    return view('create-car');
});

//Route::get('/users', [Controller::class, 'index']);

Route::get('/users', function () {
    // $reponse = http::post('http://192.168.0.140:3000/users', [
    //     "name" => "matheus",
    //     "login" => "usuario",
    //     "password" => "senha"
    // ]);
    $reponse = Http::acceptJson()->get('http://192.168.0.140:3000/users');
    $data = $reponse->json();
    $dataJson = $reponse->object();
    dd($data, $dataJson);
    // $get = Http::acceptJson()->get('http://192.168.0.140:3000/users');
    // dd($get);
});


Route::post('/create-car', [CarsController::class, 'store']);
