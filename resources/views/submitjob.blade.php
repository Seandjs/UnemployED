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
                    SHARE AN OPPORTUNITY
                </h3>
                <h2 class="font-bold text-4xl">
                    Submit a Job
                </h2>
                <p class="font-light text-base max-w-xl">
                    Help others find their next career opportunity by sharing a verified job opening on <span class="italic font-extralight">Unemployed</span>.
                </p>
            </div>
            <div class="text-6xl my-auto cursor-pointer hover:rotate-12 transition-transform">
                <i class="fa-solid fa-briefcase"></i>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 mt-10 mb-16">
        <div class="grid md:grid-cols-3 gap-8">

            <!-- left -->
            <div class="md:col-span-1">
                <div class="border border-black rounded-3xl p-6 flex flex-col gap-6 shadow-lg">
                    <div class="text-xl">
                        <h2><span class="font-bold underline">P</span>osting Guide</h2>
                    </div>
                    <div class="flex flex-col">

                        <div class="flex flex-row items-start">
                            <div class="flex flex-col items-center">
                                <div class="w-9 h-9 flex items-center justify-center text-white bg-[linear-gradient(180deg,#466C92,#30475E)] rounded-lg shrink-0">
                                    <i class="fa-solid fa-paperclip"></i>
                                </div>
                            </div>
                            <div class="ml-3 mb-5">
                                <h3 class="font-bold text-lg">Complete the form</h3>
                                <p class="text-sm opacity-50">Fill in clear and detailed job information.</p>
                            </div>
                        </div>

                        <div class="flex flex-row items-start">
                            <div class="flex flex-col items-center">
                                <div class="w-9 h-9 flex items-center justify-center text-white bg-[linear-gradient(180deg,#466C92,#30475E)] rounded-lg shrink-0">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                            <div class="ml-3 mb-5">
                                <h3 class="font-bold text-lg">Wait for review</h3>
                                <p class="text-sm opacity-50">Jobs can be reviewed first before appearing publicly.</p>
                            </div>
                        </div>

                        <div class="flex flex-row items-start">
                            <div class="flex flex-col items-center">
                                <div class="w-9 h-9 flex items-center justify-center text-white bg-[linear-gradient(180deg,#466C92,#30475E)] rounded-lg shrink-0">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                            </div>
                            <div class="ml-3">
                                <h3 class="font-bold text-lg">Reach more job seekers</h3>
                                <p class="text-sm opacity-50">Your submission helps connect talent with opportunity.</p>
                            </div>
                        </div>

                    </div>
                    <div class="p-4 bg-gray-100 border border-black border-opacity-25 text-gray-500 rounded-2xl">
                        <p>
                            Make sure the vacancy is valid and still open. Incomplete or misleading information may be rejected.
                        </p>
                    </div>
                </div>
            </div>

            <!-- right -->
            <div class="md:col-span-2">
                <div class="border border-black rounded-3xl p-6 flex flex-col shadow-lg">
                    <div class="text-xl">
                        <h2><span class="font-bold underline">S</span>ubmit Job</h2>
                        <p class="text-sm opacity-50">Please fill out the form below.</p>
                    </div>

                    <form action="" method="POST">

                        <div class="flex flex-row gap-6 justify-between mb-6 mt-6">
                            <div class="flex flex-col">
                                <label for="job-title" class="text-sm font-light">Job Title</label>
                                <input class="border border-black rounded-md w-80 p-2 border-opacity-25 text-sm" type="text" id="job-title" name="job-title" placeholder="Frontend engineer senpai" required>
                            </div>
                            <div class="flex flex-col">
                                <label for="company-name" class="text-sm font-light">Company Name</label>
                                <input class="border border-black rounded-md w-80 p-2 border-opacity-25 text-sm" type="text" id="company-name" name="company-name" placeholder="PT. Kecap" required>
                            </div>
                        </div>

                        <div class="flex flex-row gap-6 justify-between mb-6">
                            <div class="flex flex-col">
                                <label for="location" class="text-sm font-light">Location</label>
                                <input class="border border-black rounded-md w-80 p-2 border-opacity-25 text-sm" type="text" id="location" name="location" placeholder="Jakarta, Indonesia" required>
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="job-type" class="text-sm font-light text-gray-700">Job Type</label>
                                <select name="job-type" id="job-type" class="border border-gray-300 rounded-md w-80 p-2 text-sm cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#466C92] focus:border-transparent transition" required>
                                    <option value="" disabled selected>Select Job Type</option>
                                    <option value="full-time">Full-time</option>
                                    <option value="part-time">Part-time</option>
                                    <option value="contract">Contract</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-row gap-6 justify-between mb-6">
                            <div class="flex flex-col">
                                <label for="salary" class="text-sm font-light">Salary</label>
                                <input class="border border-black rounded-md w-80 p-2 border-opacity-25 text-sm" type="text" id="salary" name="salary" placeholder="Rp 1.000" required>
                            </div>
                            <div class="flex flex-col gap-1">
                                <label for="application-deadline" class="text-sm font-light">Application Deadline</label>
                                <input class="border border-black rounded-md w-80 p-2 border-opacity-25 text-sm cursor-pointer" type="date" id="application-deadline" name="application-deadline" required>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="job-description" class="text-sm font-light">Job Description</label>
                            <textarea class="border border-black rounded-md w-full resize-none p-2 border-opacity-25 text-sm" id="job-description" name="job-description" rows="6" placeholder="Describe the job responsibilities, requirements, and benefits here..." required></textarea>
                        </div>

                        <div class="mb-6">
                            <label for="requirement" class="text-sm font-light">Requirements</label>
                            <textarea class="border border-black rounded-md w-full resize-none p-2 border-opacity-25 text-sm" id="requirement" name="requirement" rows="6" placeholder="List the requirements for the position here..." required></textarea>
                        </div>

                        <div class="flex flex-row gap-6 justify-between mb-6 mt-6">
                            <div class="flex flex-col">
                                <label for="company-website" class="text-sm font-light">Company Website</label>
                                <input class="border border-black rounded-md w-80 p-2 border-opacity-25 text-sm" type="text" id="company-website" name="company-website" placeholder="https://www.company.com" required>
                            </div>
                            <div class="flex flex-col">
                                <label for="company-email" class="text-sm font-light">Company Email</label>
                                <input class="border border-black rounded-md w-80 p-2 border-opacity-25 text-sm" type="email" id="company-email" name="company-email" placeholder="info@company.com" required>
                            </div>
                        </div>

                        <div class="flex flex-row gap-6 mb-6 mt-6">
                            <div class="flex flex-col w-full">
                                <label for="company-logo" class="text-sm font-light">Company Logo</label>
                                <input
                                    class="border border-black rounded-md w-full p-2 border-opacity-25 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-[linear-gradient(180deg,#466C92,#30475E)] file:text-white file:cursor-pointer cursor-pointer"
                                    type="file"
                                    id="company-logo"
                                    name="company-logo"
                                    accept="image/png, image/jpg, image/jpeg, image/webp">
                                <p class="text-xs opacity-50 mt-2">Upload company logo (PNG, JPG, JPEG, WEBP).</p>
                            </div>
                        </div>

                        <div class="flex mt-8 gap-6">
                            <button type="submit" class="px-6 py-3 bg-black text-white rounded-lg border border-black hover:bg-white hover:text-black hover:scale-105 transition-all shadow-lg">
                                Submit
                            </button>
                            <button type="reset" class="px-6 py-3 bg-white text-black rounded-lg border border-black hover:bg-black hover:text-white hover:scale-105 transition-all shadow-lg">
                                Reset
                            </button>
                        </div>

                    </form>
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