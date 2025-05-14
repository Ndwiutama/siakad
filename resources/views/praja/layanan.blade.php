@extends('praja.layout')
@section('title', 'Kuesioner Layanan')
@section('content')
<div class="max-w-5xl mx-auto">
    <h1 class="text-xl font-bold mb-4">Kuesioner Layanan</h1>
    <form action="{{ route('praja.kuesioner.jawab') }}" method="POST">
        @csrf
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">No.</th>
                    <th class="border border-gray-300 px-4 py-2">Survey Kepuasan PRAJA Terhadap Kampus</th>
                    <th class="border border-gray-300 px-4 py-2">Sangat Puas</th>
                    <th class="border border-gray-300 px-4 py-2">Puas</th>
                    <th class="border border-gray-300 px-4 py-2">Cukup Puas</th>
                    <th class="border border-gray-300 px-4 py-2">Kurang Puas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kuesioner as $index => $item)
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item['dosen'] }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="jawaban[{{ $index }}]" value="Sangat Puas" required>
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="jawaban[{{ $index }}]" value="Puas">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="jawaban[{{ $index }}]" value="Cukup Puas">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="jawaban[{{ $index }}]" value="Kurang Puas">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4 text-right">
            <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-700">
                Kirim
            </button>
        </div>
    </form>
</div>
@endsection