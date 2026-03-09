<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UnemployED</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Barriecito&family=Coiny&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body>
    <nav
        class="fixed top-0 left-0 w-full z-50 flex items-center justify-between pt-3 pb-3 pl-9 pr-9 border-b border-black border-opacity-25 bg-white shadow">
        <div class="w-48">
            <img src="{{ asset('images/logo.png') }}" alt="logo" />
        </div>
        <div class="flex flex-row gap-12 text-sm">
            <a
                href="#home"
                class="relative inline-block after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-full after:bg-black after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                Home
            </a>
            <a
                href="#about"
                class="relative inline-block after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-full after:bg-black after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                About
            </a>
            <a
                href="#discover"
                class="relative inline-block after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-full after:bg-black after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                Discover
            </a>
            <a
                href="#submit-job"
                class="relative inline-block after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-full after:bg-black after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                Submit Job
            </a>
        </div>
        <div
            class="flex flex-row gap-3 border-l border-black border-opacity-25 pl-9 text-sm">
            <a href="#"><i class="fa-solid fa-right-from-bracket"></i> Profile</a>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="text-[#F05454]">
                    <i class="fa-solid fa-user"></i> Logout
                </button>
            </form>
        </div>
    </nav>
    <section id="home" class="max-w-6xl mx-auto mt-40 px-6">
        <div
            class="flex items-center justify-between bg-[linear-gradient(180deg,#466C92,#30475E)] rounded-3xl px-16 py-16 text-white drop-shadow-[0_1px_3px_rgba(0,0,0,0.25)]">
            <div class="max-w-lg">
                <h3
                    class="text-xs tracking-widest mb-2 font-medium opacity-80">
                    STILL UNEMPLOYED?
                </h3>

                <h1 class="text-5xl font-bold mb-4">Let's Fix That</h1>

                <p class="text-xl mb-6 font-light text-gray-200">
                    Discover job opportunities and start working
                    <span class="italic">today</span>.
                </p>

                <a
                    href="#"
                    class="inline-block bg-white text-gray-800 px-6 py-3 rounded-full text-sm font-medium hover:scale-105 hover:opacity-80 transition-all duration-300">
                    Start NOW!
                </a>
            </div>

            <div>
                <img
                    src="{{ asset('images/laptop.png') }}"
                    class="w-[520px] rotate-[-16deg] drop-shadow-lg" />
            </div>
        </div>
    </section>
    <section id="about" class="mt-32 px-16">
        <div>
            <h2 class="text-3xl"><span class="underline font-bold">A</span>bout UnemployED</h2>
        </div>
        <div class="flex items-center justify-between mt-6 gap-12">
            <div class="flex flex-col flex-1">
                <p class="text-base opacity-80 leading-relaxed">
                    Unemployed is a simple job discovery platform designed to connect talented individuals with the right opportunities.
                    We understand that searching for a job can be stressful and confusing. Our mission is to make that process clearer and more accessible by bringing job listings, companies, and job seekers together in one place.
                </p>

                <div class="flex flex-row bg-[#f1f1f1] rounded-lg border border-black border-opacity-25 mt-8 p-1 max-w-lg">
                    <div class="bg-[linear-gradient(180deg,#466C92,#30475E)] rounded-lg p-3 m-2 text-white text-2xl flex items-center justify-center">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <div class="my-auto ml-2">
                        <h2 class="font-bold text-base">Kemitraan Strategis</h2>    
                        <p class="text-sm opacity-70">Bekerja sama dengan 100+ perusahaan nasional.</p>
                    </div>
                </div>
            </div>

            <div class="flex-1">
                <img class="w-full h-64 object-cover rounded-xl shadow-lg" src="{{ asset('images/orangkerja.webp') }}" alt="">
            </div>
        </div>
    </section>
</body>

</html>