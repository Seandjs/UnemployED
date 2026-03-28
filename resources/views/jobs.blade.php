<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Jobs - UnemployED</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="bg-[#f8f8f8]">

    <nav
        class="fixed top-0 left-0 w-full z-50 flex items-center justify-between pt-3 pb-3 pl-9 pr-9 border-b border-black border-opacity-25 bg-white shadow">
        <div class="w-48">
            <img src="{{ asset('images/logo.png') }}" alt="logo" />
        </div>
        <div class="flex flex-row gap-12 text-sm">
            <a
                href="/dashboard#home"
                class="relative inline-block after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-full after:bg-black after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                Home
            </a>
            <a
                href="/dashboard#about"
                class="relative inline-block after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-full after:bg-black after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                About
            </a>
            <a
                href="/dashboard#discover"
                class="relative inline-block after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-full after:bg-black after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                Discover
            </a>
            <a
                href="/dashboard#submit-job"
                class="relative inline-block after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-full after:bg-black after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                Submit Job
            </a>
        </div>
        <div
            class="flex flex-row gap-3 border-l border-black border-opacity-25 pl-9 text-sm">
            <!-- <a href="#"><i class="fa-solid fa-right-from-bracket"></i> Profile</a> -->
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="text-[#F05454] p-2 border border-[#F05454] rounded-lg hover:bg-[#F05454] hover:text-white hover:scale-110 transition-all">
                    <i class="fa-solid fa-user"></i> Logout
                </button>
            </form>
        </div>
    </nav>

    <section class="max-w-6xl mx-auto mt-36 px-6">
        <div class="bg-[linear-gradient(180deg,#466C92,#30475E)] rounded-3xl p-10 text-white shadow-lg">
            <h1 class="text-4xl font-bold mb-2">Find Your Next Job</h1>
            <p class="opacity-80">Explore all available job opportunities</p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 mt-10">
        <div class="bg-white rounded-2xl shadow-lg border border-black border-opacity-10 p-5 flex flex-col md:flex-row gap-4">

            <div class="flex items-center w-full border border-black border-opacity-20 rounded-xl px-4 py-2">
                <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                <input type="text"
                    placeholder="Search jobs, company, location..."
                    class="w-full ml-3 outline-none text-sm">
            </div>

            <div class="relative w-full md:w-48">
                <select class="appearance-none w-full border border-black border-opacity-20 rounded-xl px-4 py-2 text-sm bg-white pr-10 focus:outline-none focus:ring-2 focus:ring-[#466C92] transition">
                    <option>All Types</option>
                    <option>Full-Time</option>
                    <option>Part-Time</option>
                    <option>Contract</option>
                </select>

                <i class="fa-solid fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none"></i>
            </div>

            <button class="px-6 py-2 bg-black text-white rounded-xl hover:scale-105 transition-all">
                Search
            </button>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 mt-10 mb-16">
        <div class="grid md:grid-cols-3 gap-6">

            <div class="p-5 border border-black border-opacity-25 rounded-2xl shadow-lg flex flex-col gap-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 bg-white">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex gap-4">
                        <div class="w-14 h-14 flex items-center justify-center bg-white rounded-xl shadow border border-black border-opacity-10 p-2">
                            <img src="{{ asset('images/laptop.png') }}" alt="logo" class="max-w-full max-h-full object-contain">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg leading-tight">Senior Vue Dev</h3>
                            <p class="text-sm opacity-70">
                                PT. Maju Mundur <span>- Jakarta</span>
                            </p>
                        </div>
                    </div>
                    <span class="px-3 py-1 bg-[#FAD1E6] text-black text-center rounded-full text-xs font-medium shadow-sm whitespace-nowrap">
                        Part-Time
                    </span>
                </div>
                <hr class="border-gray-200">
                <div class="flex justify-end items-center">
                    <a href="/jobs-detail"
                        class="border border-black border-opacity-75 rounded-lg px-4 py-2 text-sm hover:bg-black hover:text-white hover:scale-105 transition-all">
                        View Details
                    </a>
                </div>
            </div>

        </div>
    </section>
    <footer>
        <div class="flex flex-col items-center justify-center my-7 gap-4">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-32">
            <p class="text-sm opacity-70">© 2024 UnemployED. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>