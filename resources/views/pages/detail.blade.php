@extends('layouts.app')

@section('body')
    <div class="p-5 h-screen sm:m-14">
        <div class="p-4">
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
                <h1 class="mb-2 text-2xl font-extrabold leading-none tracking-tight text-gray-700 md:text-2xl lg:text-3xl dark:text-gray">Detail Data {{ $anggota->nama }}</h1>
            </div>
        </div>
        <div class="p-5 h-screen sm:m-5">
            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nama" class="text-2xl text-gray-900 dark:text-gray">Nama :</label>
                        <input type="text" name="nama" class="bg-gray-50 border border-gray-300 text-lg font-medium text-gray-900 rounded-lg w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $anggota->nama }}" disabled>
                    </div>
                    <div>
                        <label for="last_name" class="text-2xl text-gray-900 dark:text-gray">Email :</label>
                        <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-lg font-medium text-gray-900 rounded-lg w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $anggota->email }}" disabled>
                    </div>
                    <div>
                        <label for="company" class="text-2xl text-gray-900 dark:text-gray">Handphone :</label>
                        <input type="text" name="no_hp" class="bg-gray-50 border border-gray-300 text-lg font-medium text-gray-900 rounded-lg w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $anggota->no_hp }}" disabled>
                    </div>
                    <div>
                        <label for="phone" class="text-2xl text-gray-900 dark:text-gray">Alamat :</label>
                        <input type="text" name="alamat" class="bg-gray-50 border border-gray-300 text-lg font-medium text-gray-900 rounded-lg w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $anggota->alamat }}" disabled>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
