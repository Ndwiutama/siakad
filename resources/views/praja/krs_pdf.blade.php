@php
    $fontFamily = 'Arial, Helvetica, sans-serif';
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kartu Rencana Studi</title>
    <style>
        body { font-family: {{ $fontFamily }}; font-size: 12px; }
        .header { text-align: center; margin-bottom: 20px; }
        .title { font-size: 18px; font-weight: bold; }
        .info { margin-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #333; padding: 4px 8px; text-align: left; }
        th { background: #eee; }
        .semester-title { margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="header">
        <div class="title">Kartu Rencana Studi (KRS)</div>
    </div>
    <div class="info">
        <strong>Nama:</strong> {{ $praja->user->name ?? '-' }}<br>
        <strong>Program Studi:</strong> {{ $praja->program_studi ?? '-' }}
    </div>
    @for ($i = 1; $i <= 8; $i++)
        @php $matkuls = $praja->nilaiKehadiran->where('semester', $i); @endphp
        <div class="semester-title">Semester {{ $i }}</div>
        @if($matkuls->count())
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Kuliah</th>
                    <th>Kelas</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matkuls as $idx => $mk)
                <tr>
                    <td>{{ $idx+1 }}</td>
                    <td>{{ $mk->mata_kuliah }}</td>
                    <td>{{ $mk->kelas }}</td>
                    <td>{{ $mk->nilai_akhir }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div style="color: #888; font-style: italic; margin-bottom: 10px;">Belum ada matakuliah</div>
        @endif
    @endfor
</body>
</html> 