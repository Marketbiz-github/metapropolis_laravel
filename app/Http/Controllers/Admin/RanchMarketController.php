<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RanchMarket;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;

class RanchMarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ranchMarkets = RanchMarket::with(['regency.province'])->get();
        $provinces = Province::all();
        $regencies = Regency::all();
        return view('admin.ranch_market.index', compact('ranchMarkets', 'provinces', 'regencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       RanchMarket::create($request->all());

        return redirect()->back()->with('message', 'Berhasil menambah data ranch market');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RanchMarket  $ranchMarket
     * @return \Illuminate\Http\Response
     */
    public function show(RanchMarket $ranchMarket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RanchMarket  $ranchMarket
     * @return \Illuminate\Http\Response
     */
    public function edit(RanchMarket $ranchMarket)
    {
        return response()->json($ranchMarket->load('regency'), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RanchMarket  $ranchMarket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RanchMarket $ranchMarket)
    {
        $ranchMarket->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RanchMarket  $ranchMarket
     * @return \Illuminate\Http\Response
     */
    public function destroy(RanchMarket $ranchMarket)
    {
        $ranchMarket->delete();

        return redirect()->back();
    }
}
