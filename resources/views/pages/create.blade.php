@extends('layouts.app')

@section('body')
    <div class="p-5 h-screen sm:m-14">
        <div class="p-4">
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
                <h1 class="mb-2 text-2xl font-extrabold leading-none tracking-tight text-gray-700 md:text-2xl lg:text-3xl dark:text-gray">Tambah Anggota Perpustakaan</h1>
            </div>
        </div>
        <div class="p-5 h-screen sm:m-5">
            <form action="{{ route('anggota.store') }}" method="POST" >
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nama" class="text-2xl text-gray-900 dark:text-gray">Masukkan Nama :</label>
                        <input type="text" name="nama" class="bg-gray-50 border border-gray-300 text-lg font-medium text-gray-900 rounded-lg w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required="required" autocomplete="off">
                    </div>
                    <div>
                        <label for="last_name" class="text-2xl text-gray-900 dark:text-gray">Masukkan Email :</label>
                        <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-lg font-medium text-gray-900 rounded-lg w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required="required" autocomplete="off">
                    </div>
                    <div>
                        <label for="company" class="text-2xl text-gray-900 dark:text-gray">Masukkan No. Handphone :</label>
                        <input type="text" name="no_hp" class="bg-gray-50 border border-gray-300 text-lg font-medium text-gray-900 rounded-lg w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No. Handphone" required="required" autocomplete="off">
                    </div>
                    <div>
                        <label for="phone" class="text-2xl text-gray-900 dark:text-gray">Masukkan Alamat :</label>
                        <input type="text" name="alamat" class="bg-gray-50 border border-gray-300 text-lg font-medium text-gray-900 rounded-lg w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat" required="required" autocomplete="off">
                    </div>
                </div>
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-large rounded-lg text-lg w-full sm:w-auto px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
@endsection
