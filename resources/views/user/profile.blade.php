@extends('user.layouts.app')

@section('content')
    <div class="container mx-auto px-4 flex pt-8">
        <!-- Sidebar -->
        <div class="w-1/4">
            <div class="bg-white shadow-md rounded-lg p-4">
                <ul class="space-y-4">
                    <li>
                        <a class="flex items-center sidebar-item p-2 rounded-lg active" href="{{ route('user.profile') }}">
                            <i class="fas fa-user-edit mr-2"></i>
                            Edit Profil
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center sidebar-item p-2 rounded-lg" href="{{ route('user.jenis_kulit') }}">
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
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <p class="alert alert-success">
                        {{ session('success') }}
                    </p>
                </div>
            @endif
            <div class="bg-white shadow-md rounded-lg p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6">
                    Profil
                </h2>
                <div class="flex items-center mb-6">
                    <img alt="Profile picture placeholder" class="h-24 w-24 rounded-full border-2 border-gray-300" height="100" src="../assets/img/Profile/Profile-SkinType{{ $skinTypeUser }}.png" width="100"/>
                </div>
                <form action="{{ route('user.update_profile')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-gray-700" for="name">Nama Lengkap</label>
                        <input class="border border-gray-300 rounded w-full p-2" id="name" name="name" type="text" value="{{ old('name', auth()->user()->name) }}"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700" for="email">Email</label>
                        <input class="border border-gray-300 rounded w-full p-2" id="email" name="email" type="email" value="{{ old('email', auth()->user()->email) }}"/>
                    </div>
                    <button class="text-right bg-blue-500 text-white px-4 py-2 rounded" type="submit">
                        Simpan Perubahan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
