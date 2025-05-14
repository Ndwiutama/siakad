@extends('praja.layout')
@section('title', 'Kritik & Saran')
@section('content')
<div class="max-w-5xl mx-auto">
    <h1 class="text-xl font-bold mb-4">Kritik & Saran</h1>
    <form action="{{ route('praja.kritik-saran.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="kritik" class="block text-sm font-medium text-gray-700">Kritik</label>
            <textarea id="kritik" name="kritik" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md"></textarea>
        </div>
        <div class="mb-4">
            <label for="saran" class="block text-sm font-medium text-gray-700">Saran</label>
            <textarea id="saran" name="saran" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Kirim</button>
    </form>
</div>
@endsection