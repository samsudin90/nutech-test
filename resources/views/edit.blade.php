@extends('layouts.template')

@section('content')
    <div class="flex justify-center items-center">
        <div class="px-6 py-6 lg:px-8 w-full">
            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Barang</h3>
            <form class="space-y-6" action="/update/{{$data['id']}}" method="POST" enctype="multipart/form-data">
                @method("PUT")
              @csrf
                <div>
                    <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Barang</label>
                    <input type="file" accept="image/png, image/jpeg" name="gambar" id="gambar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Macbook Pro">
                </div>
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
                    <input type="text" value={{$data['nama']}} name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Macbook Pro" required>
                </div>
                <div>
                    <label for="harga_beli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Beli Barang</label>
                    <input type="number" value={{$data['harga_beli']}} name="harga_beli" id="harga_beli" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Macbook Pro" required>
                </div>
                <div>
                    <label for="harga_jual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Jual Barang</label>
                    <input type="number" value={{$data['harga_jual']}} name="harga_jual" id="harga_jual" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Macbook Pro" required>
                </div>
                <div>
                    <label for="stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok Barang</label>
                    <input type="number" value={{$data['stok']}} name="stok" id="stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Macbook Pro" required>
                </div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                <a href="/" type="button" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Batal</a>
            </form>
        </div>
    </div>
@endsection