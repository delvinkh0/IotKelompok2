<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UVise - Daftar Akun</title>

    @vite('public/css/app.css')
</head>

<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <nav class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between p-4 bg-white px-6">
        <a href="{{ route('guest.index') }}" class="flex items-center">
            <img src="{{ asset('assets/svg/UVise.svg') }}" alt="UVise Logo" class="md:h-8 h-6">
        </a>
    </nav>
    <div class="bg-gray-50 flex rounded-lg overflow-hidden">
        <div class="p-6">
            <form action="{{ route('auth.register_action') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-3">
                    <div class="border-b border-gray-900/10 pb-6">
                        @if(session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <p class="alert alert-success">
                                    {{ session('success') }}
                                </p>
                            </div>
                        @endif

                        @if($errors->any())
                            @foreach($errors->all() as $err)
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <p class="alert alert-danger">
                                    {{ $err }}
                                </p>
                            </div>
                            @endforeach
                        @endif
                        <h2 class="text-lg font-semibold text-gray-900 text-center">DAFTAR</h2>
                        <p class="mt-1 text-sm text-gray-600 text-center">Silakan isi informasi berikut untuk mendaftar akun anda.</p>

                        <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-6">

                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-900">Nama Lengkap</label>
                                <div class="mt-2">
                                    <input type="text" id="name" name="name" required class="input-custom block py-2.5 px-2 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600" value="{{ old('name') }}" placeholder="Contoh: John Doe">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                                <div class="mt-2">
                                    <input type="email" id="email" name="email" required class="input-custom block py-2.5 px-2 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600" value="{{ old('email') }}" placeholder="email@example.com">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                                <div class="mt-2">
                                    <input type="password" id="password" name="password" required class="input-custom block py-2.5 px-2 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600" placeholder="********">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="password_confirm" class="block text-sm font-medium text-gray-900">Konfirmasi Password</label>
                                <div class="mt-2">
                                    <input type="password" id="password_confirm" name="password_confirm" required class="input-custom block py-2.5 px-2 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600" placeholder="********">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="rounded-md" style="background: var(--Primary-Primary, #2D546E); border-radius: 10px; color: white; padding: 0.5rem 1rem; text-sm font-semibold shadow-sm hover:bg-opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Daftar</button>
                    </div>
                </div>
            </form>

            <div class="text-center mt-4">
                <p class="text-sm text-gray-600">Sudah punya akun? <a href="{{ route('auth.login') }}" class="text-red-600 hover:underline">Masuk</a></p>
            </div>
        </div>
        <div class="hidden lg:flex justify-center items-center">
            <img src="{{ asset('assets/img/AuthPic.png') }}" alt="Gambar Besar" class="w-4/5 object-cover">
        </div>
    </div>
</body>
</html>
