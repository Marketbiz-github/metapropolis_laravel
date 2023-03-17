<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerluAndaTahu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;

class PerluAndaTahuController extends Controller
{
    public function index()
    {
        $data_perlu_anda_tahu = DB::table('perlu_anda_tahu')
                    ->select('perlu_anda_tahu.*')
                    // ->orderBy('id', 'desc')
                    ->get();
        return view('admin.perlu_anda_tahu.index', compact('data_perlu_anda_tahu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perlu_anda_tahu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        //validasi data
        $validasiData = $request->validate([
            'gambar_ikon' => 'required|image|file|max:20024',
            'gambar_perlu' => 'required|image|file|max:20024',
            'nama_perlu' => 'required|max:255',
            'pengertian' => 'required'
        ]);
        
        //upload Gambar
        $file=$request->file('gambar_ikon');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = public_path('storage/gambar_perlu_anda_tahu/ikon/');
		$file->move($tujuan_upload,$nama_file);

        $file2=$request->file('gambar_perlu');
        $nama_file2 = time()."_".$file2->getClientOriginalName();
        $tujuan_upload2 = public_path('storage/gambar_perlu_anda_tahu/');
		$file2->move($tujuan_upload2,$nama_file2);
        
        //create ke database
        PerluAndaTahu::create([
			'ikon_perlu' => $nama_file,
			'gambar_perlu' => $nama_file2,
			'nama_perlu' => $request->nama_perlu,
			'pengertian' => $request->pengertian
            // 'tgl_upload' =>  Carbon::now()->isoFormat('D MMMM Y')
		]);
    
        // Carbon::now()->isoFormat('dddd, D MMMM Y') (Format Tanggal Indo)
        
       
        return redirect('perlu_anda_tahu')->with('massage', 'Berhasil Menambah Data');

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
      
        $datas = PerluAndaTahu::findOrFail($id);  
        return view('admin.perlu_anda_tahu.edit', compact('datas'));
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
        // dd($request->all());

        $validasiData = $request->validate([
            'gambar_ikon' => 'image|file|max:20024',
            'gambar_perlu' => 'image|file|max:20024',
            'nama_perlu' => 'required|max:255',
            'pengertian' => 'required'
        ]);

        // if(){

        // }
        //cek apakah ada file baru
        if($request->hasFile('gambar_ikon')){
            if($request->gambar_lama == 'imunomodulator.png'){

            }else{
            //Hapus file lama
            File::delete(public_path('storage/gambar_perlu_anda_tahu/ikon/'. $request->gambar_lama));
            }
        }elseif($request->hasFile('gambar_perlu')){
            if($request->gambar_lama2 == 'IMG_6769.JPG'){

            }else{
            //Hapus file lama
            File::delete(public_path('storage/gambar_perlu_anda_tahu/'. $request->gambar_lama2));
            }
        }else{
            PerluAndaTahu::findOrFail($id)->update([
                'ikon_manfaat' => $request->gambar_lama,
                'gambar_perlu' => $request->gambar_lama2,
                'nama_perlu' => $request->nama_perlu,
                'pengertian' => $request->pengertian
            ]);
            return redirect('perlu_anda_tahu')->with('massage', 'Berhasil Mengubah Data');
        }

        if($request->hasFile('gambar_ikon')){
         $file=$request->file('gambar_ikon');
         $nama_file = time()."_".$file->getClientOriginalName();
         $tujuan_upload = public_path('storage/gambar_perlu_anda_tahu/ikon/');
         $file->move($tujuan_upload,$nama_file);
         PerluAndaTahu::findOrFail($id)->update([
            'ikon_perlu' => $nama_file,
            // 'gambar_manfaat' => $nama_file2,
            'nama_perlu' => $request->nama_perlu,
            'pengertian' => $request->pengertian
        ]);
        
        }else{
         $file2=$request->file('gambar_perlu');
         $nama_file2 = time()."_".$file2->getClientOriginalName();
         $tujuan_upload2 = public_path('storage/gambar_perlu_anda_tahu/');
         $file2->move($tujuan_upload2,$nama_file2);
         PerluAndaTahu::findOrFail($id)->update([
            // 'ikon_manfaat' => $nama_file,
            'gambar_perlu' => $nama_file2,
            'nama_perlu' => $request->nama_perlu,
            'pengertian' => $request->pengertian
        ]);
        
        }
        return redirect('perlu_anda_tahu')->with('massage', 'Berhasil Mengubah Data');

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
            File::delete(public_path('storage/gambar_perlu_anda_tahu/ikon/'. $request->gambar_lama));
        }
        if($request->gambar_lama2){
            File::delete(public_path('storage/gambar_perlu_anda_tahu/'. $request->gambar_lama2));
        }

        PerluAndaTahu::destroy($id);

        return redirect('perlu_anda_tahu')->with('massage', 'Berhasil Menghapus Data');
    }
}
