<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perpustakaan</title>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-70 font-sans">
        {{-- memanggil navbar --}}
        @include('layouts.navbar')

        <div>
            {{-- menampilkan body/konten --}}
            @yield('body')
        </div>
    </body>
</html>
