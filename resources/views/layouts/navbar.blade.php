<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a class="flex items-center rtl:space-x-reverse">
            <span class="text-2xl font-semibold whitespace-nowrap dark:text-white">Perpustakaan</span>
        </a>
        {{-- menampilkan halaman /anggota --}}
        <a href="{{ route('anggota.index')}}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Anggota</a>
    </div>
</nav>
