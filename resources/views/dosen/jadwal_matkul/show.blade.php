@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Jadwal Matakuliah</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th width="200">Kode Matakuliah</th>
                                <td>{{ $jadwalMatkul->kode_matkul }}</td>
                            </tr>
                            <tr>
                                <th>Nama Matakuliah</th>
                                <td>{{ $jadwalMatkul->nama_matkul }}</td>
                            </tr>
                            <tr>
                                <th>SKS</th>
                                <td>{{ $jadwalMatkul->sks }}</td>
                            </tr>
                            <tr>
                                <th>Semester</th>
                                <td>{{ $jadwalMatkul->semester }}</td>
                            </tr>
                            <tr>
                                <th>Hari</th>
                                <td>{{ $jadwalMatkul->hari }}</td>
                            </tr>
                            <tr>
                                <th>Jam Mulai</th>
                                <td>{{ $jadwalMatkul->jam_mulai }}</td>
                            </tr>
                            <tr>
                                <th>Jam Selesai</th>
                                <td>{{ $jadwalMatkul->jam_selesai }}</td>
                            </tr>
                            <tr>
                                <th>Ruangan</th>
                                <td>{{ $jadwalMatkul->ruangan }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('dosen.jadwal-matkul.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('dosen.jadwal-matkul.edit', $jadwalMatkul->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 