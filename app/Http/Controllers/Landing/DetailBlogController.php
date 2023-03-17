<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class DetailBlogController extends Controller
{
    public function index($id)
    {
        $datas = Blog::findOrFail($id);
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
}
