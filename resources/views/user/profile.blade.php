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
            <div class="bg-white shadow-md rounded-lg p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6">
                    Profil
                </h2>
                <div class="flex items-center mb-6">
                    <img alt="Profile picture placeholder" class="h-24 w-24 rounded-full border-2 border-gray-300" height="100" src="https://storage.googleapis.com/a1aa/image/lfVe2WzZQBtDYkf81fdFketqusetkJlbs5snTTaQVHoUDfD4JA.jpg" width="100"/>
                </div>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700" for="name">Nama Lengkap</label>
                        <input class="border border-gray-300 rounded w-full p-2" id="name" type="text" value="John Doe"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700" for="email">Email</label>
                        <input class="border border-gray-300 rounded w-full p-2" id="email" type="email" value="john.doe@example.com"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700" for="phone">Nomor Telepon</label>
                        <input class="border border-gray-300 rounded w-full p-2" id="phone" type="tel" value="08123456789"/>
                    </div>
                    <button class="text-right bg-blue-500 text-white px-4 py-2 rounded" type="submit">
                        Simpan Perubahan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
