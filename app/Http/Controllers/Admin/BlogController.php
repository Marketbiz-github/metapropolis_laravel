<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('blogs')
                    ->select('blogs.*')
                    ->orderBy('id', 'desc')
                    ->get();
        return view('admin.blog.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
            'gambar_blog' => 'required|image|file|max:20024',
            'judul' => 'required|max:255',
            'isi' => 'required'
        ]);

        //upload Gambar
        $file=$request->file('gambar_blog');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = public_path('storage/gambar_blog/');
		$file->move($tujuan_upload,$nama_file);

        //create ke database
        Blog::create([
			'gambar_blog' => $nama_file,
			'judul' => $request->judul,
			'isi' => $request->isi,
            'tgl_upload' =>  Carbon::now()->isoFormat('D MMMM Y')
		]);
    
        // Carbon::now()->isoFormat('dddd, D MMMM Y') (Format Tanggal Indo)
        
       
        return redirect('blog')->with('massage', 'Berhasil Menambah Blog');

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
      
        $datas = Blog::findOrFail($id);  
        return view('admin.blog.edit', compact('datas'));
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
            'gambar_blog' => 'image|file|max:20024',
            'judul' => 'required|max:255',
            'isi' => 'required'
        ]);

        // if(){

        // }
        //cek apakah ada file baru
        if($request->hasFile('gambar_blog')){
            //Hapus file lama
            File::delete(public_path('storage/gambar_blog/'. $request->gambar_lama));
        }else{
            Blog::findOrFail($id)->update([
                'gambar_blog' => $request->gambar_lama,
                'judul' => $request->judul,
                'isi' => $request->isi
            ]);
            return redirect('blog')->with('massage', 'Berhasil Mengubah Blog');
        }
         $file=$request->file('gambar_blog');
         $nama_file = time()."_".$file->getClientOriginalName();
         $tujuan_upload = public_path('storage/gambar_blog/');
         $file->move($tujuan_upload,$nama_file);


        //create ke database
        Blog::findOrFail($id)->update([
            'gambar_blog' => $nama_file,
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        
        return redirect('blog')->with('massage', 'Berhasil Mengubah Blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if($blog->gambar_blog){

            File::delete(public_path('storage/gambar_blog/'. $blog->gambar_blog));
        }
        Blog::destroy($blog->id);

        return redirect('blog')->with('massage', 'Berhasil Menghapus Blog');
    }
}
