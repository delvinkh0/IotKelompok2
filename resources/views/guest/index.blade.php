<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('./assets/img/favicon1.ico') }}">
    <title>UVise</title>

    @vite('public/css/app.css')
</head>

<body class="bg-custom">
    <nav class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between p-4 bg-white px-6">
        <a href="{{ route('guest.index') }}" class="flex items-center">
            <img src="{{ asset('assets/svg/UVise.svg') }}" alt="UVise Logo" class="md:h-8 h-6">
        </a>

        <div class="flex gap-4">
            <a href="{{ route('auth.login') }}" class="flex items-center justify-center h-10 px-6 border border-1 border-primary-primary text-primary-primary font-medium rounded-md hover:bg-blue-800 hover:text-white transition duration-300">
                Masuk
            </a>
            <a href="{{ route('auth.register') }}" class="flex items-center justify-center w-24 h-10 px-6 bg-primary-primary text-white font-medium rounded-md hover:bg-blue-700 transition duration-300">
                Daftar
            </a>
        </div>
    </nav>


    <div class="flex flex-col gap-10 px-5 text-center w-full h-full max-w-8xl md:mt-24 mx-auto">
        <h1 class="text-[#2D546E] text-3xl md:text-5xl font-semibold capitalize leading-[50px] mt-24">
            Satu Langkah untuk Kulit Sehat
        </h1>
        <p class="text-black text-lg md:text-2xl font-normal leading-[25px] mb-10">
            Pantau, Pelajari, dan Lindungi Kulit Anda dari Paparan Lingkungan
        </p>

        <div class="flex justify-center gap-4 mt-6">
            <a href="{{ route('auth.register') }}" class="button tes">Daftar Sekarang</a>
            <a href="{{ route('auth.login') }}" class="button border border-1 border-primary-primary text-primary-primary">Masuk ke Akun</a>
        </div>
    </div>


    <div class="max-w-screen-xl mx-auto p-6 text-left mt-20 md:mt-28">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex-1 p-6">
                <h2 class="text-[#2D546E] text-3xl md:text-4xl font-semibold mb-6">Apa Itu UV Index?</h2>
                <p class="text-gray-700 text-lg md:text-xl mb-0">
                    UV Index adalah pengukuran intensitas sinar ultraviolet (UV) dari matahari yang mencapai permukaan bumi. UV Index membantu menunjukkan seberapa besar risiko kulit Anda terkena kerusakan akibat sinar UV. Indeks ini berkisar dari 0 (rendah) hingga 11+ (sangat tinggi).
                </p>
            </div>
            <div class="hidden lg:flex items-center justify-center p-6">
                <img src={{ asset("assets/img/dashboard.png") }} alt="Skin Types Illustration" class="w-2/3 h-auto object-cover">
            </div>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto p-6 text-left mt-20 md:mt-28">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="md:w-full">
                <h2 class="text-[#2D546E] text-3xl md:text-4xl font-semibold mb-6">Pengaruh UV Terhadap Kulit</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-5 gap-10 text-center">
                    <!-- UV Index Rendah -->
                    <div class="p-6 bg-[#FAF9F5] flex flex-col gap-4 shadow-lg rounded-lg transition-transform duration-200 hover:scale-105">
                        <div class="flex flex-col gap-4 justify-center items-center">
                            <img src={{ asset("assets/svg/Sun/Low.svg") }} alt="UV Rendah" class="h-20 w-50">
                            <p class="px-4 py-1 rounded-md bg-success-successContainer w-fit">0-2</p>
                        </div>
                        <h3 class="text-xl font-semibold text-[#203C4D] mb-2">UV Index Rendah</h3>
                        <p class="text-gray-600">Risiko rendah untuk kerusakan kulit. Namun, tetap disarankan untuk melindungi kulit dengan pelembap jika beraktivitas di luar.</p>
                    </div>

                    <!-- UV Index Sedang -->
                    <div class="p-6 bg-[#FAF9F5] flex flex-col gap-4 shadow-lg rounded-lg transition-transform duration-200 hover:scale-105">
                        <div class="flex flex-col gap-4 justify-center items-center">
                            <img src={{ asset("assets/svg/Sun/Moderate.svg") }} alt="UV Rendah" class="h-20 w-50">
                            <p class="px-4 py-1 rounded-md bg-warning-warningContainer w-fit">3-5</p>
                        </div>
                        <h3 class="text-xl font-semibold text-[#203C4D] mb-2">UV Index Sedang</h3>
                        <p class="text-gray-600">Risiko sedang untuk kerusakan kulit. Disarankan memakai sunscreen dan reapply setiap beberapa jam jika beraktivitas di luar.</p>
                    </div>

                    <!-- UV Index Tinggi -->
                    <div class="p-6 bg-[#FAF9F5] flex flex-col gap-4 shadow-lg rounded-lg transition-transform duration-200 hover:scale-105">
                        <div class="flex flex-col gap-4 justify-center items-center">
                            <img src={{ asset("assets/svg/Sun/High.svg") }} alt="UV Tinggi" class="h-20 w-50">
                            <p class="px-4 py-1 rounded-md bg-[#FA9E42] text-white w-fit">6-7</p>
                        </div>
                        <h3 class="text-xl font-semibold text-[#203C4D] mb-2">UV Index Tinggi</h3>
                        <p class="text-gray-600">Risiko tinggi untuk kerusakan kulit. Sangat disarankan memakai sunscreen dengan SPF tinggi dan hindari paparan sinar matahari langsung.</p>
                    </div>

                    <!-- UV Index Sangat Tinggi -->
                    <div class="p-6 bg-[#FAF9F5] flex flex-col gap-4 shadow-lg rounded-lg transition-transform duration-200 hover:scale-105">
                        <div class="flex flex-col gap-4 justify-center items-center">
                            <img src={{ asset("assets/svg/Sun/VeryHigh.svg") }} alt="UV Sangat Tinggi" class="h-20 w-50">
                            <p class="px-4 py-1 rounded-md bg-[#FF7F00] text-white w-fit">8-10</p>
                        </div>
                        <h3 class="text-xl font-semibold text-[#203C4D] mb-2">UV Index Sangat Tinggi</h3>
                        <p class="text-gray-600">Risiko sangat tinggi untuk kerusakan kulit. Gunakan sunscreen dengan SPF tinggi, pakaian pelindung, dan hindari keluar saat matahari paling terik.</p>
                    </div>

                    <!-- UV Index Ekstrem -->
                    <div class="p-6 bg-[#FAF9F5] flex flex-col gap-4 shadow-lg rounded-lg transition-transform duration-200 hover:scale-105">
                        <div class="flex flex-col gap-4 justify-center items-center">
                            <img src={{ asset("assets/svg/Sun/Extreme.svg") }} alt="UV Ekstrem" class="h-20 w-50">
                            <p class="px-4 py-1 rounded-md bg-[#F55023] text-white w-fit">11+</p>
                        </div>
                        <h3 class="text-xl font-semibold text-[#203C4D] mb-2">UV Index Ekstrem</h3>
                        <p class="text-gray-600">Risiko ekstrem untuk kerusakan kulit. Gunakan sunscreen dengan SPF tinggi, pakaian pelindung, dan sangat disarankan untuk tetap berada di dalam ruangan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
