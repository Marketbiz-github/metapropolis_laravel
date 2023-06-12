<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class RegencyController extends Controller
{
    public function index(Province $province)
    {
        return response()->json($province->regencies, 200);
    }
}
