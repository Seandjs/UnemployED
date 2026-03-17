<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UnemployED</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
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
            scroll-behavior: smooth;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 180px;
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
        <div class="flex flex-row p-9 gap-12 justify-between mt-12 mb-12 bg-[linear-gradient(180deg,#466C92,#30475E)] rounded-3xl px-10 py-9 text-white shadow-lg">
            <div class="gap-5 flex flex-col justify-center">
                <h3 class="opacity-75 text-sm font-bold tracking-widest">
                    JOB DETAIL
                </h3>
                <h2 class="font-bold text-4xl">
                    Frontend Developer
                </h2>
                <div class="flex flex-row gap-4 text-white text-xs">
                    <div class="flex flex-row gap-2">
                        <i class="fa-solid fa-building my-auto"></i>
                        <p>PT. Kecap</p>
                    </div>
                    <div class="flex flex-row gap-2">
                        <i class="fa-solid fa-location-pin my-auto"></i>
                        <p>Jakartuy</p>
                    </div>
                    <div class="flex flex-row gap-2">
                        <i class="fa-solid fa-wallet my-auto"></i>
                        <p>Rp 8.000.000 / month</p>
                    </div>
                </div>
                <div>
                    <div class="flex flex-row gap-2 text-sm mt-2 bg-white text-[#30475E] w-max px-3 py-1 rounded-lg">
                        <h3>
                            Full Time
                        </h3>
                    </div>
                </div>
            </div>
            <div class="text-6xl my-auto cursor-pointer hover:rotate-12 transition-transform w-24 h-24 p-3 border-black border rounded-2xl bg-white">
                <img src="{{ asset('images/laptop.png') }}" alt="">
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto mt-2 px-6">
        <div class="grid md:grid-cols-3 gap-5">

            <div class="md:col-span-2 flex flex-col gap-5">
                <div class="border border-black rounded-3xl p-6 flex flex-col gap-3 shadow-lg">
                    <h2 class="text-xl"><span class="font-bold underline">J</span>ob Description</h2>
                    <p class="text-sm font-light">
                        We are looking for a skilled Frontend Developer to join our team. The ideal candidate will have experience with HTML, CSS, JavaScript, and modern frontend frameworks such as React or Vue.js. You will be responsible for creating responsive and user-friendly web applications that meet the needs of our clients.
                    </p>
                </div>
                <div class="border border-black rounded-3xl p-6 flex flex-col gap-3 shadow-lg">
                    <h2 class="text-xl"><span class="font-bold underline">R</span>equirements</h2>
                    <ul class="text-sm leading-7 font-light list-disc pl-5">
                        <li>Minimum 1 year of experience in frontend development</li>
                        <li>Understand HTML, CSS, JavaScript</li>
                        <li>Experience using Vue, React, or similar framework</li>
                        <li>Understand responsive web design</li>
                        <li>Good communication and teamwork</li>
                    </ul>
                </div>
            </div>
            <div class="md:col-span-1 flex flex-col gap-8">
                <div class="border border-black rounded-3xl p-6 flex flex-col gap-5 shadow-lg">
                    <h2 class="text-xl"><span class="font-bold underline">J</span>ob Overview</h2>
                    <div class="border-l gap-4 flex flex-col border-black pl-4">
                        <div class="">
                            <h4 class="text-sm opacity-50">Company</h4>
                            <p class="text-sm font-medium">PT. Kecap</p>
                        </div>
                        <div class="">
                            <h4 class="text-sm opacity-50">Location</h4>
                            <p class="text-sm font-medium">Jakartuy</p>
                        </div>
                        <div class="">
                            <h4 class="text-sm opacity-50">Salary</h4>
                            <p class="text-sm font-medium">Rp 8.000.000 / month</p>
                        </div>
                        <div class="">
                            <h4 class="text-sm opacity-50">Deadline</h4>
                            <p class="text-sm font-medium">30 September 2024</p>
                        </div>
                    </div>
                    <div class="mt-3 inline-block bg-white border border-black text-black text-sm font-semibold px-4 py-2 rounded-full shadow-sm max-w-[50%] text-center">
                        <i class="fa-regular fa-clock"></i> 7 Days Left
                    </div>
                </div>
                <div class="border border-black rounded-3xl p-6 flex flex-col gap-5 shadow-lg">
                    <h2 class="text-xl"><span class="font-bold underline">C</span>ompany Contact</h2>
                    <div class="gap-4 flex flex-col border-black">
                        <div class="">
                            <h4 class="text-sm opacity-50">Website</h4>
                            <a href="https://www.ptkecap.com" class="text-sm font-medium text-[#466C92] underline">https://www.ptkecap.com</a>
                        </div>
                        <div class="">
                            <h4 class="text-sm opacity-50">E-mail</h4>
                            <p class="text-sm font-medium">HdPdM@example.com</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 mt-3">
                        <button class="px-6 py-3 w-full bg-black text-white rounded-lg border border-black hover:bg-white hover:text-black hover:scale-105 transition-all shadow-lg">
                            <a href="mailto:HdPdM@example.com" class="text-sm font-medium">Contact via Email</a>
                        </button>
                        <button class="px-6 py-3 w-full bg-white text-black rounded-lg border border-black hover:bg-black hover:text-white hover:scale-105 transition-all shadow-lg">
                            <a href="mailto:HdPdM@example.com" class="text-sm font-medium">Contact via Email</a>
                        </button>
                    </div>
                </div>
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