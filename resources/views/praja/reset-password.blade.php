@extends('praja.layout')
@section('title', 'Reset Password')
@section('content')
<div class="max-w-md mx-auto mt-10">
    <div class="bg-white rounded-lg shadow-md p-6 mb-6 border">
        <h2 class="text-xl font-bold text-blue-900 mb-6">Reset Password</h2>
        
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        
        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('praja.reset-password') }}" method="POST">
            @csrf
            
            <div class="mb-6">
                <label for="new_password" class="block text-gray-700 font-medium mb-2">Password Baru</label>
                <input type="password" name="new_password" id="new_password" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan password baru">
            </div>
            
            <div class="flex justify-between items-center">
                <a href="{{ route('praja.profile') }}" class="text-blue-600 hover:underline">Kembali</a>
                <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
</div>
@endsection