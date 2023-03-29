<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimoni;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;


class TestimoniAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //   $datas = DB::table('testimoni')
      //               ->select('testimoni.*')
      //               // ->orderBy('id', 'desc')
      //               ->get();
      //   $datas2 = DB::table('testimoni')
      //               ->select('testimoni.gambar_testimoni','testimoni.id')
      //               ->where('testimoni.gambar_testimoni', '!=', null)
      //               // ->orderBy('id', 'desc')
      //               ->get();

        $data = Testimoni::all();
        return view('admin.testimoni.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimoni.create');
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
            'fembed_youtube' => 'required',
            'kutipan' => 'required'
        ]);

        //create ke database
        Testimoni::create([
			'data_testimoni' => $request->fembed_youtube,
			'kategori' => 'Youtube',
			'kutipan' => $request->kutipan,
		]);
    
        return redirect('testimoni_admin')->with('massage', 'Berhasil Menambah Testimoni');

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
      
        $datas = Testimoni::findOrFail($id);  
        return view('admin.testimoni.edit', compact('datas'));
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
            'fembed_youtube' => 'required',
            'kutipan' => 'required'
        ]);

        //create ke database
        Testimoni::findOrFail($id)->update([
            'data_testimoni' => $request->fembed_youtube,
            'kutipan' => $request->kutipan
        ]);
        
        return redirect('testimoni_admin')->with('massage', 'Berhasil Mengubah Testimoni');
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

        Testimoni::destroy($id);

        return redirect('testimoni_admin')->with('massage', 'Berhasil Menghapus Testimoni');
    }


    //Gambar Testi

    public function create_gambar_testi()
    {
        return view('admin.testimoni.create_testimoni');
    }

    public function create_gambar_testimoni(Request $request)
    {
        //validasi data
        $validasiData = $request->validate([
            'gambar_testimoni' => 'required|image|file|max:20024',
        ]);

        //upload Gambar
        $file=$request->file('gambar_testimoni');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = public_path('storage/gambar_testimoni/');
		  $file->move($tujuan_upload,$nama_file);

        //create ke database
        Testimoni::create([
			'data_testimoni' => $nama_file,
			'kategori' => 'Image',
			'kutipan' => $request->kutipan,
			
		  ]);
    
        return redirect('testimoni_admin')->with('massage', 'Berhasil Menambah Testimoni');

    }
    public function edit_gambar_testi($id)
    {
      
        $datas = Testimoni::findOrFail($id);  
        return view('admin.testimoni.edit_testimoni', compact('datas'));
    }

    public function update_gambar_testi(Request $request, $id)
    {
        $validasiData = $request->validate([
            'gambar_testimoni' => 'image|file|max:20024',
        ]);

       
        if($request->hasFile('gambar_testimoni')){
            //Hapus file lama
            File::delete(public_path('storage/gambar_testimoni/'. $request->gambar_lama));
        }else{
            Testimoni::findOrFail($id)->update([
                'data_testimoni' => $request->gambar_lama,
            ]);
            return redirect('testimoni_admin')->with('massage', 'Berhasil Mengubah Testimoni');
        }
         $file=$request->file('gambar_testimoni');
         $nama_file = time()."_".$file->getClientOriginalName();
         $tujuan_upload = public_path('storage/gambar_testimoni/');
         $file->move($tujuan_upload,$nama_file);


        //create ke database
        Testimoni::findOrFail($id)->update([
            'data_testimoni' => $nama_file,
            'kutipan' => $request->kutipan,
        ]);
        
        return redirect('testimoni_admin')->with('massage', 'Berhasil Mengubah Testimoni');
    }

    public function delete_gambar_testi(Request $request, $id)
    {
        if($request->gambar_lama){

            File::delete(public_path('storage/gambar_testimoni/'. $request->gambar_lama));
        }
        Testimoni::destroy($id);

        return redirect('testimoni_admin')->with('massage', 'Berhasil Menghapus Testimoni');
    }


    public function testimonial_all()
    {
        $youtube = Testimoni::where('kategori' , 'Youtube')->get();
        $image =  Testimoni::where('kategori' , 'Image')->get();
        return view('landing.konten.testimonial_all', compact('youtube' , 'image'));
    }
}

