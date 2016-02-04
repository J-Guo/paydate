<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GeolocationController extends Controller
{

    public function respondeGeodata(){

        return response()->json(['latitude' => 110.333, 'longitude' => 23.555]);

    }
}
