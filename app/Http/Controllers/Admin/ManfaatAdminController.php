<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manfaat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;

class ManfaatAdminController extends Controller
{
    public function index()
    {
        $data_manfaat = DB::table('manfaat')
                    ->select('manfaat.*')
                    // ->orderBy('id', 'desc')
                    ->get();
        return view('admin.manfaat.index', compact('data_manfaat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manfaat.create');
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
            'gambar_manfaat' => 'required|image|file|max:20024',
            'nama_manfaat' => 'required|max:255',
            'pengertian' => 'required'
        ]);

        //upload Gambar
        $file=$request->file('gambar_ikon');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = public_path('storage/gambar_manfaat/ikon/');
		$file->move($tujuan_upload,$nama_file);
        
        $file2=$request->file('gambar_manfaat');
        $nama_file2 = time()."_".$file2->getClientOriginalName();
        $tujuan_upload2 = public_path('storage/gambar_manfaat/');
		$file2->move($tujuan_upload2,$nama_file2);

        //create ke database
        Manfaat::create([
			'ikon_manfaat' => $nama_file,
			'gambar_manfaat' => $nama_file2,
			'nama_manfaat' => $request->nama_manfaat,
			'pengertian' => $request->pengertian
            // 'tgl_upload' =>  Carbon::now()->isoFormat('D MMMM Y')
		]);
    
        // Carbon::now()->isoFormat('dddd, D MMMM Y') (Format Tanggal Indo)
        
       
        return redirect('manfaat_admin')->with('massage', 'Berhasil Menambah Manfaat');

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
      
        $datas = Manfaat::findOrFail($id);  
        return view('admin.manfaat.edit', compact('datas'));
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
            'nama_manfaat' => 'required|max:255',
            'pengertian' => 'required'
        ]);

        // if(){

        // }
        //cek apakah ada file baru
        if($request->hasFile('gambar_ikon')){
            if($request->gambar_lama == 'imunomodulator.png'){

            }else{
            //Hapus file lama
            File::delete(public_path('storage/gambar_manfaat/ikon/'. $request->gambar_lama));
            }
        }elseif($request->hasFile('gambar_manfaat')){
            if($request->gambar_lama2 == 'IMG_6769.JPG'){

            }else{
            //Hapus file lama
            File::delete(public_path('storage/gambar_manfaat/'. $request->gambar_lama2));
            }
        }else{
            Manfaat::findOrFail($id)->update([
                'ikon_manfaat' => $request->gambar_lama,
                'gambar_manfaat' => $request->gambar_lama2,
                'nama_manfaat' => $request->nama_manfaat,
                'pengertian' => $request->pengertian
            ]);
            return redirect('manfaat_admin')->with('massage', 'Berhasil Mengubah Manfaat');
        }

        if($request->hasFile('gambar_ikon')){
         $file=$request->file('gambar_ikon');
         $nama_file = time()."_".$file->getClientOriginalName();
         $tujuan_upload = public_path('storage/gambar_manfaat/ikon/');
         $file->move($tujuan_upload,$nama_file);
         Manfaat::findOrFail($id)->update([
            'ikon_manfaat' => $nama_file,
            // 'gambar_manfaat' => $nama_file2,
            'nama_manfaat' => $request->nama_manfaat,
            'pengertian' => $request->pengertian
        ]);
        
        }else{
         $file2=$request->file('gambar_manfaat');
         $nama_file2 = time()."_".$file2->getClientOriginalName();
         $tujuan_upload2 = public_path('storage/gambar_manfaat/');
         $file2->move($tujuan_upload2,$nama_file2);
         Manfaat::findOrFail($id)->update([
            // 'ikon_manfaat' => $nama_file,
            'gambar_manfaat' => $nama_file2,
            'nama_manfaat' => $request->nama_manfaat,
            'pengertian' => $request->pengertian
        ]);
        
        }
        return redirect('manfaat_admin')->with('massage', 'Berhasil Mengubah Manfaat');

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
            File::delete(public_path('storage/gambar_manfaat/ikon/'. $request->gambar_lama));
        }
        if($request->gambar_lama2){
            File::delete(public_path('storage/gambar_manfaat/'. $request->gambar_lama2));
        }

        Manfaat::destroy($id);

        return redirect('manfaat_admin')->with('massage', 'Berhasil Menghapus Manfaat');
    }
}
