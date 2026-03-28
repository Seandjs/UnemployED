@extends('admin.layout.app')

@section('content')
    <section class="mb-8">
        <div
            class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 bg-[linear-gradient(180deg,#466C92,#30475E)] rounded-3xl px-10 py-9 text-white shadow-lg">
            <div class="flex flex-col gap-3">
                <h3 class="opacity-75 text-sm font-bold tracking-widest">
                    APPROVED LISTINGS
                </h3>
                <h2 class="font-bold text-4xl">
                    Manage Lowongan
                </h2>
                <p class="font-light text-base max-w-2xl text-gray-200">
                    Edit and remove approved job listings that are already available to users.
                </p>
            </div>

            <div class="text-6xl my-auto cursor-pointer hover:rotate-12 transition-transform">
                <i class="fa-solid fa-briefcase"></i>
            </div>
        </div>
    </section>

    <section class="bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div>
                <h2 class="text-2xl font-bold"><span class="underline">A</span>ctive Job List</h2>
                <p class="text-sm opacity-50">Manage all approved and published job listings.</p>
            </div>

            <div class="flex flex-col md:flex-row gap-3">
                <div class="relative">
                    <input
                        type="text"
                        placeholder="Search active jobs..."
                        class="border border-black border-opacity-20 rounded-xl px-4 py-2 pr-10 text-sm w-full md:w-72 focus:outline-none focus:ring-2 focus:ring-[#466C92] transition">
                    <i class="fa-solid fa-magnifying-glass absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                </div>

                <a href="#"
                    class="border bg-black text-white border-black border-opacity-75 rounded-xl px-4 py-2 text-sm hover:bg-white hover:text-black transition-all text-center">
                    Add Job
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">

            <div class="p-5 border border-black border-opacity-15 rounded-2xl shadow-lg flex flex-col gap-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 bg-white">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex gap-4">
                        <div class="w-14 h-14 flex items-center justify-center bg-white rounded-xl shadow border border-black border-opacity-10 p-2">
                            <img src="{{ asset('images/laptop.png') }}" alt="logo" class="max-w-full max-h-full object-contain">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg leading-tight">Senior Vue Dev</h3>
                            <p class="text-sm opacity-70">PT. Maju Mundur <span>- Jakarta</span></p>
                        </div>
                    </div>
                    <span class="px-3 py-1 bg-[#FAD1E6] text-black rounded-full text-xs font-medium shadow-sm whitespace-nowrap">
                        Part-Time
                    </span>
                </div>

                <div class="grid grid-cols-2 gap-3 text-sm">
                    <div class="bg-[#F7F7F7] rounded-xl p-3 border border-black border-opacity-5">
                        <p class="text-xs opacity-50 mb-1">Salary</p>
                        <p class="font-medium">Rp 8jt - 12jt</p>
                    </div>
                    <div class="bg-[#F7F7F7] rounded-xl p-3 border border-black border-opacity-5">
                        <p class="text-xs opacity-50 mb-1">Status</p>
                        <p class="font-medium text-green-600">Approved</p>
                    </div>
                </div>

                <hr class="border-gray-200">

                <div class="flex flex-wrap justify-end gap-3">
                    <a href="/jobs-detail"
                        class="border border-black border-opacity-75 rounded-xl px-4 py-2 text-sm hover:bg-black hover:text-white transition-all">
                        Detail
                    </a>
                    <button
                        class="rounded-xl px-4 py-2 text-sm bg-[#30475E] text-white hover:scale-105 hover:opacity-90 transition-all shadow">
                        Edit
                    </button>
                    <button
                        class="rounded-xl px-4 py-2 text-sm bg-red-500 text-white hover:scale-105 hover:opacity-90 transition-all shadow">
                        Delete
                    </button>
                </div>
            </div>

            <div class="p-5 border border-black border-opacity-15 rounded-2xl shadow-lg flex flex-col gap-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 bg-white">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex gap-4">
                        <div class="w-14 h-14 flex items-center justify-center bg-white rounded-xl shadow border border-black border-opacity-10 p-2">
                            <img src="{{ asset('images/laptop.png') }}" alt="logo" class="max-w-full max-h-full object-contain">
                        </div>
                        <div>
                            <h3 class="font-bold text-lg leading-tight">Backend Laravel Dev</h3>
                            <p class="text-sm opacity-70">PT. Coding Indo <span>- Surabaya</span></p>
                        </div>
                    </div>
                    <span class="px-3 py-1 bg-[#D1FAE5] text-black rounded-full text-xs font-medium shadow-sm whitespace-nowrap">
                        Full-Time
                    </span>
                </div>

                <div class="grid grid-cols-2 gap-3 text-sm">
                    <div class="bg-[#F7F7F7] rounded-xl p-3 border border-black border-opacity-5">
                        <p class="text-xs opacity-50 mb-1">Salary</p>
                        <p class="font-medium">Rp 10jt - 15jt</p>
                    </div>
                    <div class="bg-[#F7F7F7] rounded-xl p-3 border border-black border-opacity-5">
                        <p class="text-xs opacity-50 mb-1">Status</p>
                        <p class="font-medium text-green-600">Approved</p>
                    </div>
                </div>

                <hr class="border-gray-200">

                <div class="flex flex-wrap justify-end gap-3">
                    <a href="/jobs-detail"
                        class="border border-black border-opacity-75 rounded-xl px-4 py-2 text-sm hover:bg-black hover:text-white transition-all">
                        Detail
                    </a>
                    <button
                        class="rounded-xl px-4 py-2 text-sm bg-[#30475E] text-white hover:scale-105 hover:opacity-90 transition-all shadow">
                        Edit
                    </button>
                    <button
                        class="rounded-xl px-4 py-2 text-sm bg-red-500 text-white hover:scale-105 hover:opacity-90 transition-all shadow">
                        Delete
                    </button>
                </div>
            </div>

        </div>
    </section>
@endsection