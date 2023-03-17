<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurnal;
use Illuminate\Support\Facades\DB;
class JurnalController extends Controller
{
    public function index()
    {
        $data_jurnal = DB::table('jurnal')
                    ->select('jurnal.*')
                    // ->orderBy('id', 'desc')
                    ->get();
        return view('landing.konten.jurnal', compact('data_jurnal'));
    }
    public function detail($id)
    {
        $datas = Jurnal::findOrFail($id);
        return view('landing.konten.detail_jurnal', compact('datas'));
    }
}
