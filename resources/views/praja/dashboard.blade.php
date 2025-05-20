@extends('praja.layout')
@section('title', 'Dashboard Praja')

@section('content')
    <div class="max-w-5xl mx-auto flex flex-col gap-6">
        <!-- Header Selamat Datang -->
        <div
            class="bg-white rounded-lg shadow p-4 flex flex-col md:flex-row md:items-center md:justify-between gap-2 mb-2 border">
            <div class="flex items-center gap-3">
                <i class="fa fa-user-circle text-3xl text-blue-900"></i>
                <div>
                    <div class="font-semibold text-lg">Selamat datang, Praja!</div>
                    <div class="text-gray-500 text-sm">Senin, 14 April 2025</div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Jadwal Mata Kuliah Hari Ini -->
            <div class="bg-white rounded-lg shadow p-6 flex flex-col gap-4 border col-span-2">
                <div class="font-bold text-center text-lg text-blue-900 mb-2">Jadwal Mata kuliah Hari ini</div>
            </div>

            <!-- Statistik Akademik -->
            <div class="flex flex-col gap-4 col-span-1">
                <!-- IPK -->
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center h-32 border">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fa fa-message text-gray-500"></i>
                        <span class="font-semibold">IPK Saat Ini</span>
                    </div>
                    <div class="text-3xl font-bold text-blue-900">3,75</div>
                </div>

                <!-- Kalender -->
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center border">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fa fa-calendar text-gray-500"></i>
                        <span class="font-semibold">Kalender</span>
                    </div>
                    <div id="calendarPicker" class="w-max"></div>
                </div>

                <!-- Informasi -->
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center h-45 border">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fa fa-calendar text-gray-500"></i>
                        <span class="font-semibold">Informasi</span>
                    </div>
                    <div class="text-gray-700 text-sm text-center mb-2">
                        Pastikan untuk memeriksa jadwal pelajaran secara berkala. Jika ada perubahan, akan diinformasikan
                        melalui email.<br>Untuk pertanyaan lebih lanjut, silakan hubungi akademik.
                    </div>
                    <div class="flex items-center gap-2"><i class="fa fa-envelope"></i> Akademik@gmail.com</div>
                    <div class="flex items-center gap-2"><i class="fa fa-phone"></i> 081230468153</div>
                </div>

                <!-- Sosial Media -->
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center justify-center border">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-comments text-gray-500"></i>
                        <span class="font-semibold">Sosial Media</span>
                    </div>
                    <div class="flex items-center gap-2"><i class="fab fa-twitter text-blue-400"></i> Twitter IPDN</div>
                    <div class="flex items-center gap-2"><i class="fab fa-facebook text-blue-600"></i> Facebook IPDN</div>
                    <div class="flex items-center gap-2"><i class="fab fa-instagram text-pink-500"></i> Instagram IPDN</div>
                    <div class="flex items-center gap-2"><i class="fab fa-youtube text-red-600"></i> YouTube IPDN</div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('head')
    <!-- Litepicker Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" />
@endsection

@section('scripts')
    <!-- Litepicker Script -->
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Litepicker({
                element: document.getElementById('calendarPicker'),
                inlineMode: true, // Menampilkan kalender secara langsung, bukan popup
                format: 'DD MMMM YYYY',
                lang: 'id',
                dropdowns: {
                    minYear: 2020,
                    maxYear: 2030,
                    months: true,
                    years: true
                },
                setup: (picker) => {
                    picker.on('selected', (date) => {
                        console.log('Tanggal dipilih:', date.format('YYYY-MM-DD'));
                    });
                }
            });
        });
    </script>
@endsection
