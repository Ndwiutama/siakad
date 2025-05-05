<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dosen')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-[#003366] text-white flex items-center justify-between px-8 py-3">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo ipdn.png') }}" alt="Logo IPDN" class="h-10 w-10">
            <span class="font-bold text-xl">IPDN Akademik</span>
        </div>
        <div class="flex items-center gap-4">
            <span>{{ Auth::user()->name ?? 'Dosen' }}</span>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-white text-[#003366] px-4 py-1 rounded flex items-center gap-2 hover:bg-gray-200">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </form>
        </div>
    </header>
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg min-h-screen py-8 px-4 flex flex-col gap-2">
            <nav class="flex flex-col gap-2 text-gray-700">
                <a href="{{ route('dosen.dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('dosen.dashboard') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-home"></i> Dashboard</a>
                <a href="{{ route('dosen.profile') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('dosen.profile') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-user"></i> Profil</a>
                <a href="{{ route('dosen.data_praja') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('dosen.data_praja') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-users"></i> Data Praja</a>
                <a href="{{ route('dosen.nilai-kehadiran.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('dosen.nilai-kehadiran.*') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-clipboard-list"></i> Nilai & Kehadiran</a>
                <a href="{{ route('dosen.jadwal-matkul.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('dosen.jadwal-matkul.*') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-calendar-alt"></i> Jadwal Mengajar</a>
                <a href="{{ route('dosen.elearning') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('dosen.elearning') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-book-open"></i> Elearning</a>
            </nav>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 p-8 bg-[#f9f6f7] min-h-screen">
            @yield('content')
            <footer class="mt-8 flex justify-center gap-6 text-gray-500">
                <a href="#"><i class="fab fa-twitter text-xl"></i></a>
                <a href="#"><i class="fab fa-facebook text-xl"></i></a>
                <a href="#"><i class="fab fa-instagram text-xl"></i></a>
                <a href="#"><i class="fab fa-youtube text-xl"></i></a>
            </footer>
        </main>
    </div>
</body>
</html> 