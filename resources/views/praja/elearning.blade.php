@extends('praja.layout')
@section('title', 'E-Learning IPDN')
@section('content')
<div class="max-w-5xl mx-auto mt-8" x-data="{
    tab: 'course',
    pertemuan: 0,
    showDetail: false,
    data: [
        {
            judul: 'Pertemuan 1',
            materi: 'Materi 1',
            type: 'materi',
            due: 'Kamis 10 April 2025, 12:00 AM',
            status: 'Complete',
            video: 'https://www.youtube.com/embed/21X5lGlDOfg',
            deskripsi: 'Deskripsi tugas untuk Pertemuan 1',
            files: ['Materi.ppt', 'Materi.pdf'],
            submission: {
                status: 'Submitted for grading',
                grading: 'Not graded',
                file: 'Tugas 1.pdf',
                comments: 'Comments (0)'
            }
        },
        {
            judul: 'Pertemuan 2',
            materi: 'Materi 2',
            type: 'materi',
            due: 'Kamis 17 April 2025, 12:00 AM',
            status: 'Complete',
            video: 'https://www.youtube.com/embed/21X5lGlDOfg',
            deskripsi: 'Deskripsi tugas untuk Pertemuan 2',
            files: ['Materi2.ppt', 'Materi2.pdf'],
            submission: {
                status: 'Submitted for grading',
                grading: 'Not graded',
                file: 'Tugas 2.pdf',
                comments: 'Comments (0)'
            }
        },
        {
            judul: 'Pertemuan 3',
            materi: 'Quiz',
            type: 'quiz',
            due: 'Kamis 8 Mei 2025, 12:00 AM',
            status: 'Unfinished',
            quiz: {
                open: 'Kamis 8 Mei 2025, 12:00 PM',
                close: 'Kamis 8 Mei 2025, 11:00 AM',
                duration: '2 hours',
                marks: 20,
                grade: '-',
                status: 'Unfinished'
            }
        },
        {judul: 'Pertemuan 4'},
        {judul: 'Pertemuan 5'}
    ],
    diskusi: [
      {
        pertemuan: 'Pertemuan 1',
        topik: 'Tugas 1',
        file: 'Tugas1.pdf',
        komentar: [
          { nama: 'Praja A', isi: 'Bagaimana cara mengerjakan tugas ini?', waktu: '2 jam lalu' },
          { nama: 'Dosen Budi', isi: 'Silakan baca materi di atas, lalu kerjakan sesuai instruksi.', waktu: '1 jam lalu' }
        ]
      },
      {
        pertemuan: 'Pertemuan 2',
        topik: 'Materi 2',
        file: 'Materi2.pdf',
        komentar: [
          { nama: 'Praja B', isi: 'Apakah ada contoh soal untuk materi ini?', waktu: '3 jam lalu' }
        ]
      }
    ],
    grades: [
      { pertemuan: 'Pertemuan 1', tugas: 'Materi 1', nilai: 90, status: 'Complete', feedback: 'Good job!' },
      { pertemuan: 'Pertemuan 2', tugas: 'Materi 2', nilai: 85, status: 'Complete', feedback: 'Well done.' },
      { pertemuan: 'Pertemuan 3', tugas: 'Quiz', nilai: 70, status: 'Unfinished', feedback: '-' },
      { pertemuan: 'Pertemuan 4', tugas: '-', nilai: '-', status: '-', feedback: '-' },
      { pertemuan: 'Pertemuan 5', tugas: '-', nilai: '-', status: '-', feedback: '-' }
    ]
}">
    <div class="bg-white rounded-t-xl shadow p-4 flex items-center gap-4 mb-0 border-b">
        <span class="font-bold text-xl text-blue-900">Nama Mata Kuliah</span>
    </div>
    <div class="bg-white rounded-b-xl shadow p-6 border-t-0">
        <!-- Tabs -->
        <div class="flex gap-2 mb-4">
            <button @click="tab = 'course'; showDetail = false" :class="tab === 'course' ? 'bg-blue-900 text-white' : 'bg-white text-blue-900'" class="px-4 py-1.5 rounded-t font-semibold border border-b-0 border-blue-900">Course</button>
            <button @click="tab = 'diskusi'; showDetail = false" :class="tab === 'diskusi' ? 'bg-blue-900 text-white' : 'bg-white text-blue-900'" class="px-4 py-1.5 rounded-t font-semibold border border-b-0 border-blue-900">Diskusi</button>
            <button @click="tab = 'grades'; showDetail = false" :class="tab === 'grades' ? 'bg-blue-900 text-white' : 'bg-white text-blue-900'" class="px-4 py-1.5 rounded-t font-semibold border border-b-0 border-blue-900">Grades</button>
        </div>
        <!-- Tab Content -->
        <div class="border rounded-xl p-4 min-h-[400px]">
            <!-- Course Tab -->
            <template x-if="tab === 'course' && !showDetail">
                <div>
                    <template x-for="(item, idx) in data" :key="idx">
                        <div class="mb-3 border rounded p-3 bg-white cursor-pointer hover:bg-blue-50" @click="if(item.materi || item.type==='quiz'){ pertemuan = idx; showDetail = true }">
                            <div class="flex justify-between items-center">
                                <div class="font-semibold text-blue-900" x-text="item.judul"></div>
                                <template x-if="item.status">
                                    <span class="text-xs text-blue-700" x-text="item.status"></span>
                                </template>
                            </div>
                            <template x-if="item.materi">
                                <div class="flex items-center gap-2 mt-2">
                                    <i class="fa fa-plus-square"></i>
                                    <span x-text="item.materi"></span>
                                </div>
                            </template>
                            <template x-if="item.type==='quiz'">
                                <div class="flex items-center gap-2 mt-2">
                                    <i class="fa fa-file-alt"></i>
                                    <span>Quiz</span>
                                </div>
                            </template>
                            <template x-if="item.due">
                                <div class="text-xs mt-1"><b>Due</b> : <span x-text="item.due"></span></div>
                            </template>
                        </div>
                    </template>
                </div>
            </template>
            <!-- Detail Pertemuan -->
            <template x-if="tab === 'course' && showDetail">
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <div class="font-semibold"> <span x-text="data[pertemuan].judul"></span> </div>
                        <div class="font-semibold" x-text="data[pertemuan].materi || data[pertemuan].type==='quiz' ? (data[pertemuan].materi || 'Quiz') : ''"></div>
                    </div>
                    <!-- Video -->
                    <template x-if="data[pertemuan].video">
                        <div class="mb-4">
                            <iframe :src="data[pertemuan].video" class="w-full rounded" style="aspect-ratio: 16/9;" allowfullscreen></iframe>
                        </div>
                    </template>
                    <!-- Quiz -->
                    <template x-if="data[pertemuan].type==='quiz'">
                        <div class="mb-4 border rounded p-3">
                            <div><b>Opened:</b> <span x-text="data[pertemuan].quiz.open"></span></div>
                            <div><b>Closed:</b> <span x-text="data[pertemuan].quiz.close"></span></div>
                            <div class="mt-2">
                                <table class="text-sm border w-1/2">
                                    <tr><td>Status</td><td x-text="data[pertemuan].quiz.status"></td></tr>
                                    <tr><td>Started</td><td>-</td></tr>
                                    <tr><td>Completed</td><td>-</td></tr>
                                    <tr><td>Duration</td><td x-text="data[pertemuan].quiz.duration"></td></tr>
                                    <tr><td>Marks</td><td x-text="data[pertemuan].quiz.marks"></td></tr>
                                    <tr><td>Grade</td><td>-</td></tr>
                                </table>
                                <button class="mt-3 px-4 py-1 rounded bg-blue-200 text-blue-900">Mulai Quiz</button>
                            </div>
                        </div>
                    </template>
                    <!-- Deskripsi -->
                    <template x-if="data[pertemuan].deskripsi">
                        <div class="mb-2 text-blue-900 underline cursor-pointer">Deskripsi Tugas</div>
                    </template>
                    <!-- Files -->
                    <template x-if="data[pertemuan].files">
                        <div class="mb-2">
                            <div class="font-semibold">Materi</div>
                            <template x-for="file in data[pertemuan].files" :key="file">
                                <a href="#" class="block text-blue-700 text-sm hover:underline" x-text="file"></a>
                            </template>
                        </div>
                    </template>
                    <!-- Submission Status -->
                    <template x-if="data[pertemuan].submission">
                        <div class="mb-2">
                            <div class="font-semibold mb-1">Submission status</div>
                            <table class="w-full text-sm border">
                                <tr>
                                    <td class="border px-2 py-1">Submission status</td>
                                    <td class="border px-2 py-1 bg-green-200" x-text="data[pertemuan].submission.status"></td>
                                </tr>
                                <tr>
                                    <td class="border px-2 py-1">Grading status</td>
                                    <td class="border px-2 py-1" x-text="data[pertemuan].submission.grading"></td>
                                </tr>
                                <tr>
                                    <td class="border px-2 py-1">File submissions</td>
                                    <td class="border px-2 py-1 flex justify-between items-center">
                                        <span x-text="data[pertemuan].submission.file"></span>
                                        <a href="#" class="text-blue-700 hover:underline ml-2">Edit submission</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-2 py-1">Submission comments</td>
                                    <td class="border px-2 py-1" x-text="data[pertemuan].submission.comments"></td>
                                </tr>
                            </table>
                        </div>
                    </template>
                    <!-- Navigasi -->
                    <div class="flex justify-between mt-6">
                        <button class="px-4 py-1 rounded bg-blue-900 text-white" @click="if(pertemuan>0){ pertemuan--; showDetail=true }">Sebelumnya</button>
                        <button class="px-4 py-1 rounded bg-blue-900 text-white" @click="if(pertemuan<data.length-1){ pertemuan++; showDetail=true }">Selanjutnya</button>
                    </div>
                </div>
            </template>
            <!-- Diskusi Tab -->
            <template x-if="tab === 'diskusi'">
                <div>
                    <template x-for="d in diskusi" :key="d.pertemuan">
                        <div class="mb-6 border rounded p-3">
                            <div class="font-semibold text-blue-900 mb-1" x-text="d.pertemuan + ' - ' + d.topik"></div>
                            <div class="mb-1 text-sm">File: <a href="#" class="text-blue-700 hover:underline" x-text="d.file"></a></div>
                            <div class="mt-2">
                                <div class="font-semibold text-gray-700 mb-1">Komentar:</div>
                                <template x-for="k in d.komentar" :key="k.nama + k.waktu">
                                    <div class="mb-2 pl-2 border-l-2 border-blue-200">
                                        <div class="flex items-center gap-2">
                                            <span class="font-semibold text-blue-800" x-text="k.nama"></span>
                                            <span class="text-xs text-gray-400" x-text="k.waktu"></span>
                                        </div>
                                        <div class="text-sm text-gray-700" x-text="k.isi"></div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>
            </template>
            <!-- Grades Tab -->
            <template x-if="tab === 'grades'">
                <div>
                    <div class="mb-4 font-semibold text-blue-900 text-lg">Rekap Nilai</div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm border">
                            <thead class="bg-blue-100">
                                <tr>
                                    <th class="border px-2 py-1">Pertemuan</th>
                                    <th class="border px-2 py-1">Tugas/Quiz</th>
                                    <th class="border px-2 py-1">Nilai</th>
                                    <th class="border px-2 py-1">Status</th>
                                    <th class="border px-2 py-1">Feedback</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="g in grades" :key="g.pertemuan">
                                    <tr>
                                        <td class="border px-2 py-1" x-text="g.pertemuan"></td>
                                        <td class="border px-2 py-1" x-text="g.tugas"></td>
                                        <td class="border px-2 py-1" x-text="g.nilai"></td>
                                        <td class="border px-2 py-1" x-text="g.status"></td>
                                        <td class="border px-2 py-1" x-text="g.feedback"></td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
@endsection