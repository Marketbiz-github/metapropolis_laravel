<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DetailBlogController extends Controller
{
    public function index($slug)
    {
        $datas = Blog::where('slug' , $slug)->first();
        
        return view('landing.konten.detail_blog', compact('datas'));
    }

    public function blog_all()
    {
        $data_blog = DB::table('blogs')
                    ->select('blogs.*')
                    ->orderBy('id', 'desc')
                    ->get();
        return view('landing.konten.blog_all', compact('data_blog'));
    }

    public function generateSlug()
    {
        $datas = Blog::all();

        foreach ($datas as $data) {
            $slug = Str::slug($data->judul, '-');

            $data->slug = $slug;
            $data->save();
        }

        return redirect()->route('blog_all');
    }
}
