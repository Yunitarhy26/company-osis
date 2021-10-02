<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['galeri'] = Galeri::all();
        return view('galeri.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate(
            [
                'kegiatan'  => 'required',
                 'tanggal' => 'required',
                'gambar'=>'image|mimes:jpeg,png,jpg,svg',
            ]
            );
            $file_name = time() . "_" . $request->gambar->getClientOriginalName();
            $gambar = $request->gambar->storeAs('thumbnail', $file_name);
        
                //memasukan data kedatabase
                Galeri::create(
                    [
                        'gambar' => $gambar,
                        'kegiatan' =>$request->kegiatan,
                         'tanggal' =>$request->tanggal,
                    ]);
                    return redirect()->route('galeri.index')->with('berhasil', 'Produk Berhasil di Tambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $galeri = Galeri::find($id);
       

        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri )
    {
        
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'galeri' => 'required',
            'gambar'=>'image|mimes:jpeg,png,jpg,svg',
        ]);
       // $produk = Produk::findOrFail($produk->id);

        if($request->file('gambar') == "") {
    
            $galeri->update([
                'kegiatan'     => $request->kegiatan,
                'tanggal'   => $request->tanggal,
                
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('thumbnail'.$galeri->gambar);
    
            //upload new image
            $file_name = time() . "_" . $request->gambar->getClientOriginalName();
             $gambar = $request->gambar->storeAs('thumbnail', $file_name);
           
    
            $galeri->update([
                'gambar'     => $gambar,
                'kegiatan'     => $request->kegiatan,
                'tanggal'   => $request->tanggal,
            ]);
    
        }
    
        if($galeri){
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        $galeri->delete();
        return redirect()->route('galeri.index')->with('berhasil', ' Berhasil di Hapus');
    }
}
