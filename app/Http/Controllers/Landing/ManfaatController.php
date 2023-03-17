<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Manfaat;

class ManfaatController extends Controller
{
    public function index()
    {
        $data_manfaat = DB::table('manfaat')
                    ->select('manfaat.*')
                    // ->orderBy('id', 'desc')
                    ->get();
        return view('landing.konten.manfaat', compact('data_manfaat'));
    }
    public function detail($id)
    {
        $datas = Manfaat::findOrFail($id);
        return view('landing.konten.detail_manfaat', compact('datas'));
    }

    // public function manfaat_all()
    // {
    //     $data_manfaat = DB::table('manfaat')
    //                 ->select('manfaat.*')
    //                 // ->orderBy('id', 'desc')
    //                 ->get();
    //     return view('landing.konten.manfaat_all', compact('data_manfaat'));
    // }
}
