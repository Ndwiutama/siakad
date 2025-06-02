<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dosen')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Transisi Umum */
        .sidebar-transition,
        .main-content-transition {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.3, 1);
        }

        /* Efek Hover untuk Item Navigasi */
        .nav-item {
            position: relative;
            overflow: hidden;
        }

        .nav-item:hover::before,
        .nav-item.active::before {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* Efek Glass untuk Header/Elemen Lain */
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(0, 51, 102, 0.95);
        }

        /* Bayangan Mengambang */
        .floating-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1),
                0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Pengaturan Sidebar Saat Diciutkan (Collapsed) */
        #sidebar.sidebar-collapsed {
            width: 5rem;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        /* Menyesuaikan margin konten utama saat sidebar diciutkan */
        #main-content.sidebar-collapsed {
            margin-left: 5rem;
        }

        /* Menyembunyikan teks di dalam sidebar saat diciutkan */
        .sidebar-collapsed .sidebar-text {
            opacity: 0;
            transform: translateX(-10px);
            max-width: 0;
        }

        /* Properti transisi untuk teks sidebar */
        .sidebar-text {
            transition: opacity 0.2s ease-out, transform 0.2s ease-out, max-width 0.3s ease-in-out;
            white-space: nowrap;
            overflow: hidden;
            max-width: 150px;
        }

        /* Penyesuaian item navigasi saat sidebar diciutkan */
        .sidebar-collapsed .nav-item {
            background-color: transparent !important;
            border: none !important;
            padding-left: 0.5rem;
            padding-right: 0;
        }

        .sidebar-collapsed .nav-item .icon-container {
            margin: 0;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen font-sans antialiased">
    <!-- Header -->
    <header class="glass-effect text-white px-6 py-4 fixed top-0 left-0 right-0 z-50 border-b border-white/10">
        <div class="flex items-center justify-between w-full">
            <div class="flex items-center gap-4">
                <button id="sidebarToggle"
                    class="p-2.5 rounded-xl hover:bg-white/20 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-white/30">
                    <i class="fas fa-bars text-lg"></i>
                </button>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo ipdn.png') }}" alt="Logo IPDN"
                        class="w-10 h-10 rounded-xl object-cover">
                    <div class="hidden sm:block">
                        <h1 class="font-bold text-lg tracking-tight">IPDN Akademik</h1>
                        <p class="text-white/70 text-sm">Dashboard Dosen</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <div class="hidden md:flex items-center gap-3 bg-white/10 rounded-xl px-4 py-2 backdrop-blur-sm">
                    <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-user text-sm"></i>
                    </div>
                    <span class="text-sm font-medium">{{ Auth::user()->name ?? 'Dosen' }}</span>
                </div>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit"
                        class="bg-white/20 hover:bg-white/30 text-white px-4 py-2.5 rounded-xl flex items-center gap-2 transition-all duration-200 backdrop-blur-sm border border-white/20">
                        <i class="fas fa-sign-out-alt text-sm"></i>
                        <span class="hidden sm:block text-sm font-medium">Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <div class="flex pt-20">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="w-72 bg-white/80 backdrop-blur-xl border-r border-gray-200/50 min-h-screen py-8 px-6 sidebar-transition fixed left-0 top-20 floating-shadow">
            <nav class="space-y-2">
                <a href="{{ route('dosen.dashboard') }}"
                    class="nav-item flex items-center gap-4 px-4 py-3.5 rounded-xl transition-all duration-200 
                          {{ request()->routeIs('dosen.dashboard') ? 'active bg-blue-50 text-blue-700 border border-blue-100' : 'hover:bg-gray-50 text-gray-700 hover:text-gray-900' }}">
                    <div
                        class="icon-container w-10 h-10 {{ request()->routeIs('dosen.dashboard') ? 'bg-blue-100' : 'bg-gray-100' }} rounded-lg flex items-center justify-center flex-shrink-0">
                        <i
                            class="fas fa-home {{ request()->routeIs('dosen.dashboard') ? 'text-blue-600' : 'text-gray-600' }}"></i>
                    </div>
                    <div class="sidebar-text">
                        <span class="font-semibold text-sm">Dashboard</span>
                    </div>
                </a>

                <a href="{{ route('dosen.profile') }}"
                    class="nav-item flex items-center gap-4 px-4 py-3.5 rounded-xl transition-all duration-200 
                          {{ request()->routeIs('dosen.profile') ? 'active bg-blue-50 text-blue-700 border border-blue-100' : 'hover:bg-gray-50 text-gray-700 hover:text-gray-900' }}">
                    <div
                        class="icon-container w-10 h-10 {{ request()->routeIs('dosen.profile') ? 'bg-blue-100' : 'bg-gray-100' }} rounded-lg flex items-center justify-center flex-shrink-0">
                        <i
                            class="fas fa-user {{ request()->routeIs('dosen.profile') ? 'text-blue-600' : 'text-gray-600' }}"></i>
                    </div>
                    <div class="sidebar-text">
                        <span class="font-medium text-sm">Profil</span>
                        <p
                            class="text-xs {{ request()->routeIs('dosen.profile') ? 'text-blue-600/70' : 'text-gray-500' }} mt-0.5">
                            Informasi pribadi</p>
                    </div>
                </a>

                <a href="{{ route('dosen.data_praja') }}"
                    class="nav-item flex items-center gap-4 px-4 py-3.5 rounded-xl transition-all duration-200 
                          {{ request()->routeIs('dosen.data_praja') ? 'active bg-blue-50 text-blue-700 border border-blue-100' : 'hover:bg-gray-50 text-gray-700 hover:text-gray-900' }}">
                    <div
                        class="icon-container w-10 h-10 {{ request()->routeIs('dosen.data_praja') ? 'bg-blue-100' : 'bg-gray-100' }} rounded-lg flex items-center justify-center flex-shrink-0">
                        <i
                            class="fas fa-users {{ request()->routeIs('dosen.data_praja') ? 'text-blue-600' : 'text-gray-600' }}"></i>
                    </div>
                    <div class="sidebar-text">
                        <span class="font-medium text-sm">Data Praja</span>
                        <p
                            class="text-xs {{ request()->routeIs('dosen.data_praja') ? 'text-blue-600/70' : 'text-gray-500' }} mt-0.5">
                            Kelola data mahasiswa</p>
                    </div>
                </a>

                <a href="{{ route('dosen.nilai-kehadiran.index') }}"
                    class="nav-item flex items-center gap-4 px-4 py-3.5 rounded-xl transition-all duration-200 
                          {{ request()->routeIs('dosen.nilai-kehadiran.*') ? 'active bg-blue-50 text-blue-700 border border-blue-100' : 'hover:bg-gray-50 text-gray-700 hover:text-gray-900' }}">
                    <div
                        class="icon-container w-10 h-10 {{ request()->routeIs('dosen.nilai-kehadiran.*') ? 'bg-blue-100' : 'bg-gray-100' }} rounded-lg flex items-center justify-center flex-shrink-0">
                        <i
                            class="fas fa-clipboard-list {{ request()->routeIs('dosen.nilai-kehadiran.*') ? 'text-blue-600' : 'text-gray-600' }}"></i>
                    </div>
                    <div class="sidebar-text">
                        <span class="font-medium text-sm">Nilai & Kehadiran</span>
                        <p
                            class="text-xs {{ request()->routeIs('dosen.nilai-kehadiran.*') ? 'text-blue-600/70' : 'text-gray-500' }} mt-0.5">
                            Input penilaian</p>
                    </div>
                </a>

                <a href="{{ route('dosen.jadwal-matkul.index') }}"
                    class="nav-item flex items-center gap-4 px-4 py-3.5 rounded-xl transition-all duration-200 
                          {{ request()->routeIs('dosen.jadwal-matkul.*') ? 'active bg-blue-50 text-blue-700 border border-blue-100' : 'hover:bg-gray-50 text-gray-700 hover:text-gray-900' }}">
                    <div
                        class="icon-container w-10 h-10 {{ request()->routeIs('dosen.jadwal-matkul.*') ? 'bg-blue-100' : 'bg-gray-100' }} rounded-lg flex items-center justify-center flex-shrink-0">
                        <i
                            class="fas fa-calendar-alt {{ request()->routeIs('dosen.jadwal-matkul.*') ? 'text-blue-600' : 'text-gray-600' }}"></i>
                    </div>
                    <div class="sidebar-text">
                        <span class="font-medium text-sm">Jadwal Mengajar</span>
                        <p
                            class="text-xs {{ request()->routeIs('dosen.jadwal-matkul.*') ? 'text-blue-600/70' : 'text-gray-500' }} mt-0.5">
                            Manajemen jadwal</p>
                    </div>
                </a>

                <a href="{{ route('dosen.elearning') }}"
                    class="nav-item flex items-center gap-4 px-4 py-3.5 rounded-xl transition-all duration-200 
                          {{ request()->routeIs('dosen.elearning') ? 'active bg-blue-50 text-blue-700 border border-blue-100' : 'hover:bg-gray-50 text-gray-700 hover:text-gray-900' }}">
                    <div
                        class="icon-container w-10 h-10 {{ request()->routeIs('dosen.elearning') ? 'bg-blue-100' : 'bg-gray-100' }} rounded-lg flex items-center justify-center flex-shrink-0">
                        <i
                            class="fas fa-book-open {{ request()->routeIs('dosen.elearning') ? 'text-blue-600' : 'text-gray-600' }}"></i>
                    </div>
                    <div class="sidebar-text">
                        <span class="font-medium text-sm">E-Learning</span>
                        <p
                            class="text-xs {{ request()->routeIs('dosen.elearning') ? 'text-blue-600/70' : 'text-gray-500' }} mt-0.5">
                            Pembelajaran online</p>
                    </div>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main id="main-content" class="flex-1 p-8 main-content-transition">
            @yield('content')

            <!-- Footer -->
            <footer class="mt-12 pt-6 border-t border-gray-200 text-center">
                <div class="flex justify-center gap-6 text-gray-400 mb-4">
                    <a href="#" class="hover:text-blue-500 transition duration-200">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="hover:text-blue-500 transition duration-200">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <a href="#" class="hover:text-blue-500 transition duration-200">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="hover:text-blue-500 transition duration-200">
                        <i class="fab fa-youtube text-xl"></i>
                    </a>
                </div>
                <p class="text-sm text-gray-500">© 2025 IPDN Akademik. All rights reserved.</p>
            </footer>
        </main>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const mainContent = document.getElementById('main-content');

        // Inisialisasi posisi awal main-content
        mainContent.style.marginLeft = sidebar.offsetWidth + 'px';

        function toggleSidebar() {
            sidebar.classList.toggle('sidebar-collapsed');
            mainContent.classList.toggle('sidebar-collapsed');
            sidebar.addEventListener('transitionend', () => {
                mainContent.style.marginLeft = sidebar.offsetWidth + 'px';
            }, { once: true });
        }

        sidebarToggle.addEventListener('click', toggleSidebar);

        window.addEventListener('resize', handleResize);
        handleResize();
    </script>
</body>

</html>