@extends('layouts.app')

@section('body')
    <div class="p-5 h-screen mt-5 sm:m-14">
        <div class="p-4">
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
                <h3 class="mb-2 text-2xl font-extrabold leading-none tracking-tight text-gray-700 md:text-2xl lg:text-3xl dark:text-gray">Daftar Anggota Perpustakaan</h3>
            </div>
            <div class="flex flex-wrap items-start justify-end -mb-3">
                <a href="{{ route('anggota.create') }}" class="inline-flex px-5 py-3 text-white bg-sky-500 hover:bg-sky-700 focus:bg-sky-700 rounded-md ml-6 mb-3">
                    <ion-icon class="h-6 w-6 text-white -ml-1 mr-2" name="add-circle-outline"></ion-icon>
                    Tambah Anggota
                </a>
            </div>
        </div>
        <hr />
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @if(Session::has('success'))
            <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-100" role="alert">
                <ion-icon name="information-circle"></ion-icon>
                <div>
                    {{ Session::get('success') }}
                </div>
            </div>
            @endif
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-500 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No.</th>
                        <th scope="col" class="px-6 py-3">Nama</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">No HP</th>
                        <th scope="col" class="px-6 py-3">Alamat</th>
                        <th scope="col" class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if($anggotas->count() > 0)
                    @foreach($anggotas as $anggota)
                        <tr class="bg-white border-b dark:bg-white-800 dark:border-white-700">
                            <th scope="row" class="px-6 py-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-gray">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-gray">
                                {{ $anggota->nama }}
                            </td>
                            <td class="px-6 py-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-gray">
                                {{ $anggota->email }}
                            </td>
                            <td class="px-6 py-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-gray">
                                {{ $anggota->no_hp }}
                            </td>
                            <td class="px-6 py-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-gray">
                                {{ $anggota->alamat }}
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('anggota.show', $anggota->id) }}" class="inline-flex px-4 py-2 text-white bg-gray-500 hover:bg-gray-700 focus:bg-gray-700 rounded-md">Detail</a>
                                    <a href="{{ route('anggota.edit', $anggota->id) }}" type="button" class="inline-flex px-4 py-2 text-black bg-yellow-500 hover:bg-yellow-700 focus:bg-yellow-700 rounded-md">Edit</a>
                                    <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST" type="button" onsubmit="return confirm('Anda Yakin Ingin Menghapus Data {{ $anggota->nama }}?')" class="inline-flex px-4 py-2 text-white bg-red-600 hover:bg-red-700 focus:bg-red-700 rounded-md">
                                        @csrf
                                        @method('DELETE')
                                        <button>Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="5">Belum Ada Anggota Yang Terdaftar</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
