@extends('admin.layout.app')

@section('content')
    <section class="mb-8">
        <div
            class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 bg-[linear-gradient(180deg,#466C92,#30475E)] rounded-3xl px-10 py-9 text-white shadow-lg">
            <div class="flex flex-col gap-3">
                <h3 class="opacity-75 text-sm font-bold tracking-widest">
                    ADMIN APPROVAL CENTER
                </h3>
                <h2 class="font-bold text-4xl">
                    Inbox Approval
                </h2>
                <p class="font-light text-base max-w-2xl text-gray-200">
                    Review submitted job listings from users and decide whether to accept or reject them.
                </p>
            </div>

            <div class="text-6xl my-auto cursor-pointer hover:rotate-12 transition-transform">
                <i class="fa-solid fa-inbox"></i>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
            <p class="text-sm text-gray-500">Pending Jobs</p>
            <h2 class="text-3xl font-bold mt-2">12</h2>
        </div>
        <div class="bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
            <p class="text-sm text-gray-500">Approved Today</p>
            <h2 class="text-3xl font-bold mt-2">5</h2>
        </div>
        <div class="bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
            <p class="text-sm text-gray-500">Rejected Today</p>
            <h2 class="text-3xl font-bold mt-2">2</h2>
        </div>
    </section>

    <section class="bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div>
                <h2 class="text-2xl font-bold"><span class="underline">S</span>ubmitted Job List</h2>
                <p class="text-sm opacity-50">Check every user submission before it gets published.</p>
            </div>

            <div class="flex flex-col md:flex-row gap-3">
                <div class="relative">
                    <input
                        type="text"
                        placeholder="Search submitted jobs..."
                        class="border border-black border-opacity-20 rounded-xl px-4 py-2 pr-10 text-sm w-full md:w-72 focus:outline-none focus:ring-2 focus:ring-[#466C92] transition">
                    <i class="fa-solid fa-magnifying-glass absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                </div>

                <div class="relative">
                    <select
                        class="appearance-none border border-black border-opacity-20 rounded-xl px-4 py-2 pr-10 text-sm bg-white w-full md:w-48 focus:outline-none focus:ring-2 focus:ring-[#466C92] transition">
                        <option>All Status</option>
                        <option>Pending</option>
                        <option>Approved</option>
                        <option>Rejected</option>
                    </select>
                    <i class="fa-solid fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">

            <div class="p-5 border border-black border-opacity-15 rounded-2xl shadow-lg flex flex-col gap-4 bg-white hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex gap-4">
                        <div class="w-14 h-14 flex items-center justify-center bg-white rounded-xl shadow border border-black border-opacity-10 p-2">
                            <img src="{{ asset('images/laptop.png') }}" alt="logo" class="max-w-full max-h-full object-contain">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg leading-tight">Frontend Developer</h3>
                            <p class="text-sm opacity-70">PT. Kecap <span>- Jakarta</span></p>
                            <p class="text-xs opacity-50 mt-1">Submitted 2 hours ago by Fano</p>
                        </div>
                    </div>

                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-medium shadow-sm whitespace-nowrap">
                        Pending
                    </span>
                </div>

                <div class="grid grid-cols-2 gap-3 text-sm">
                    <div class="bg-[#F7F7F7] rounded-xl p-3 border border-black border-opacity-5">
                        <p class="text-xs opacity-50 mb-1">Job Type</p>
                        <p class="font-medium">Full-Time</p>
                    </div>
                    <div class="bg-[#F7F7F7] rounded-xl p-3 border border-black border-opacity-5">
                        <p class="text-xs opacity-50 mb-1">Salary</p>
                        <p class="font-medium">Rp 8jt - 12jt</p>
                    </div>
                </div>

                <p class="text-sm opacity-70 leading-relaxed">
                    Looking for a frontend developer with experience in Vue or React to build responsive and modern user interfaces.
                </p>

                <hr class="border-gray-200">

                <div class="flex flex-wrap justify-end gap-3">
                    <a href="/jobs-detail"
                        class="border border-black border-opacity-75 rounded-xl px-4 py-2 text-sm hover:bg-black hover:text-white transition-all">
                        Detail
                    </a>

                    <button
                        class="rounded-xl px-4 py-2 text-sm bg-green-500 text-white hover:scale-105 hover:opacity-90 transition-all shadow">
                        Accept
                    </button>

                    <button
                        class="rounded-xl px-4 py-2 text-sm bg-red-500 text-white hover:scale-105 hover:opacity-90 transition-all shadow">
                        Reject
                    </button>
                </div>
            </div>

            <div class="p-5 border border-black border-opacity-15 rounded-2xl shadow-lg flex flex-col gap-4 bg-white hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex gap-4">
                        <div class="w-14 h-14 flex items-center justify-center bg-white rounded-xl shadow border border-black border-opacity-10 p-2">
                            <img src="{{ asset('images/laptop.png') }}" alt="logo" class="max-w-full max-h-full object-contain">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg leading-tight">UI/UX Designer</h3>
                            <p class="text-sm opacity-70">PT. Kreatif Indo <span>- Bandung</span></p>
                            <p class="text-xs opacity-50 mt-1">Submitted 1 day ago by Anjar</p>
                        </div>
                    </div>

                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-medium shadow-sm whitespace-nowrap">
                        Pending
                    </span>
                </div>

                <div class="grid grid-cols-2 gap-3 text-sm">
                    <div class="bg-[#F7F7F7] rounded-xl p-3 border border-black border-opacity-5">
                        <p class="text-xs opacity-50 mb-1">Job Type</p>
                        <p class="font-medium">Part-Time</p>
                    </div>
                    <div class="bg-[#F7F7F7] rounded-xl p-3 border border-black border-opacity-5">
                        <p class="text-xs opacity-50 mb-1">Salary</p>
                        <p class="font-medium">Rp 6jt - 9jt</p>
                    </div>
                </div>

                <p class="text-sm opacity-70 leading-relaxed">
                    Need a UI/UX designer who can craft intuitive user flow, wireframes, and polished interface designs for web products.
                </p>

                <hr class="border-gray-200">

                <div class="flex flex-wrap justify-end gap-3">
                    <a href="/jobs-detail"
                        class="border border-black border-opacity-75 rounded-xl px-4 py-2 text-sm hover:bg-black hover:text-white transition-all">
                        Detail
                    </a>

                    <button
                        class="rounded-xl px-4 py-2 text-sm bg-green-500 text-white hover:scale-105 hover:opacity-90 transition-all shadow">
                        Accept
                    </button>

                    <button
                        class="rounded-xl px-4 py-2 text-sm bg-red-500 text-white hover:scale-105 hover:opacity-90 transition-all shadow">
                        Reject
                    </button>
                </div>
            </div>

        </div>
    </section>
@endsection