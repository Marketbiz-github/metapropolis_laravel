<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurnal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;

class JurnalAdminController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('jurnal')
                    ->select('jurnal.*')
                    ->orderBy('id', 'desc')
                    ->get();
        return view('admin.jurnal.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jurnal.create');
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
            'gambar_jurnal' => 'required|image|file|max:20024',
            'judul' => 'required|max:255',
            'isi' => 'required'
        ]);

        //upload Gambar
        $file=$request->file('gambar_jurnal');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = public_path('storage/gambar_jurnal/');
		$file->move($tujuan_upload,$nama_file);

        //create ke database
        Jurnal::create([
			'gambar_jurnal' => $nama_file,
			'judul' => $request->judul,
			'isi' => $request->isi,
            // 'tgl_upload' =>  Carbon::now()->isoFormat('D MMMM Y')
		]);
    
        // Carbon::now()->isoFormat('dddd, D MMMM Y') (Format Tanggal Indo)
        
       
        return redirect('jurnal_admin')->with('massage', 'Berhasil Menambah Jurnal');

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
      
        $datas = Jurnal::findOrFail($id);  
        return view('admin.jurnal.edit', compact('datas'));
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
            'gambar_jurnal' => 'image|file|max:20024',
            'judul' => 'required|max:255',
            'isi' => 'required'
        ]);

        // if(){

        // }
        //cek apakah ada file baru
        if($request->hasFile('gambar_jurnal')){
            //Hapus file lama
            File::delete(public_path('storage/gambar_jurnal/'. $request->gambar_lama));
        }else{
            Jurnal::findOrFail($id)->update([
                'gambar_jurnal' => $request->gambar_lama,
                'judul' => $request->judul,
                'isi' => $request->isi
            ]);
            return redirect('jurnal_admin')->with('massage', 'Berhasil Mengubah Jurnal');
        }
         $file=$request->file('gambar_jurnal');
         $nama_file = time()."_".$file->getClientOriginalName();
         $tujuan_upload = public_path('storage/gambar_jurnal/');
         $file->move($tujuan_upload,$nama_file);


        //create ke database
        Jurnal::findOrFail($id)->update([
            'gambar_jurnal' => $nama_file,
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        
        return redirect('jurnal_admin')->with('massage', 'Berhasil Mengubah Jurnal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // dd ($request->gambar_lama);
        if($request->gambar_lama){
            File::delete(public_path('storage/gambar_jurnal/'. $request->gambar_lama));
        }

        Jurnal::destroy($id);

        return redirect('jurnal_admin')->with('massage', 'Berhasil Menghapus Jurnal');
    }
}
