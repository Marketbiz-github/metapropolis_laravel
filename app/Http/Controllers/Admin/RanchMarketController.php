<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RanchMarket;
use Illuminate\Http\Request;

class RanchMarketController extends Controller
{
    public function index()
    {
        $ranchMarkets = RanchMarket::with(['regency', 'province']);
        return view('admin.ranch_market.index', compact('ranchMarkets'));
    }
}
