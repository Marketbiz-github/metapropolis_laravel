<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingMasterController extends Controller
{
    public function index()
    {
        $data_blog = DB::table('blogs')
                    ->select('blogs.*')
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();
        $data_pengertian = DB::table('pengertian_metapropolis')
                    ->select('pengertian_metapropolis.*')
                    ->first();
        $data_manfaat = DB::table('manfaat')
                    ->select('manfaat.*')
                    ->take(4)
                    ->get();
        $data_perlu = DB::table('perlu_anda_tahu')
                    ->select('perlu_anda_tahu.*')
                    ->take(3)
                    ->get();
        $data_testimoni = DB::table('testimoni')
                    ->select('testimoni.*')
                    // ->take(3)
                    ->get();

        return view('landing.layouts.master', compact('data_blog','data_pengertian','data_manfaat','data_perlu','data_testimoni'));
    }
    // public function PengertianMetapropolis()
    // {
    //     $data_pengertian = DB::table('pengertian_metapropolis')
    //                 ->select('pengertian_metapropolis.*')
    //                 ->get();
    //     return view('landing.layouts.master', compact('data_blog'));
    // }

}
