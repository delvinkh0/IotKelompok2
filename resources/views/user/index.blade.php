@extends('user.layouts.app')

@section('content')
    <main class="grid grid-cols-12 py-4 lg:px-12 md:px-6 px-4 gap-3">
        <div class="lg:col-span-8 col-span-12 grid grid-cols-12 gap-3">
            <div class="sm:col-span-8 col-span-12 grid grid-cols-1 gap-3">
                <div class="col-span-1 bg-primary-100 rounded-md relative overflow-hidden">
                    <div class="flex sm:flex-row flex-col sm:justify-between items-center sm:gap-2 gap-6 py-6 md:px-4 px-2 z-1 relative">
                        <div class="title-desc flex flex-col gap-2">
                            <h3 class="text-base font-light sm:text-left text-center">Aplikasikan ulang sunscreen dalam</h3>
                            <p class="text-3xl font-semibold sm:text-left text-center">48 Menit</p>
                        </div>
                        <button class="bg-primary-primary hover:bg-primary-dark p-3 rounded-md text-primary-onPrimary w-fit">Gunakan Ulang Sunscreen</button>
                    </div>

                    <img src="{{ asset('./assets/img/Sunscreens.png') }}" alt="Sunscreen" class="absolute -bottom-4 absolute m-auto left-0 right-0 w-3/5 z-0">
                    <img src="{{ asset('./assets/svg/Cloud.svg') }}" alt="Cloud" class="w-full -z-1">
                </div>

                <div class="col-span-1 bg-yellow-300 py-6 px-4 rounded-md">
                    <div class="flex justify-between items-center gap-6">
                        <div class="flex flex-col gap-6">
                            <div class="flex items-center justify-between">
                                <div class="title-desc flex flex-col gap-2">
                                    <h3 class="text-base font-light">UV Index</h3>
                                    <p class="text-3xl font-semibold">5.2</p>
                                </div>

                                <div class="md:hidden block">
                                    <svg width="158" height="158" viewBox="0 0 158 158" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-20 h-fit">
                                        <path d="M78.8334 45.9167C97.0034 45.9167 111.75 60.6634 111.75 78.8334C111.75 97.0034 97.0034 111.75 78.8334 111.75C60.6634 111.75 45.9167 97.0034 45.9167 78.8334C45.9167 60.6634 60.6634 45.9167 78.8334 45.9167Z" fill="#DBA83B" stroke="#DBA83B" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M78.8333 138.083V144.667V138.083ZM138.083 78.8333H144.667H138.083ZM78.8333 19.5833V13V19.5833ZM19.5833 78.8333H13H19.5833Z" fill="#DBA83B"/>
                                        <path d="M78.8333 138.083V144.667M138.083 78.8333H144.667M78.8333 19.5833V13M19.5833 78.8333H13" stroke="#DBA83B" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M121.625 121.625L124.917 124.917L121.625 121.625ZM121.625 36.0417L124.917 32.75L121.625 36.0417ZM36.0417 36.0417L32.75 32.75L36.0417 36.0417ZM36.0417 121.625L32.75 124.917L36.0417 121.625Z" fill="#DBA83B"/>
                                        <path d="M121.625 121.625L124.917 124.917M121.625 36.0417L124.917 32.75M36.0417 36.0417L32.75 32.75M36.0417 121.625L32.75 124.917" stroke="#DBA83B" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="subtitle text-sm font-light leading-6"><span class="font-medium">Moderate risk:</span> Some skin types may burn. Wear sunscreen and sunglasses if outdoors for long.</div>
                        </div>
                        <div class="md:block hidden">
                            <svg width="158" height="158" viewBox="0 0 158 158" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-36">
                                <path d="M78.8334 45.9167C97.0034 45.9167 111.75 60.6634 111.75 78.8334C111.75 97.0034 97.0034 111.75 78.8334 111.75C60.6634 111.75 45.9167 97.0034 45.9167 78.8334C45.9167 60.6634 60.6634 45.9167 78.8334 45.9167Z" fill="#DBA83B" stroke="#DBA83B" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M78.8333 138.083V144.667V138.083ZM138.083 78.8333H144.667H138.083ZM78.8333 19.5833V13V19.5833ZM19.5833 78.8333H13H19.5833Z" fill="#DBA83B"/>
                                <path d="M78.8333 138.083V144.667M138.083 78.8333H144.667M78.8333 19.5833V13M19.5833 78.8333H13" stroke="#DBA83B" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M121.625 121.625L124.917 124.917L121.625 121.625ZM121.625 36.0417L124.917 32.75L121.625 36.0417ZM36.0417 36.0417L32.75 32.75L36.0417 36.0417ZM36.0417 121.625L32.75 124.917L36.0417 121.625Z" fill="#DBA83B"/>
                                <path d="M121.625 121.625L124.917 124.917M121.625 36.0417L124.917 32.75M36.0417 36.0417L32.75 32.75M36.0417 121.625L32.75 124.917" stroke="#DBA83B" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-4 col-span-12 bg-yellow-200 px-4 pb-0 pt-6 rounded-md bg-cover h-full" style="background-image: url(./assets/img/Pattern/Pattern.png);">
                <div class="flex sm:flex-col flex-row sm:gap-3 gap-2 justify-between h-full sm:items-center sm:items-end items-start">
                    <div class="title-desc flex flex-col gap-2 items-start h-max pb-6">
                        <h3 class="text-xl font-medium sm:text-center text-left w-full">Tipe Kulit <span class="tipe-kulit">III</span></h3>
                        <p class="text-sm font-light sm:text-center text-left leading-6 md:px-4">Kamu mampu bertahan di luar ruangan selama kira-kira 2 jam pada range UV 5 - 7</p>
                    </div>
                    <img src="./assets/svg/SkinType/SkinType3.svg" alt="Skin Type 3 Person" class="sm:h-full h-fit sm:max-h-80">
                </div>
            </div>

            <div class="sm:col-span-6 col-span-12 bg-yellow-200 px-4 py-6 rounded-md">
                <div class="flex items-center justify-between">
                    <div class="title-desc flex flex-col gap-2">
                        <h3 class="text-base font-light">Suhu</h3>
                        <p class="text-3xl font-semibold">38°C</p>
                    </div>

                    <img src="{{ asset('./assets/svg/Dashboard/Temperature.svg') }}" alt="Temperature Icon" class="w-24">
                </div>
            </div>

            <div class="sm:col-span-6 col-span-12 bg-surface-primaryMediumContainer px-4 py-6 rounded-md">
                <div class="flex items-center justify-between">
                    <div class="title-desc flex flex-col gap-2">
                        <h3 class="text-base font-light">Kelembaban</h3>
                        <p class="text-3xl font-semibold">45.41%</p>
                    </div>

                    <img src="{{ asset('./assets/svg/Dashboard/Humidity.svg') }}" alt="Humidity Icon" class="w-24">
                </div>
            </div>

            <div class="sm:col-span-6 col-span-12 bg-surface-primaryHighContainer px-4 py-6 rounded-md">
                <div class="flex items-center justify-between">
                    <div class="title-desc flex flex-col gap-2">
                        <h3 class="text-base font-light">Kualitas Air (kOHMs)</h3>
                        <p class="text-3xl font-semibold">52.37</p>
                    </div>

                    <img src="{{ asset('./assets/svg/Dashboard/Air.svg') }}" alt="Air Quality Icon" class="w-24">
                </div>
            </div>

            <div class="sm:col-span-6 col-span-12 bg-surface-secondaryMediumContainer px-4 py-6 rounded-md">
                <div class="flex items-center justify-between">
                    <div class="title-desc flex flex-col gap-2">
                        <h3 class="text-base font-light">Tekanan Udara (hPa)</h3>
                        <p class="text-3xl font-semibold">1003.63</p>
                    </div>

                    <img src="{{ asset('./assets/svg/Dashboard/Pressure.svg') }}" alt="Air Pressure Icon" class="w-24">
                </div>
            </div>
        </div>

        <div class="lg:col-span-4 col-span-12 bg-surface-secondaryLowContainer px-4 py-6 rounded-md">
            <div class="title-desc flex flex-col gap-6">
                <h3 class="text-xl font-medium text-left w-full">Tips menjaga kulit tetap sehat</h3>
                <ul class="custom-list">
                    <li class="flex items-start">
                        <div class="flex flex-col gap-2">
                            <p class="font-medium">Gunakan Tabir Surya Teratur</p>
                            <p class="font-light">Oleskan tabir surya SPF 30+ setiap hari, ulangi tiap 2 jam jika di luar ruangan.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="flex flex-col gap-2">
                            <p class="font-medium">Pastikan tubuh tetap terhidrasi</p>
                            <p class="font-light">Minum cukup air untuk menjaga kelembapan kulit dan pemulihan dari sinar matahari.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="flex flex-col gap-2">
                            <p class="font-medium">Kenakan Pelindung Matahari</p>
                            <p class="font-light">Pilih pakaian panjang, topi, dan kacamata hitam, terutama saat terik.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="flex flex-col gap-2">
                            <p class="font-medium">Hindari Matahari Siang</p>
                            <p class="font-light">Lakukan aktivitas luar pagi atau sore untuk menghindari sinar intens.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="flex flex-col gap-2">
                            <p class="font-medium">Gunakan Pelembap Harian</p>
                            <p class="font-light">Pilih pelembap sesuai jenis kulit untuk mencegah kekeringan.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="flex flex-col gap-2">
                            <p class="font-medium">Kurangi Eksfoliasi Saat Terkena Sinar Matahari</p>
                            <p class="font-light">Eksfoliasi secukupnya untuk mencegah kulit lebih sensitif di bawah sinar.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection
