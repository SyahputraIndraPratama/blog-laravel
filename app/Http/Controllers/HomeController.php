<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $blogs = Blog::all();

        $data = [
            'blogs' => $blogs
        ];

        return view('home', $data);
    }

    public function detail($id)
    {
        $blog = Blog::where('id',$id)->first();

        $data = [
            'blog' => $blog
        ];

        return view('detail-blog', $data);
    }

    public function hapus($id)
    {
        Blog::where('id', $id)->delete();

        return redirect()->to('home')->with('success', 'Data Berhasil Dihapus');
    }

    public function ubah($id)
    {
        $blog = Blog::where('id',$id)->first();

        
        $data = [
            'blog' => $blog
        ];

        return view('edit-blog', $data);
    }

    public function update(Request $request, $id)
    {
         $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required'
        ],[
            'judul.required' => 'Judul Harus Diisi',
            'kategori.required' => 'Kategori Harus Diisi',
            'deskripsi.required' => 'Deskripsi Harus Diisi', 
        ]);

        Blog::where('id',$id)->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->to('home')->with('success', 'Data Berhasil Diubah');

    }

}
