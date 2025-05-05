@extends('praja.layout')
@section('title', 'E-Learning IPDN')
@section('content')
<div class="max-w-4xl mx-auto mt-8 bg-white rounded-lg shadow-md border-2 border-blue-400 p-6">
    <div class="mb-6">
        <span class="text-blue-900 font-bold text-lg"><i class="fas fa-graduation-cap mr-2"></i>E-Learning Institut Pemerintahan Dalam Negeri</span>
    </div>

    <!-- Fakultas -->
    <div class="mb-8">
        <div class="bg-white rounded-lg shadow p-4 border">
            <div class="flex items-center gap-2 mb-4">
                <i class="fas fa-university text-2xl text-blue-800"></i>
                <span class="font-semibold text-blue-900">Fakultas Politik Pemerintahan</span>
            </div>
        </div>
    </div>

    <!-- Daftar Mata Kuliah -->
    <div class="mb-8">
        <div class="bg-white rounded-lg shadow p-4 border">
            <div class="flex items-center gap-2 mb-4">
                <i class="fas fa-book text-2xl text-blue-800"></i>
                <span class="font-semibold text-blue-900">My Courses</span>
            </div>
            <div class="space-y-3">
                <div class="flex items-center gap-3 p-2 hover:bg-gray-50 rounded">
                    <i class="fas fa-file-alt text-gray-600"></i>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Politik Indonesia Terapan</a>
                    <span class="text-sm text-gray-500">Semester 6 2024/2025</span>
                </div>
                <div class="flex items-center gap-3 p-2 hover:bg-gray-50 rounded">
                    <i class="fas fa-file-alt text-gray-600"></i>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Kebijakan Publik</a>
                    <span class="text-sm text-gray-500">Semester 6 2024/2025</span>
                </div>
                <div class="flex items-center gap-3 p-2 hover:bg-gray-50 rounded">
                    <i class="fas fa-file-alt text-gray-600"></i>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Pembangunan Dan Pemberdayaan</a>
                    <span class="text-sm text-gray-500">Semester 6 2024/2025</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Assignments -->
    <div class="mb-8">
        <div class="bg-white rounded-lg shadow p-4 border">
            <div class="flex items-center gap-2 mb-4">
                <i class="fas fa-tasks text-2xl text-blue-800"></i>
                <span class="font-semibold text-blue-900">Assignments</span>
            </div>
            <div class="text-sm text-gray-500 mb-2"><i class="far fa-calendar-alt mr-1"></i>Due 30 April 2025</div>
            <div class="space-y-3">
                <div class="flex items-center gap-3 p-2 hover:bg-gray-50 rounded">
                    <i class="fas fa-user-circle text-gray-600"></i>
                    <div>
                        <div class="text-blue-600 hover:text-blue-800">M Syahrul Ramadhani</div>
                        <div class="text-sm text-gray-500"><i class="fas fa-circle text-green-500 text-xs"></i> Online</div>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-2 hover:bg-gray-50 rounded">
                    <i class="fas fa-user-circle text-gray-600"></i>
                    <div>
                        <div class="text-blue-600 hover:text-blue-800">M Ryan R Hidayat</div>
                        <div class="text-sm text-gray-500"><i class="fas fa-circle text-red-500 text-xs"></i> Offline</div>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-2 hover:bg-gray-50 rounded">
                    <i class="fas fa-user-circle text-gray-600"></i>
                    <div>
                        <div class="text-blue-600 hover:text-blue-800">Aji Surya</div>
                        <div class="text-sm text-gray-500"><i class="fas fa-circle text-green-500 text-xs"></i> Online</div>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-2 hover:bg-gray-50 rounded">
                    <i class="fas fa-user-circle text-gray-600"></i>
                    <div>
                        <div class="text-blue-600 hover:text-blue-800">Nurawan</div>
                        <div class="text-sm text-gray-500"><i class="fas fa-circle text-red-500 text-xs"></i> Offline</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Forum Diskusi -->
    <div class="mb-8">
        <div class="bg-white rounded-lg shadow p-4 border">
            <div class="flex items-center gap-2 mb-4">
                <i class="fas fa-comments text-2xl text-blue-800"></i>
                <span class="font-semibold text-blue-900">Forum Diskusi</span>
            </div>
            <div class="space-y-4">
                <!-- Topik Diskusi 1 -->
                <div class="border-b pb-4">
                    <div class="flex items-start gap-3">
                        <img src="https://ui-avatars.com/api/?name=Dr.+Budi&background=random" class="w-10 h-10 rounded-full">
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <h4 class="font-medium text-blue-900"><i class="fas fa-user-tie mr-1"></i>Dr. Budi Santoso</h4>
                                <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i>2 jam yang lalu</span>
                            </div>
                            <p class="text-gray-700 mt-1">Bagaimana pendapat Praja tentang implementasi sistem pembelajaran hybrid di IPDN?</p>
                            <div class="flex items-center gap-4 mt-2">
                                <button class="text-sm text-gray-500 hover:text-blue-600">
                                    <i class="fas fa-comment"></i> 5 Komentar
                                </button>
                                <button class="text-sm text-gray-500 hover:text-blue-600">
                                    <i class="fas fa-thumbs-up"></i> 12 Suka
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Topik Diskusi 2 -->
                <div class="border-b pb-4">
                    <div class="flex items-start gap-3">
                        <img src="https://ui-avatars.com/api/?name=Praja+Joko&background=random" class="w-10 h-10 rounded-full">
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <h4 class="font-medium text-blue-900"><i class="fas fa-user-graduate mr-1"></i>Praja Joko</h4>
                                <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i>1 hari yang lalu</span>
                            </div>
                            <p class="text-gray-700 mt-1">Mohon penjelasan tentang mekanisme penilaian tugas akhir semester ini.</p>
                            <div class="flex items-center gap-4 mt-2">
                                <button class="text-sm text-gray-500 hover:text-blue-600">
                                    <i class="fas fa-comment"></i> 3 Komentar
                                </button>
                                <button class="text-sm text-gray-500 hover:text-blue-600">
                                    <i class="fas fa-thumbs-up"></i> 8 Suka
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tombol Buat Diskusi Baru -->
                <button class="w-full py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    <i class="fas fa-plus mr-2"></i> Buat Diskusi Baru
                </button>
            </div>
        </div>
    </div>

    <!-- Informasi -->
    <div class="bg-blue-50 rounded-lg p-4">
        <h3 class="font-semibold text-blue-900 mb-2"><i class="fas fa-info-circle mr-2"></i>Informasi E-Learning</h3>
        <ul class="text-sm text-gray-700 space-y-2">
            <li class="flex items-center gap-2">
                <i class="fa fa-info-circle text-blue-600"></i>
                Akses E-Learning menggunakan akun SSO IPDN Anda
            </li>
            <li class="flex items-center gap-2">
                <i class="fa fa-clock text-blue-600"></i>
                Jadwal maintenance setiap hari Minggu pukul 00:00 - 06:00 WIB
            </li>
            <li class="flex items-center gap-2">
                <i class="fa fa-headset text-blue-600"></i>
                Bantuan teknis: elearning@ipdn.ac.id
            </li>
        </ul>
    </div>
</div>
@endsection