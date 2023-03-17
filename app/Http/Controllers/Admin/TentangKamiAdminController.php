<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TentangKami;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TentangKamiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_tentang_kami = DB::table('tentang_kami')
        ->select('tentang_kami.*')
        // ->orderBy('id', 'desc')
        ->first();
        return view('admin.tentang_kami.index', compact('data_tentang_kami'));
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
        $datas = TentangKami::findOrFail($id);  
        return view('admin.tentang_kami.edit', compact('datas'));
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
            'gambar_tentang_kami' => 'image|file|max:20024',
            'visi' => 'required|max:255',
            'misi' => 'required'
        ]);

        //cek apakah ada file baru
        if($request->hasFile('gambar_tentang_kami')){
            if($request->gambar_lama == '1669617335-75x75.png'){

            }else{
                //Hapus file lama
                File::delete(public_path('storage/gambar_tentang_kami/'. $request->gambar_lama));
            }
        }else{
            TentangKami::findOrFail($id)->update([
                'gambar_tentang_kami' => $request->gambar_lama,
                'visi' => $request->visi,
                'misi' => $request->misi
            ]);
            return redirect('tentang_kami_admin')->with('massage', 'Berhasil Mengubah Tentang Kami');
        }
         $file=$request->file('gambar_tentang_kami');
         $nama_file = time()."_".$file->getClientOriginalName();
         $tujuan_upload = public_path('storage/gambar_tentang_kami/');
         $file->move($tujuan_upload,$nama_file);

         
        //create ke database
        TentangKami::findOrFail($id)->update([
            'gambar_tentang_kami' => $nama_file,
            'visi' => $request->visi,
            'misi' => $request->misi
        ]);
        
        return redirect('tentang_kami_admin')->with('massage', 'Berhasil Mengubah Tentang Kami');
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
