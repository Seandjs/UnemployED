@extends('admin.layout.app')

@section('content')
    <section class="mb-8">
        <div
            class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 bg-[linear-gradient(180deg,#466C92,#30475E)] rounded-3xl px-10 py-9 text-white shadow-lg">
            <div class="flex flex-col gap-3">
                <h3 class="opacity-75 text-sm font-bold tracking-widest">
                    ADMIN OVERVIEW
                </h3>
                <h2 class="font-bold text-4xl">
                    Dashboard Admin
                </h2>
                <p class="font-light text-base max-w-2xl text-gray-200">
                    Monitor job submissions, manage approved listings, and control user activity from one place.
                </p>
            </div>

            <div class="text-6xl my-auto cursor-pointer hover:rotate-12 transition-transform">
                <i class="fa-solid fa-chart-line"></i>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Pending Approval</p>
                    <h2 class="text-3xl font-bold mt-2">12</h2>
                </div>
                <div class="w-14 h-14 rounded-2xl bg-yellow-100 text-yellow-600 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-inbox"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Approved Jobs</p>
                    <h2 class="text-3xl font-bold mt-2">34</h2>
                </div>
                <div class="w-14 h-14 rounded-2xl bg-green-100 text-green-600 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Registered Users</p>
                    <h2 class="text-3xl font-bold mt-2">58</h2>
                </div>
                <div class="w-14 h-14 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-users"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-6">
        <div class="xl:col-span-2 bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-xl font-bold"><span class="underline">R</span>ecent Activity</h2>
                    <p class="text-sm opacity-50">Latest platform activity and submission updates.</p>
                </div>
                <a href="/admin/approvals"
                    class="border border-black border-opacity-75 rounded-lg px-4 py-2 text-sm hover:bg-black hover:text-white transition-all">
                    View Approval
                </a>
            </div>

            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 rounded-2xl bg-[#F7F7F7] border border-black border-opacity-5">
                    <div class="flex gap-4 items-center">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center bg-[linear-gradient(180deg,#466C92,#30475E)] text-white">
                            <i class="fa-solid fa-file-circle-plus"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">New job submitted</h3>
                            <p class="text-sm opacity-60">Frontend Developer • PT. Kecap</p>
                        </div>
                    </div>
                    <span class="text-xs opacity-50">2 hours ago</span>
                </div>

                <div class="flex items-center justify-between p-4 rounded-2xl bg-[#F7F7F7] border border-black border-opacity-5">
                    <div class="flex gap-4 items-center">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center bg-green-100 text-green-600">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">Job approved</h3>
                            <p class="text-sm opacity-60">Backend Engineer • PT. Coding Indo</p>
                        </div>
                    </div>
                    <span class="text-xs opacity-50">5 hours ago</span>
                </div>

                <div class="flex items-center justify-between p-4 rounded-2xl bg-[#F7F7F7] border border-black border-opacity-5">
                    <div class="flex gap-4 items-center">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center bg-red-100 text-red-500">
                            <i class="fa-solid fa-user-minus"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">User removed</h3>
                            <p class="text-sm opacity-60">Inactive account was deleted by admin</p>
                        </div>
                    </div>
                    <span class="text-xs opacity-50">Yesterday</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
            <h2 class="text-xl font-bold mb-2"><span class="underline">Q</span>uick Actions</h2>
            <p class="text-sm opacity-50 mb-6">Shortcut to your main admin sections.</p>

            <div class="flex flex-col gap-4">
                <a href="/admin/approvals"
                    class="flex items-center justify-between p-4 rounded-2xl border border-black border-opacity-10 hover:bg-[#30475E] hover:text-white transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-inbox"></i>
                        <span>Inbox Approval</span>
                    </div>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="/admin/jobs"
                    class="flex items-center justify-between p-4 rounded-2xl border border-black border-opacity-10 hover:bg-[#30475E] hover:text-white transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-briefcase"></i>
                        <span>Manage Lowongan</span>
                    </div>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="/admin/users"
                    class="flex items-center justify-between p-4 rounded-2xl border border-black border-opacity-10 hover:bg-[#30475E] hover:text-white transition-all">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-users"></i>
                        <span>Manage User</span>
                    </div>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
            <h2 class="text-xl font-bold mb-4"><span class="underline">P</span>latform Summary</h2>
            <div class="space-y-4 text-sm">
                <div class="flex justify-between">
                    <span class="opacity-60">Waiting approval</span>
                    <span class="font-semibold">12 jobs</span>
                </div>
                <div class="flex justify-between">
                    <span class="opacity-60">Live published jobs</span>
                    <span class="font-semibold">34 jobs</span>
                </div>
                <div class="flex justify-between">
                    <span class="opacity-60">Total active users</span>
                    <span class="font-semibold">58 users</span>
                </div>
                <div class="flex justify-between">
                    <span class="opacity-60">Rejected submissions</span>
                    <span class="font-semibold">7 jobs</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-lg border border-black border-opacity-10">
            <h2 class="text-xl font-bold mb-4"><span class="underline">A</span>dmin Notes</h2>
            <p class="text-sm opacity-70 leading-7">
                Use this dashboard to monitor platform activity. Later, you can replace this block with charts,
                notifications, or a recent log table.
            </p>
        </div>
    </section>
@endsection