<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Praja')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sticky-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            overflow-y: auto;
            z-index: 40;
        }
        .main-content {
            margin-left: 16rem;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-[#003366] text-white flex items-center justify-between px-8 py-3 fixed w-full z-50">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo ipdn.png') }}" alt="Logo IPDN" class="h-10 w-10">
            <span class="font-bold text-xl">IPDN Akademik</span>
        </div>
        <div class="flex items-center gap-4">
            <span>{{ Auth::user()->name ?? 'Praja' }}</span>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-white text-[#003366] px-4 py-1 rounded flex items-center gap-2 hover:bg-gray-200">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </form>
        </div>
    </header>
    <div class="flex pt-16">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg py-8 px-4 flex flex-col gap-2 sticky-sidebar">
            <nav class="flex flex-col gap-2 text-gray-700">
                <a href="{{ route('praja.dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('praja.dashboard') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-home"></i> Dashboard</a>
                <a href="{{ route('praja.profile') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('praja.profile') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-user"></i> Profil</a>
                <a href="{{ route('praja.krs') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('praja.krs') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-book"></i> Kartu Rencana Studi</a>
                <a href="{{ route('praja.khs') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('praja.khs') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-file-alt"></i> Kartu Hasil Studi</a>
                <a href="{{ route('praja.jadwal') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('praja.jadwal') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-calendar"></i> Jadwal</a>
                <a href="{{ route('praja.kuesioner') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('praja.kuesioner') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-clipboard-question"></i> Kuesioner</a>
                <a href="{{ route('praja.tugas_akhir') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('praja.tugas_akhir') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-graduation-cap"></i> Tugas Akhir</a>
                <a href="{{ route('praja.kontak') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('praja.kontak') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-envelope"></i> Kontak</a>
                <a href="{{ route('praja.informasi') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('praja.informasi') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-circle-info"></i> Informasi</a>
                <a href="{{ route('praja.elearning') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('praja.elearning') ? 'bg-blue-100 font-semibold' : 'hover:bg-blue-50' }}"><i class="fa fa-book-open"></i> E-Learning IPDN</a>
            </nav>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 p-8 bg-[#f9f6f7] min-h-screen main-content">
            @yield('content')
        </main>
    </div>
</body>
</html>