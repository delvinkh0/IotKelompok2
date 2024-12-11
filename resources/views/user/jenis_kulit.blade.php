@extends('user.layouts.app')

@section('content')
    <div class="container mx-auto px-4 flex pt-8">
        <!-- Sidebar -->
        <div class="w-1/4">
            <div class="bg-white shadow-md rounded-lg p-4">
                <ul class="space-y-4">
                    <li>
                        <a class="flex items-center sidebar-item p-2 rounded-lg" href="{{ route('user.profile') }}">
                            <i class="fas fa-user-edit mr-2"></i>
                            Edit Profil
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center sidebar-item p-2 rounded-lg active" href="{{ route('user.jenis_kulit') }}">
                            <i class="fas fa-palette mr-2"></i>
                            Jenis Kulit
                        </a>
                    </li>
                    <li>
                        <button class="flex items-center sidebar-item p-2 rounded-lg w-full" onclick="openLogoutModal()">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Keluar
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Profile Display -->
        <div class="w-3/4 pl-8">
            <h1 class="text-2xl font-bold text-blue-900 mb-6">
                Jenis Kulit
            </h1>
            <div class="bg-blue-50 p-4 rounded-md shadow-md flex items-center space-x-4">
                <div class="flex space-x-2">
                    <img alt="Gambar Perempuan dengan {{ $skinTypeText }}" class="rounded-md" height="80" src="../assets/img/SkinType_Celebrity/Skintype{{ $skinTypeUser }}_Girl.png" width="80"/>
                    <img alt="Gambar Pria dengan {{ $skinTypeText }}" class="rounded-md" height="80"src="../assets/img/SkinType_Celebrity/Skintype{{ $skinTypeUser }}_Boy.png" width="80"/>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-blue-900">
                        {{ $skinTypeText }}
                    </h2>
                    <p class="text-gray-600">
                        {{ $skinTypeDescription }}
                    </p>
                    <div class="flex space-x-2 mt-2">
                        <button class="bg-blue-200 text-blue-900 px-4 py-2 rounded-md">
                            {{ $skinTypeTitle }}
                        </button>
                        <button class="bg-blue-900 text-white px-4 py-2 rounded-md">
                            Score : {{ $skinTypeScore }}
                        </button>
                    </div>
                </div>
            </div>
            <p class="mt-8 text-center text-gray-600">
                Berdasarkan hasil tes, jenis kulit Anda termasuk {{ $skinTypeText }}. Anda dapat melakukan tes ulang dengan mengklik tombol di bawah ini.
            </p>
            <div class="flex justify-center mt-4">
                <button class="bg-blue-200 text-blue-900 px-4 py-2 rounded-md" onclick="openFitzpatrickModal()">
                    Tes Ulang
                </button>
            </div>
        </div>
    </div>
@endsection
