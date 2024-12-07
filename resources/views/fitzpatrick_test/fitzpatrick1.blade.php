<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitzpatrick Skin Test</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('./assets/img/favicon1.ico') }}">

    @vite('public/css/app.css')
    <style>

    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <!-- Container Utama -->
    <div class="flex items-center bg-white rounded-lg overflow-hidden max-w-4xl mx-auto">

        <!-- Gambar di Kiri -->
        <div class="hidden lg:flex items-center justify-center p-6">
            <img src="{{ asset('assets/img/Fitzpatrick/fitz1.png') }}" alt="Skin Types Illustration" class="w-[300px] h-auto object-cover">
        </div>

        <!-- Teks dan Button di Kanan -->
        <div class="p-8 flex flex-col items-start gap-6">
            <!-- Teks Utama dengan Background Gambar -->
            <div class="text-background-fitzpatrick text-3xl font-semibold capitalize leading-[30px]">
                Ingin tahu jenis kulitmu? Yuk, coba tes berikut!
            </div>

            <!-- Tombol -->
<div class="flex gap-4">
    <!-- Button Lanjut (default selected) -->
    <a href="{{ route('fitzpatrick_test.fitzpatrick2') }}" class="button tes">Lanjut</a>

</div>
    </div>

</body>
</html>
