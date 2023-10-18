@extends('layouts.template')

@section('content')
    <div class="flex h-screen justify-center items-center">
<div class="px-10 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="{{url('/gambar/'.$data['gambar'])}}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$data['nama']}}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Harga Jual : {{$data['harga_jual']}} </p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Harga Beli : {{$data['harga_beli']}} </p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Stok : {{$data['stok']}} </p>
        <div class="flex justify-between items-center">
            <a href="/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Back
            </a>
            <a href="/edit/{{$data['id']}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Edit
            </a>
        </div>
    </div>
</div>
</div>

@endsection