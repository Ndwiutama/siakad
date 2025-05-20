@extends('praja.layout')
@section('title', 'Profil Praja')
@section('content')

    <!-- Pop-up Notification -->
    @if (session('success') || session('error'))
        <div id="notification" class="fixed top-20 right-4 z-50 max-w-sm">
            @if (session('success'))
                <div
                    class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-md flex justify-between items-center">
                    <div>
                        <p class="font-bold">Berhasil!</p>
                        <p>{{ session('success') }}</p>
                    </div>
                    <button onclick="closeNotification()" class="text-green-700">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div
                    class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded shadow-md flex justify-between items-center">
                    <div>
                        <p class="font-bold">Error!</p>
                        <p>{{ session('error') }}</p>
                    </div>
                    <button onclick="closeNotification()" class="text-red-700">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            @endif
        </div>

        <script>
            // Auto close notification after 5 seconds
            setTimeout(function() {
                var notification = document.getElementById('notification');
                if (notification) {
                    notification.style.display = 'none';
                }
            }, 5000);

            function closeNotification() {
                document.getElementById('notification').style.display = 'none';
            }
        </script>
    @endif

    <div class="max-w-5xl mx-auto mt-8 flex flex-col gap-6" x-data="{
        modal: false,
        data: {
            nama: 'Nama lengkap',
            jk: 'Jenis kelamin',
            email: 'Email',
            ttl: 'Tempat, Tanggal Lahir',
            agama: 'Agama',
            asdaf: 'Asdaf',
            wisma: 'Wisma',
            nik: 'Nomor Induk Kependudukan (NIK)',
            kk: 'Nomor Kartu Keluarga',
            kewarganegaraan: 'Kewarganegaraan',
            sekolah: 'Asal Sekolah',
            hp: 'Nomor Handphone',
        },
        edit: {},
        openEdit() {
            this.edit = { ...this.data };
            this.modal = true;
        },
        saveEdit() {
            this.data = { ...this.edit };
            this.modal = false;
        }
    }">
        <!-- Header Nama -->
        <div class="bg-white rounded-t-xl shadow p-4 flex items-center gap-4 mb-0 border-b">
            <i class="fa fa-user-circle text-4xl text-gray-700"></i>
            <div>
                <div class="font-bold text-xl text-gray-900">Nama Praja</div>
                <div class="text-gray-500 text-sm">NPP</div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">
            <!-- Data Diri (Kiri) -->
            <div class="bg-white rounded-xl shadow p-6 flex flex-col gap-2 border col-span-2">
                <div class="flex justify-between items-center mb-4">
                    <div class="font-bold text-lg text-gray-900">DATA DIRI</div>
                    <button @click="openEdit()"
                        class="bg-blue-900 text-white px-4 py-2 rounded shadow hover:bg-blue-800 text-sm">Edit
                        Foto</button>
                </div>
                <div class="flex items-center gap-4 mb-4">
                    <i class="fa fa-user-circle text-6xl text-gray-400"></i>
                </div>
                <div class="grid grid-cols-2 gap-x-4 gap-y-1 text-sm">
                    <div>Nama lengkap</div>
                    <div>: <span x-text="data.nama"></span></div>
                    <div>Jenis kelamin</div>
                    <div>: <span x-text="data.jk"></span></div>
                    <div>Tempat, Tanggal Lahir</div>
                    <div>: <span x-text="data.ttl"></span></div>
                    <div>Agama</div>
                    <div>: <span x-text="data.agama"></span></div>
                    <div>Asdaf</div>
                    <div>: <span x-text="data.asdaf"></span></div>
                    <div>Wisma</div>
                    <div>: <span x-text="data.wisma"></span></div>
                    <div>Nomor Induk Kependudukan (NIK)</div>
                    <div>: <span x-text="data.nik"></span></div>
                    <div>Nomor Kartu Keluarga</div>
                    <div>: <span x-text="data.kk"></span></div>
                    <div>Kewarganegaraan</div>
                    <div>: <span x-text="data.kewarganegaraan"></span></div>
                    <div>Asal Sekolah</div>
                    <div>: <span x-text="data.sekolah"></span></div>
                    <div>Nomor Handphone</div>
                    <div>: <span x-text="data.hp"></span></div>
                    <div>Email</div>
                    <div>: <span x-text="data.email"></span></div>
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="flex flex-col gap-6 col-span-1">
                <!-- Data Akademik -->
                <div class="bg-white rounded-xl shadow p-6 flex flex-col gap-2 border">
                    <div class="font-bold text-lg mb-2 text-gray-900">Data Akademik</div>
                    <div class="grid grid-cols-1 gap-y-1 text-sm">
                        <div class="flex justify-between"><span>Nomor Pokok Praja</span><span>: Nomor Pokok Praja</span>
                        </div>
                        <div class="flex justify-between"><span>Program Studi</span><span>: Program Studi</span></div>
                        <div class="flex justify-between"><span>Tahun Masuk</span><span>: Tahun Masuk</span></div>
                        <div class="flex justify-between"><span>Tingkatan</span><span>: Tingkatan</span></div>
                        <div class="flex justify-between"><span>Dosen Wali</span><span>: Dosen Wali</span></div>
                        <div class="flex justify-between"><span>Semester</span><span>: Semester</span></div>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="bg-white rounded-xl shadow p-6 flex flex-col gap-2 border">
                    <div class="font-bold text-lg mb-2 text-gray-900">Alamat</div>
                    <div class="grid grid-cols-1 gap-y-1 text-sm">
                        <div class="flex justify-between"><span>Alamat Tempat Tinggal</span><span>: Alamat Tempat
                                Tinggal</span>
                        </div>
                        <div class="flex justify-between"><span>Desa/Kelurahan</span><span>: Desa/Kelurahan</span></div>
                        <div class="flex justify-between"><span>Kecamatan</span><span>: Kecamatan</span></div>
                        <div class="flex justify-between"><span>Kabupaten</span><span>: Kabupaten</span></div>
                        <div class="flex justify-between"><span>Provinsi</span><span>: Provinsi</span></div>
                        <div class="flex justify-between"><span>Kode Pos</span><span>: Kode Pos</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Data Diri (Dummy, Alpine.js) -->
        <div x-show="modal" style="background: rgba(0,0,0,0.2)" class="fixed inset-0 z-50 flex items-center justify-center"
            x-transition>
            <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-lg relative">
                <button @click="modal = false" class="absolute top-2 right-2 text-gray-400 hover:text-red-500"><i
                        class="fa fa-times text-xl"></i></button>
                <h2 class="font-bold text-lg mb-4 text-blue-900">Edit Data Diri</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Nama Lengkap</label>
                        <input type="text" class="w-full border rounded px-3 py-2" x-model="edit.nama">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Jenis Kelamin</label>
                        <input type="text" class="w-full border rounded px-3 py-2" x-model="edit.jk">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Tempat, Tanggal Lahir</label>
                        <input type="text" class="w-full border rounded px-3 py-2" x-model="edit.ttl">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Agama</label>
                        <input type="text" class="w-full border rounded px-3 py-2" x-model="edit.agama">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Asdaf</label>
                        <input type="text" class="w-full border rounded px-3 py-2" x-model="edit.asdaf">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Wisma</label>
                        <input type="text" class="w-full border rounded px-3 py-2" x-model="edit.wisma">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Nomor Induk Kependudukan (NIK)</label>
                        <input type="text" class="w-full border rounded px-3 py-2" x-model="edit.nik">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Nomor Kartu Keluarga</label>
                        <input type="text" class="w-full border rounded px-3 py-2" x-model="edit.kk">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Kewarganegaraan</label>
                        <input type="text" class="w-full border rounded px-3 py-2" x-model="edit.kewarganegaraan">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Asal Sekolah</label>
                        <input type="text" class="w-full border rounded px-3 py-2" x-model="edit.sekolah">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Nomor Handphone</label>
                        <input type="text" class="w-full border rounded px-3 py-2" x-model="edit.hp">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Email</label>
                        <input type="email" class="w-full border rounded px-3 py-2" x-model="edit.email">
                    </div>
                </div>
                <div class="flex justify-end gap-2 mt-6">
                    <button @click="modal = false" class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300">Batal</button>
                    <button @click="saveEdit()"
                        class="px-4 py-2 rounded bg-blue-700 text-white hover:bg-blue-800">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
