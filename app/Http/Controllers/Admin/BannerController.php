<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.landing_banner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.landing_banner.upload_gambar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        // $this->validate($request, [
		// 	'gambar_banner' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		// 	// 'keterangan' => 'required',
		// ]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('gambar_banner');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'public/image_test';
		$file->move($tujuan_upload,$nama_file);
 
		Banner::create([
			'nama_banner' => $nama_file,
			// 'keterangan' => $request->keterangan,
		]);
 
		return redirect()->back();
    
       }
    
    public function upload_banner(Request $request){
        if($request->hasFile('gambar_banner')){
            $resorce       = $request->file('gambar_banner');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/image_test", $name);
            $save = DB::table('banner')->insert(['nama_banner' => $name]);
            echo "Gambar berhasil di upload";
        }else{
            echo "Gagal upload gambar";
        }
    }

    public function imageUploadPost()
    {
    request()->validate([
        'gambar_banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time().'.'.request()->gambar_banner->getClientOriginalExtension();
    request()->gambar_banner->move(public_path('images_propolis'), $imageName);
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
        //
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
        //
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
