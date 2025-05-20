<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - IPDN Akademik')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-[#063970] fixed top-0 left-0 right-0 z-50">
        <div class="flex justify-between items-center px-6 py-2">
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/logo ipdn.png') }}" alt="IPDN Logo" class="h-8 w-8">
                <span class="font-bold text-lg text-white">IPDN Akademik</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-gray-200 text-sm">{{ Auth::user()->name ?? 'Admin' }}</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit"
                        class="bg-white text-gray-700 hover:bg-gray-100 border border-gray-300 px-3 py-1 rounded-md flex items-center gap-2 text-sm font-normal shadow-sm transition">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    <div class="flex pt-12">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="w-64 bg-white shadow-md min-h-screen pt-6 px-4 fixed top-4 left-0 z-40 transition-all duration-300"
            data-minimized="false">
            <nav class="relative">
                <button id="toggleSidebar" aria-label="Toggle Sidebar"
                    class="absolute top-2 right-2 text-[#4a5a6a] text-xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="mt-10 space-y-1 text-[#4a5a6a]">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center gap-3 px-4 py-3 rounded-r-2xl text-sm font-normal {{ request()->routeIs('admin.dashboard') ? 'bg-blue-200 font-semibold' : 'hover:bg-blue-50' }}">
                            <i class="fas fa-home text-lg"></i>
                            <span class="sidebar-label leading-6">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.index') }}"
                            class="flex items-center gap-3 px-4 py-3 rounded-r-2xl text-sm font-normal {{ request()->routeIs('admin.users.*') ? 'bg-blue-200 font-semibold' : 'hover:bg-blue-50' }}">
                            <i class="fas fa-users text-lg"></i>
                            <span class="sidebar-label leading-6">Manajemen User</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.dosen') }}"
                            class="flex items-center gap-3 px-4 py-3 rounded-r-2xl text-sm font-normal {{ request()->routeIs('admin.dosen') ? 'bg-blue-200 font-semibold' : 'hover:bg-blue-50' }}">
                            <i class="fas fa-chalkboard-teacher text-lg"></i>
                            <span class="sidebar-label leading-6">Manajemen Dosen</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.praja') }}"
                            class="flex items-center gap-3 px-4 py-3 rounded-r-2xl text-sm font-normal {{ request()->routeIs('admin.praja') ? 'bg-blue-200 font-semibold' : 'hover:bg-blue-50' }}">
                            <i class="fas fa-user-graduate text-lg"></i>
                            <span class="sidebar-label leading-6">Manajemen Praja</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.matkul') }}"
                            class="flex items-center gap-3 px-4 py-3 rounded-r-2xl text-sm font-normal {{ request()->routeIs('admin.matkul') ? 'bg-blue-200 font-semibold' : 'hover:bg-blue-50' }}">
                            <i class="fas fa-book text-lg"></i>
                            <span class="sidebar-label leading-6">Mata Kuliah</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.krs') }}"
                            class="flex items-center gap-3 px-4 py-3 rounded-r-2xl text-sm font-normal {{ request()->routeIs('admin.krs') ? 'bg-blue-200 font-semibold' : 'hover:bg-blue-50' }}">
                            <i class="fas fa-tasks text-lg"></i>
                            <span class="sidebar-label leading-6">Manajemen KRS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.khs') }}"
                            class="flex items-center gap-3 px-4 py-3 rounded-r-2xl text-sm font-normal {{ request()->routeIs('admin.khs') ? 'bg-blue-200 font-semibold' : 'hover:bg-blue-50' }}">
                            <i class="fas fa-clipboard-check text-lg"></i>
                            <span class="sidebar-label leading-6">Penilaian / KHS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.presensi') }}"
                            class="flex items-center gap-3 px-4 py-3 rounded-r-2xl text-sm font-normal {{ request()->routeIs('admin.presensi') ? 'bg-blue-200 font-semibold' : 'hover:bg-blue-50' }}">
                            <i class="fas fa-calendar-check text-lg"></i>
                            <span class="sidebar-label leading-6">Presensi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.laporan') }}"
                            class="flex items-center gap-3 px-4 py-3 rounded-r-2xl text-sm font-normal {{ request()->routeIs('admin.laporan') ? 'bg-blue-200 font-semibold' : 'hover:bg-blue-50' }}">
                            <i class="fas fa-file-alt text-lg"></i>
                            <span class="sidebar-label leading-6">Laporan</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main id="mainContent" class="flex-1 ml-64 p-8 transition-all duration-300">
            @yield('content')
        </main>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        const toggleSidebarBtn = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const labels = document.querySelectorAll('.sidebar-label');
        const mainContent = document.getElementById('mainContent');

        toggleSidebarBtn.addEventListener('click', () => {
            const isMinimized = sidebar.dataset.minimized === 'true';

            if (isMinimized) {
                sidebar.classList.remove('w-20');
                sidebar.classList.add('w-64');
                mainContent.classList.remove('ml-20');
                mainContent.classList.add('ml-64');
                labels.forEach(label => label.classList.remove('hidden'));
                sidebar.dataset.minimized = 'false';
            } else {
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-20');
                mainContent.classList.remove('ml-64');
                mainContent.classList.add('ml-20');
                labels.forEach(label => label.classList.add('hidden'));
                sidebar.dataset.minimized = 'true';
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
