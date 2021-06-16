<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarsController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $reponse = Http::acceptJson()->get('http://192.168.0.140:3000/users');
        $datas = $reponse->object();

        return view('dashboard', compact('datas'));
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'login' => $request->login,
            'password' => $request->password,
        ];

        $response = http::post('http://192.168.0.140:3000/users', $data);

        dd($response);
    }
}
