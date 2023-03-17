<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerluAndaTahu;

class TentangMetapropolisController extends Controller
{
    public function index($id)
    {
        $datas = PerluAndaTahu::findOrFail($id);
        return view('landing.konten.tentangmetapropolis', compact('datas'));
    }
}
