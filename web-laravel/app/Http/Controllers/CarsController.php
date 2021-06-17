<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class CarsController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $reponse = Http::acceptJson()->get('http://192.168.0.140:3000/cars');
        $datas = $reponse->object();

        foreach ($datas as $data) {
            $fabrication = new DateTime($data->fabrication);
            $modelYear = new DateTime($data->model_year);

            $data->fabrication = date_format($fabrication, 'Y');
            $data->model_year = date_format($modelYear, 'Y');
        }

        return view('dashboard', compact('datas'));
    }

    public function newCars()
    {
        $reponse = Http::acceptJson()->get('http://192.168.0.140:3000/cars');
        $dataNewCars = $reponse->object();
        $datas = array();

        foreach ($dataNewCars as $data) {
            if ($data->type === true) {
                $fabrication = new DateTime($data->fabrication);
                $modelYear = new DateTime($data->model_year);

                $data->fabrication = date_format($fabrication, 'Y');
                $data->model_year = date_format($modelYear, 'Y');

                array_push($datas, $data);
            }
        }

        return view('new-cars', compact('datas'));
    }

    public function usedCars()
    {
        $reponse = Http::acceptJson()->get('http://192.168.0.140:3000/cars');
        $dataNewCars = $reponse->object();
        $datas = array();

        foreach ($dataNewCars as $data) {
            if ($data->type === false) {
                $fabrication = new DateTime($data->fabrication);
                $modelYear = new DateTime($data->model_year);

                $data->fabrication = date_format($fabrication, 'Y');
                $data->model_year = date_format($modelYear, 'Y');

                array_push($datas, $data);
            }
        }

        return view('used-cars', compact('datas'));
    }

    public function indexCreateCar()
    {
        $brandsResponse = Http::acceptJson()->get('http://192.168.0.140:3000/brands');
        $colorsResponse = Http::acceptJson()->get('http://192.168.0.140:3000/colors');

        $brands = $brandsResponse->object();
        $colors = $colorsResponse->object();

        return view('create-car', compact('colors', 'brands'));
    }

    public function store(Request $request)
    {
        $data = [
            'user_id' => 22,
            'color_id' => (int) $request->color_id,
            'brand_id' => (int) $request->brand_id,
            'model' => $request->model,
            'model_year' => $request->model_year,
            'fabrication' => $request->fabrication,
            'price' => $request->price,
            'type' => (bool) $request->type,
            'image' => $request->image,
        ];

        Http::post('http://192.168.0.140:3000/cars', $data);
        $toast = true;

        $brandsResponse = Http::acceptJson()->get('http://192.168.0.140:3000/brands');
        $colorsResponse = Http::acceptJson()->get('http://192.168.0.140:3000/colors');

        $brands = $brandsResponse->object();
        $colors = $colorsResponse->object();

        return view('create-car', compact('colors', 'brands', 'toast'));
    }

    public function delete(Request $request)
    {
        $response = Http::acceptJson()->delete('http://192.168.0.140:3000/cars/'.$request->id);

        $reponse = Http::acceptJson()->get('http://192.168.0.140:3000/cars');
        $datas = $reponse->object();

        foreach ($datas as $data) {
            $fabrication = new DateTime($data->fabrication);
            $modelYear = new DateTime($data->model_year);

            $data->fabrication = date_format($fabrication, 'Y');
            $data->model_year = date_format($modelYear, 'Y');
        }
        $toast = true;

        return view('dashboard', compact('datas', 'toast'));
    }

    public function editCar(Request $request)
    {
        $response = Http::acceptJson()->get('http://192.168.0.140:3000/cars/'.$request->id);
        $brandsResponse = Http::acceptJson()->get('http://192.168.0.140:3000/brands');
        $colorsResponse = Http::acceptJson()->get('http://192.168.0.140:3000/colors');

        $dataResponse = $response->object();
        $brands = $brandsResponse->object();
        $colors = $colorsResponse->object();

        $fabrication = new DateTime($dataResponse[0]->fabrication);
        $modelYear = new DateTime($dataResponse[0]->model_year);

        $dataResponse[0]->fabrication = date_format($fabrication, 'Y-m-d');
        $dataResponse[0]->model_year = date_format($modelYear, 'Y-m-d');
        $dataResponse[0]->price = strval($dataResponse[0]->price);
        $data = $dataResponse[0];

        return view('edit-car', compact('data', 'colors', 'brands'));
    }

    public function update(Request $request)
    {
        $data = [
            'user_id' => 22,
            'color_id' => (int) $request->color_id,
            'brand_id' => (int) $request->brand_id,
            'model' => $request->model,
            'model_year' => $request->model_year,
            'fabrication' => $request->fabrication,
            'price' => $request->price,
            'type' => (bool) $request->type,
            'image' => $request->image,
        ];

        Http::acceptJson()->put('http://192.168.0.140:3000/cars/'.$request->id, $data);
        $toast = true;

        $response = Http::acceptJson()->get('http://192.168.0.140:3000/cars/'.$request->id);
        $brandsResponse = Http::acceptJson()->get('http://192.168.0.140:3000/brands');
        $colorsResponse = Http::acceptJson()->get('http://192.168.0.140:3000/colors');

        $dataResponse = $response->object();
        $brands = $brandsResponse->object();
        $colors = $colorsResponse->object();

        $fabrication = new DateTime($dataResponse[0]->fabrication);
        $modelYear = new DateTime($dataResponse[0]->model_year);

        $dataResponse[0]->fabrication = date_format($fabrication, 'Y-m-d');
        $dataResponse[0]->model_year = date_format($modelYear, 'Y-m-d');
        $dataResponse[0]->price = strval($dataResponse[0]->price);
        $data = $dataResponse[0];

        return view('edit-car', compact('data', 'colors', 'brands', 'toast'));
    }

    public function showCar(Request $request)
    {
        $response = Http::acceptJson()->get('http://192.168.0.140:3000/cars/'.$request->id);
        $brandsResponse = Http::acceptJson()->get('http://192.168.0.140:3000/brands');
        $colorsResponse = Http::acceptJson()->get('http://192.168.0.140:3000/colors');

        $dataResponse = $response->object();
        $brands = $brandsResponse->object();
        $colors = $colorsResponse->object();

        $fabrication = new DateTime($dataResponse[0]->fabrication);
        $modelYear = new DateTime($dataResponse[0]->model_year);

        $dataResponse[0]->fabrication = date_format($fabrication, 'Y');
        $dataResponse[0]->model_year = date_format($modelYear, 'Y');
        $dataResponse[0]->price = strval($dataResponse[0]->price);
        $data = $dataResponse[0];

        return view('item', compact('data', 'colors', 'brands'));
    }
}
