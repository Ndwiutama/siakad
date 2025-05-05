<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - IPDN Akademik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .input-border {
            border-bottom: 1px solid #ccc;
        }
        .input-border:focus {
            border-bottom: 2px solid #2563eb;
            outline: none;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full h-screen flex flex-col md:flex-row">
        <!-- Gambar Kiri -->
        <div class="hidden md:block md:w-1/2 h-full">
            <img src="{{ asset('images/latar login.jpg') }}" alt="bg-login" class="object-cover w-full h-full">
        </div>
        <!-- Form Kanan -->
        <div class="w-full md:w-1/2 flex items-center justify-center bg-white">
            <div class="w-full max-w-md p-8">
                <div class="flex flex-col items-center mb-8">
                    <img src="{{ asset('images/logo ipdn.png') }}" alt="Logo IPDN" class="h-20 w-20 mb-2">
                    <span class="font-bold text-2xl text-gray-800">IPDN Akademik</span>
                </div>
                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">NPP / akun pengguna <span class="text-red-500">*</span></label>
                        <input id="email" name="email" type="text" required placeholder="Masukan NPP pengguna yang tersedia" class="mt-1 block w-full bg-transparent input-border py-2 px-0 text-gray-900 placeholder-gray-400 focus:ring-0">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password <span class="text-red-500">*</span></label>
                        <input id="password" name="password" type="password" required placeholder="Masukan Password" class="mt-1 block w-full bg-transparent input-border py-2 px-0 text-gray-900 placeholder-gray-400 focus:ring-0">
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 text-gray-700">Ingatkan Saya</label>
                        </div>
                        <a href="#" class="text-blue-700 hover:underline">Lupa Kata Sandi</a>
                    </div>
                    @if ($errors->any())
                        <div class="text-red-500 text-sm">
                            {{ $errors->first() }}
                        </div>
                    @endif
                    <button type="submit" class="w-full py-2 bg-blue-700 text-white rounded-lg font-semibold text-lg hover:bg-blue-800 transition">Masuk</button>
                    <div class="flex items-center my-4">
                        <div class="flex-grow border-t border-gray-300"></div>
                        <span class="mx-2 text-gray-400 text-sm">Atau Lanjutkan Dengan</span>
                        <div class="flex-grow border-t border-gray-300"></div>
                    </div>
                    <button type="button" class="w-full flex items-center justify-center gap-2 border border-gray-400 rounded-lg py-2 hover:bg-gray-50">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="h-5 w-5"> Google
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>