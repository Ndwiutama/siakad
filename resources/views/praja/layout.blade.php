<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Praja')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        .main-content {
            transition: margin-left 0.3s;
        }
        .sidebar-tooltip {
            display: none;
            position: absolute;
            left: 100%;
            top: 50%;
            transform: translateY(-50%);
            background: #003366;
            color: #fff;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 0.85rem;
            white-space: nowrap;
            z-index: 50;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
        }
        .sidebar-icon:hover .sidebar-tooltip {
            display: block;
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
    <div class="flex pt-16" x-data="{ minimized: false, akademik: false, kpta: false, lainnya: false }">
        <!-- Sidebar -->
        <aside :class="minimized ? 'w-20' : 'w-64'" class="fixed top-16 left-0 h-[calc(100vh-4rem)] bg-white shadow-lg py-6 px-2 flex flex-col gap-2 transition-all duration-300 z-40">
            <button @click="minimized = !minimized" class="mb-2 flex items-center gap-2 px-3 py-2 rounded-lg bg-blue-100 font-semibold hover:bg-blue-200 transition">
                <i :class="minimized ? 'fa fa-arrow-right' : 'fa fa-arrow-left'"></i>
                <span x-show="!minimized" class="sidebar-label">Minimize</span>
            </button>
            <div class="border-b border-blue-200 mb-2"></div>
            <nav class="flex flex-col gap-1 text-gray-700">
                <!-- Dashboard -->
                <a href="{{ route('praja.dashboard') }}" class="relative sidebar-icon flex items-center gap-3 px-3 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('praja.dashboard') ? 'bg-blue-100 text-[#003366] font-semibold' : 'hover:bg-blue-50 hover:text-[#003366]' }}">
                    <i class="fa fa-home text-lg"></i>
                    <span x-show="!minimized" class="sidebar-label">Dashboard</span>
                    <span x-show="minimized" class="sidebar-tooltip absolute left-full top-1/2 -translate-y-1/2 ml-2">Dashboard</span>
                </a>
                <!-- Akademik Group -->
                <div x-data="{ open: akademik }" @mouseenter="if(minimized){ open = true }" @mouseleave="if(minimized){ open = false }">
                    <button @click="akademik = !akademik" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg transition-all duration-200 hover:bg-blue-50 hover:text-[#003366] font-semibold">
                        <i class="fa fa-graduation-cap text-lg"></i>
                        <span x-show="!minimized" class="sidebar-label flex-1 text-left">Akademik</span>
                        <i class="fa fa-chevron-down ml-auto text-xs" x-show="!minimized"></i>
                    </button>
                    <div x-show="akademik && !minimized" class="ml-8 flex flex-col gap-1 py-1">
                        <a href="{{ route('praja.krs') }}" class="flex items-center gap-2 px-2 py-1 rounded hover:bg-blue-50 {{ request()->routeIs('praja.krs') ? 'bg-blue-100 text-[#003366] font-semibold' : '' }}"><i class="fa fa-book"></i> <span>Rencana Studi</span></a>
                        <a href="{{ route('praja.khs') }}" class="flex items-center gap-2 px-2 py-1 rounded hover:bg-blue-50 {{ request()->routeIs('praja.khs') ? 'bg-blue-100 text-[#003366] font-semibold' : '' }}"><i class="fa fa-file-alt"></i> <span>Hasil Studi</span></a>
                        <a href="{{ route('praja.jadwal') }}" class="flex items-center gap-2 px-2 py-1 rounded hover:bg-blue-50 {{ request()->routeIs('praja.jadwal') ? 'bg-blue-100 text-[#003366] font-semibold' : '' }}"><i class="fa fa-calendar"></i> <span>Jadwal</span></a>
                        <a href="{{ route('praja.seminar-proposal') }}" class="flex items-center gap-2 px-2 py-1 rounded hover:bg-blue-50 {{ request()->routeIs('praja.seminar-proposal') ? 'bg-blue-100 text-[#003366] font-semibold' : '' }}"><i class="fa fa-user-graduate"></i> <span>Seminar Proposal</span></a>
                    </div>
                </div>
                <!-- E Learning -->
                <a href="{{ route('praja.elearning') }}" class="relative sidebar-icon flex items-center gap-3 px-3 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('praja.elearning') ? 'bg-blue-100 text-[#003366] font-semibold' : 'hover:bg-blue-50 hover:text-[#003366]' }}">
                    <i class="fa fa-book-open text-lg"></i>
                    <span x-show="!minimized" class="sidebar-label">E Learning</span>
                    <span x-show="minimized" class="sidebar-tooltip absolute left-full top-1/2 -translate-y-1/2 ml-2">E Learning</span>
                </a>
                <!-- KP/TA Group -->
                <div x-data="{ open: kpta }" @mouseenter="if(minimized){ open = true }" @mouseleave="if(minimized){ open = false }">
                    <button @click="kpta = !kpta" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg transition-all duration-200 hover:bg-blue-50 hover:text-[#003366] font-semibold">
                        <i class="fa fa-briefcase text-lg"></i>
                        <span x-show="!minimized" class="sidebar-label flex-1 text-left">KP/TA</span>
                        <i class="fa fa-chevron-down ml-auto text-xs" x-show="!minimized"></i>
                    </button>
                    <div x-show="kpta && !minimized" class="ml-8 flex flex-col gap-1 py-1">
                        <a href="{{ route('praja.kerja-praktek') }}" class="flex items-center gap-2 px-2 py-1 rounded hover:bg-blue-50 {{ request()->routeIs('praja.kerja-praktek') ? 'bg-blue-100 text-[#003366] font-semibold' : '' }}"><i class="fa fa-user-tie"></i> <span>Kerja Praktek</span></a>
                        <a href="{{ route('praja.tugas_akhir') }}" class="flex items-center gap-2 px-2 py-1 rounded hover:bg-blue-50 {{ request()->routeIs('praja.tugas_akhir') ? 'bg-blue-100 text-[#003366] font-semibold' : '' }}"><i class="fa fa-graduation-cap"></i> <span>Tugas Akhir</span></a>
                    </div>
                </div>
                <!-- Kuesioner -->
                <a href="{{ route('praja.kuesioner') }}" class="relative sidebar-icon flex items-center gap-3 px-3 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('praja.kuesioner') ? 'bg-blue-100 text-[#003366] font-semibold' : 'hover:bg-blue-50 hover:text-[#003366]' }}">
                    <i class="fa fa-clipboard-question text-lg"></i>
                    <span x-show="!minimized" class="sidebar-label">Kuesioner</span>
                    <span x-show="minimized" class="sidebar-tooltip absolute left-full top-1/2 -translate-y-1/2 ml-2">Kuesioner</span>
                </a>
                <!-- Profile -->
                <a href="{{ route('praja.profile') }}" class="relative sidebar-icon flex items-center gap-3 px-3 py-2 rounded-lg transition-all duration-200 {{ request()->routeIs('praja.profile') ? 'bg-blue-100 text-[#003366] font-semibold' : 'hover:bg-blue-50 hover:text-[#003366]' }}">
                    <i class="fa fa-user text-lg"></i>
                    <span x-show="!minimized" class="sidebar-label">Profile</span>
                    <span x-show="minimized" class="sidebar-tooltip absolute left-full top-1/2 -translate-y-1/2 ml-2">Profile</span>
                </a>
                <!-- Lainnya Group -->
                <div x-data="{ open: lainnya }" @mouseenter="if(minimized){ open = true }" @mouseleave="if(minimized){ open = false }">
                    <button @click="lainnya = !lainnya" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg transition-all duration-200 hover:bg-blue-50 hover:text-[#003366] font-semibold">
                        <i class="fa fa-eye text-lg"></i>
                        <span x-show="!minimized" class="sidebar-label flex-1 text-left">Lainnya</span>
                        <i class="fa fa-chevron-down ml-auto text-xs" x-show="!minimized"></i>
                    </button>
                    <div x-show="lainnya && !minimized" class="ml-8 flex flex-col gap-1 py-1">
                        <a href="{{ route('praja.kontak') }}" class="flex items-center gap-2 px-2 py-1 rounded hover:bg-blue-50 {{ request()->routeIs('praja.kontak') ? 'bg-blue-100 text-[#003366] font-semibold' : '' }}"><i class="fa fa-envelope"></i> <span>Kontak</span></a>
                        <a href="{{ route('praja.informasi') }}" class="flex items-center gap-2 px-2 py-1 rounded hover:bg-blue-50 {{ request()->routeIs('praja.informasi') ? 'bg-blue-100 text-[#003366] font-semibold' : '' }}"><i class="fa fa-circle-info"></i> <span>Informasi</span></a>
                    </div>
                </div>
            </nav>
        </aside>
        <!-- Main Content -->
        <main :class="minimized ? 'ml-20' : 'ml-64'" class="flex-1 p-8 bg-[#f9f6f7] min-h-screen main-content transition-all duration-300">
            @yield('content')
        </main>
    </div>
</body>
</html>