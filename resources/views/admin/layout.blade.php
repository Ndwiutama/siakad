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
                    <button type="submit" class="bg-white text-gray-700 hover:bg-gray-100 border border-gray-300 px-3 py-1 rounded-md flex items-center gap-2 text-sm font-normal shadow-sm transition">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    <div class="flex pt-12">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg min-h-screen py-8 px-4 flex flex-col gap-2 fixed top-12 left-0 z-40">
            <nav class="flex flex-col gap-2 text-gray-700">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}">
                    <i class="fa fa-home"></i> Dashboard
                </a>
                <a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.users.*') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}">
                    <i class="fa fa-users-cog"></i> Manajemen User
                </a>
                <a href="{{ route('admin.dosen') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.dosen') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}">
                    <i class="fa fa-chalkboard-teacher"></i> Manajemen Dosen
                </a>
                <a href="{{ route('admin.praja') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.praja') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}">
                    <i class="fa fa-user-graduate"></i> Manajemen Praja
                </a>
                <a href="{{ route('admin.matkul') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.matkul') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}">
                    <i class="fa fa-book"></i> Mata Kuliah
                </a>
                <a href="{{ route('admin.krs') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.krs') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}">
                    <i class="fa fa-tasks"></i> Manajemen KRS
                </a>
                <a href="{{ route('admin.khs') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.khs') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}">
                    <i class="fa fa-clipboard-list"></i> Penilaian / KHS
                </a>
                <a href="{{ route('admin.presensi') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.presensi') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}">
                    <i class="fa fa-calendar-check"></i> Presensi
                </a>
                <a href="{{ route('admin.laporan') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('admin.laporan') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}">
                    <i class="fa fa-file-alt"></i> Laporan
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-64 p-8">
            @yield('content')
        </main>
    </div>
    @stack('scripts')
</body>
</html>