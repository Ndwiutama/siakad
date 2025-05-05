@extends('dosen.layout')
@section('title', 'Edit Nilai & Kehadiran')
@section('content')
<div class="max-w-2xl mx-auto mt-8">
    <h1 class="text-2xl font-bold text-blue-900 mb-6">Edit Nilai & Kehadiran Praja</h1>
    <div class="bg-white rounded-lg shadow-md p-6">
        <form action="{{ route('dosen.nilai-kehadiran.update', $nilaiKehadiran->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('dosen.nilai_kehadiran._form', ['nilaiKehadiran' => $nilaiKehadiran, 'prajas' => $prajas])
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded-lg hover:bg-blue-800">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection 