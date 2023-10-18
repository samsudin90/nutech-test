<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::paginate(4);
        return view("index", compact('data'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "nama" => "required|unique:products",
            "harga_jual" => "required",
            "harga_beli" => "required",
            "stok" => "required",
            "gambar" => "required|mimes:jpeg,png|max:100"
        ], [
            'nama.unique' => 'Nama barang sudah ada',
            'gambar.max' => 'Gambar maksimal 100kb',
            'gambar.mimes' => 'Gambar harus jpg atau png'
        ]);
        $file = $request->file('gambar');
        $file->move('gambar', $file->getClientOriginalName());

        Product::create([
            "nama" => $request->nama,
            "gambar" => $file->getClientOriginalName(),
            "harga_jual" => $request->harga_jual,
            "harga_beli" => $request->harga_beli,
            "stok" => $request->stok
        ]);
        return redirect('/')->with('success', 'Barang berhasil ditambahkan');
    }

    public function show($id) 
    {
        $data = Product::findOrFail($id);
        return view('detail', compact('data'));
    }

    public function edit($id) 
    {
        $data = Product::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Product::findOrFail($id);
        if($request->nama === $data['nama']) {
            $validate = $request->validate([
                "harga_jual" => "required",
                "harga_beli" => "required",
                "stok" => "required",
                "gambar" => "nullable|mimes:jpg,png|max:100"
            ]);
        } else {
            $validate = $request->validate([
                "nama" => "required|unique:products",
                "harga_jual" => "required",
                "harga_beli" => "required",
                "stok" => "required",
                "gambar" => "nullable|mimes:jpeg,png|max:100"
            ], [
                'nama.unique' => 'Nama barang sudah ada',
                'gambar.max' => 'Gambar maksimal 100kb',
                'gambar.mimes' => 'Gambar harus jpg atau png'
            ]);
        }
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $file->move('gambar', $file->hashName());
            // dd($validate);
            $validate["gambar"] = $file->hashName();
        }
        $data->update($validate);
        return redirect('/')->with('success', 'Barang berhasil diubah');
    }

    public function destroy($id) 
    {
        $data = Product::findOrFail($id);
        $data->delete();
        return redirect('/')->with('success', 'Barang berhasil dihapus');
    }

    public function search(Request $request) 
    {
        $data = Product::where('nama', 'like', '%'.$request->cari.'%')->paginate(4);
        return view('index', compact('data'));
    }
}
