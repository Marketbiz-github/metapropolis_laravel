<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\DB;

class FaqAdminController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('faq')
                    ->select('faq.*')
                    // ->orderBy('id', 'desc')
                    ->get();
        return view('admin.faq.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $validasiData = $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ]);

        //create ke database
        Faq::create([
			'pertanyaan' => $request->pertanyaan,
			'jawaban' => $request->jawaban,
		]);
    
        return redirect('faq_admin')->with('massage', 'Berhasil Menambah FAQ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $datas = Faq::findOrFail($id);  
        return view('admin.faq.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasiData = $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ]);

        //create ke database
        Faq::findOrFail($id)->update([
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban
        ]);
        
        return redirect('faq_admin')->with('massage', 'Berhasil Mengubah FAQ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd ($request->gambar_lama);

        Faq::destroy($id);

        return redirect('faq_admin')->with('massage', 'Berhasil Menghapus FAQ');
    }
}
