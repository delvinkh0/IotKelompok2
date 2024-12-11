// import './bootstrap';

function toggleDropdown() {
    const menu = document.getElementById('dropdown-menu');
    const isExpanded = menu.classList.toggle('hidden');
    // Update aria-expanded attribute
    document.getElementById('menu-button').setAttribute('aria-expanded', !isExpanded);
}

// Close dropdown when clicking outside
window.addEventListener('click', function (event) {
    const menu = document.getElementById('dropdown-menu');
    const button = document.getElementById('menu-button');
    if (!menu.contains(event.target) && !button.contains(event.target)) {
        menu.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
    }
});

function openLogoutModal() {
    document.getElementById('logoutModal').classList.remove('hidden');
}

function closeLogoutModal() {
    document.getElementById('logoutModal').classList.add('hidden');
}

function openFitzpatrickModal() {
    document.getElementById('fitzpatrickModal').classList.remove('hidden');
}

function closeFitzpatrickModal() {
    document.getElementById('fitzpatrickModal').classList.add('hidden');
}

function logout() {
    window.location.href = 'login.html'; // Ganti dengan URL halaman login Anda
}
