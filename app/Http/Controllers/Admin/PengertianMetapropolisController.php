<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengertianMetapropolis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PengertianMetapropolisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_pengertian = DB::table('pengertian_metapropolis')
        ->select('pengertian_metapropolis.*')
        // ->orderBy('id', 'desc')
        ->first();
        return view('admin.pengertian_metapropolis.index', compact('data_pengertian'));
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
        //
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
        $datas = PengertianMetapropolis::findOrFail($id);  
        return view('admin.pengertian_metapropolis.edit', compact('datas'));
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
        // dd($request->gambar_lama);
        $validasiData = $request->validate([
            'gambar_pengertian' => 'image|file|max:20024',
            'judul' => 'required|max:255',
            'pengertian' => 'required'
        ]);

        //cek apakah ada file baru
        if($request->hasFile('gambar_pengertian')){
            if($request->gambar_lama == '1669617335-75x75.png'){

            }else{
                //Hapus file lama
                File::delete(public_path('storage/gambar_pengertian/'. $request->gambar_lama));
            }
        }else{
            PengertianMetapropolis::findOrFail($id)->update([
                'gambar_pengertian' => $request->gambar_lama,
                'judul' => $request->judul,
                'pengertian' => $request->pengertian
            ]);
            return redirect('pengertian_metapropolis')->with('massage', 'Berhasil Mengubah Pengertian');
        }
         $file=$request->file('gambar_pengertian');
         $nama_file = time()."_".$file->getClientOriginalName();
         $tujuan_upload = public_path('storage/gambar_pengertian/');
         $file->move($tujuan_upload,$nama_file);

         
        //create ke database
        PengertianMetapropolis::findOrFail($id)->update([
            'gambar_pengertian' => $nama_file,
            'judul' => $request->judul,
            'pengertian' => $request->pengertian
        ]);
        
        return redirect('pengertian_metapropolis')->with('massage', 'Berhasil Mengubah Pengertian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
