<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\RanchMarket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingMasterController extends Controller
{
    public function index(Request $request)
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
        $data_ranch_markets = DB::table('ranch_markets')
                    ->select('ranch_markets.*');
        $provinces = Province::whereHas('ranchMarket')->get();
        
        if($province = $request->input('province')){
            $ranch_markets = RanchMarket::whereRelation('regency', 'province_id', $province)->get();
        }else{
            $ranch_markets = RanchMarket::whereRelation('regency', 'province_id', $provinces->first()->id)->get();
        }

        return view('landing.layouts.master', compact('data_blog','data_pengertian','data_manfaat','data_perlu','data_testimoni', 'provinces', 'ranch_markets'));
    }
    // public function PengertianMetapropolis()
    // {
    //     $data_pengertian = DB::table('pengertian_metapropolis')
    //                 ->select('pengertian_metapropolis.*')
    //                 ->get();
    //     return view('landing.layouts.master', compact('data_blog'));
    // }

}
