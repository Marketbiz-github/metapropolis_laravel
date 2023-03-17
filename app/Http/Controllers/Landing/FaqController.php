<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        $data_faq = DB::table('faq')
                    ->select('faq.*')
                    // ->orderBy('id', 'desc')
                    ->get();
        return view('landing.konten.faq', compact('data_faq'));
    }
}
