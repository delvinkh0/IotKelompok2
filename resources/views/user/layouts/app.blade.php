<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UVise - Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('./assets/img/favicon1.ico') }}">

    <!-- Plus Jakarta Sans Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <!-- Include your CSS libraries here -->
    {{-- <link rel="stylesheet" href="{{ asset('./css/app.css') }}"> --}}

    @vite('public/css/app.css')
</head>

<body class="font-plusJakartaSans">
    <nav class="fixed top-0 left-0 right-0 flex items-center justify-between py-4 lg:px-12 md:px-6 px-4 bg-white z-10">
        <a href="{{ route('user.index') }}">
            <img src="{{ asset('assets/svg/UVise.svg') }}" alt="UVise Logo" class="md:h-8 h-6">
        </a>

        <div class="relative inline-block text-left">
            <div>
                <button type="button"
                    class="w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 focus:ring-1 focus:ring-inset focus:ring-gray-100 hover:bg-gray-50 flex items-center justify-center gap-2"
                    id="menu-button" aria-expanded="false" aria-haspopup="true" onclick="toggleDropdown()">
                    <img src="../../assets/img/Profile/Profile-SkinType{{ $skinTypeUser }}.png" alt="Profile"
                        class="md:h-8 h-6 rounded-full border-2 border-primary-400">
                    <p class="inline md:text-base text-sm font-medium">{{ auth()->user()->name }}</p>
                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <div id="dropdown-menu"
                class="absolute right-0 z-10 mt-2 w-max max-w-72 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="p-2" role="none">
                    <a href="{{ route('user.profile') }}"
                        class="block p-2 text-sm text-gray-700 flex gap-4 rounded-md border-[0.5px] border-border-border"
                        role="menuitem" tabindex="-1" id="menu-item-0">
                        <img src="../../assets/img/Profile/Profile-SkinType{{ $skinTypeUser }}.png" alt="Profile"
                            class="md:h-12 h-8 rounded-full border-2 border-primary-400">
                        <div class="flex flex-col gap-2 w-full min-w-0">
                            <div class="flex flex-col gap-[2px] w-full min-w-0">
                                <p class="text-base font-medium">{{ auth()->user()->name }}</p>
                                <p class="text-sm text-ellipsis truncate">{{ auth()->user()->email }}</p>
                            </div>
                            <div
                                class="flex gap-1 bg-surface-secondaryMediumContainer py-1 px-2 rounded-md items-end w-fit">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="pt-[1px]">
                                    <circle cx="6" cy="6" r="6" class="fill-yellow-900" />
                                </svg>
                                <p class="text-xs font-medium">{{ $skinTypeTitle }}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="py-1" role="none">
                    <button class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                        id="menu-item-6" onclick="openLogoutModal()">
                        <div class="flex items-center gap-4">
                            <img src={{ asset('./assets/svg/Logout.svg') }} alt="Logout Icon" class="w-6">
                            <p>Keluar Akun</p>
                        </div>
                    </button>
                </div>
            </div>
        </div>

    </nav>

    <!-- Main Content -->
    <div style="padding-top: 80px;">
        @yield('content')
    </div>


    <!-- Logout Modal -->
    <div id="logoutModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6">
            <h2 class="text-lg font-bold mb-4">Konfirmasi Keluar</h2>
            <p>Apakah Anda yakin ingin keluar?</p>
            <div class="flex justify-end mt-4">
                <button onclick="closeLogoutModal()"
                    class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md mr-2">Batal</button>
                <a href="{{ route('logout') }}" class="bg-red-900 text-white px-4 py-2 rounded-md">Keluar</a>
            </div>
        </div>
    </div>

    <div id="fitzpatrickModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6">
            <h2 class="text-lg font-bold mb-4">Konfirmasi Tes Ulang</h2>
            <p>Apakah Anda yakin ingin tes ulang? Hasil tes yang akan dipakai adalah yang terbaru.</p>
            <div class="flex justify-end mt-4">
                <button onclick="closeFitzpatrickModal()"
                    class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md mr-2">Batal</button>
                <a href="{{ route('fitzpatrick_test.fitzpatrick1') }}"
                    class="bg-blue-900 text-white px-4 py-2 rounded-md">Lanjut Tes</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const timerDisplay = document.querySelector('.sunscreen-time');
            const resetButton = document.querySelector('.button-reset-timer');

            const duration = 0.1 * 60; // 6 seconds for demonstration
            let endTime = localStorage.getItem('timerEndTime') ?
                parseInt(localStorage.getItem('timerEndTime')) :
                Date.now() + duration * 1000;

            let timerInterval = setInterval(updateTimer, 1000); // Initialize the timer interval
            updateTimer(); // Immediately update the timer display on page load

            function sendNotification() {
                alert('Waktunya aplikasi ulang sunscreen!');
            }

            function updateTimer() {
                const remaining = Math.max(0, Math.floor((endTime - Date.now()) / 1000));
                const hours = Math.floor(remaining / 3600); // Calculate hours
                const minutes = Math.floor((remaining % 3600) / 60); // Remaining minutes
                const seconds = remaining % 60; // Remaining seconds

                timerDisplay.textContent =
                    `${hours} Jam ${minutes} Menit ${seconds < 10 ? '0' : ''}${seconds} Detik`;

                if (remaining <= 0) {
                    clearInterval(timerInterval); // Stop the interval when the timer reaches zero
                    timerDisplay.textContent = 'Waktunya aplikasi ulang sunscreen!';
                    sendNotification(); // Notify the user
                }
            }

            resetButton.addEventListener('click', function() {
                fetch('{{ route('reset.timer') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data.message);
                        endTime = Date.now() + duration * 1000; // Update endTime
                        localStorage.setItem('timerEndTime', endTime); // Save updated endTime
                        clearInterval(timerInterval); // Clear existing interval
                        timerInterval = setInterval(updateTimer, 1000); // Restart the interval
                        updateTimer(); // Update immediately after resetting
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
</body>

</html>
