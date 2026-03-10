<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h2,
        h3 {
            font-family: 'Syne', sans-serif;
        }
    </style>
</head>

<body>
    @if ($errors->any())
    <div class="text-center bg-[#F05454] rounded-lg border border-black justify-center mx-96 my-2 p-2 text-white">
        {{ $errors->first() }}
    </div>
    @endif
    <div class="flex min-h-screen justify-center items-center text-center">
        <form action="/login" method="POST">
            <div class="flex flex-col items-center justify-center w-96 mx-auto mt-10 p-5 border border-black rounded-lg shadow-lg">
                <img src="{{ asset('images/logo.png') }}" alt="" class="w-64 mb-4">
                <div class="m-4">
                    <h2 class="text-4xl mb-1 text-center">Sign In</h2>
                    <p class="text-sm mt-1 text-center">Get a job vro 🥀</p>
                </div>
                @csrf
                <div class="p-2">
                    <p class="text-left">E-mail Address</p>
                    <input type="text" name="email" placeholder="dimas@gmail.com" class="border border-black rounded-md w-80 p-2 border-opacity-25 text-sm" required>
                </div>
                <div class="p-2">
                    <p class="text-left">Password</p>
                    <input type="password" name="password" placeholder="password" class="border border-black rounded-md w-80 p-2 border-opacity-25 text-sm" required>
                </div>
                <p class="text-xs mt-5">Don't have an account? <a href="/register" class="font-bold underline">Sign up</a></p>
            </div>
            <div class="flex justify-center items-center m-4">
                <button type="submit" class="p-4 border border-black text-black rounded-lg w-20 h-20 text-2xl hover:bg-black hover:scale-110 hover:text-white transition-all flex justify-center items-center shadow-lg">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </form>
    </div>
</body>

</html>