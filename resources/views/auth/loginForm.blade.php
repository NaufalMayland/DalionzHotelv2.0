<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>HDalionz - {{$title}}</title>
</head>
<body class="font-['poppins']">
    <div class="w-auto h-screen items-center justify-center flex bg-gray-200">
        <form action="" method="POST" class="w-fit bg-white shadow rounded px-4 py-6">
            <div class="w-60">
                <div class="text-center justify-center flex gap-2">
                    <div class="text-2xl font-bold">
                        <h1>Login</h1>
                    </div>
                    <div class="bg-red-400">
        
                    </div>
                </div>
                <div class="grid text-sm gap-2 my-4">
                    <div class="grid">
                        <label for="email">Email</label>
                        <input class="border p-1 rounded w-full" type="email" id="email" name="email">
                    </div>
                    <div class="grid">
                        <label for="password">Password</label>
                        <input class="border p-1 rounded w-full" type="password" name="password" id="password">
                    </div>
                </div>
                <div class="gap-2 grid">
                    <div class="text-center text-white text-sm items-center justify-center cursor-pointer bg-orange-500 rounded-full p-2">
                        <button type="submit">Login</button>
                    </div>
                    <div class="text-xs text-center">
                        <span>Belum punya akun? <a class="text-blue-500" href="{{route('registerForm')}}">Register</a></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>