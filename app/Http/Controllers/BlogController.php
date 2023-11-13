<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function tambahblog()
    {
        return view('tambah-blog');
    }

    public function simpanBlog(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:blogs',
            'kategori' => 'required',
            'deskripsi' => 'required'
        ],[
            'judul.required' => 'Judul Harus Diisi',
            'judul.unique' => 'Judul Sudah Diisi',
            'kategori.required' => 'Kategori Harus Diisi',
            'deskripsi.required' => 'Deskripsi Harus Diisi', 
        ]);

        Blog::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

       return redirect()->to('home')->with('success', 'Blog Berhasil Ditambah');
    }
}
