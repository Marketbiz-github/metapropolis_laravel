<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TentangKamiController extends Controller
{
    public function index()
    {
        $data_tentang_kami = DB::table('tentang_kami')
        ->select('tentang_kami.*')
        ->first();
        return view('landing.konten.tentangkami', compact('data_tentang_kami'));
    }
}
