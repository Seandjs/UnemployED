<aside class="w-72 bg-white border-r border-black border-opacity-10 shadow-lg p-6 flex flex-col justify-between">
    <div>
        <div class="mb-8">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-40">
        </div>

        <div class="mb-6">
            <h2 class="text-lg font-bold text-[#30475E]">Admin Panel</h2>
            <p class="text-sm text-gray-500">Manage platform activity</p>
        </div>

        <nav class="flex flex-col gap-3 text-sm">

            <a href="/admin"
                class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->is('admin') ? 'bg-[linear-gradient(180deg,#466C92,#30475E)] text-white shadow' : 'hover:bg-[#30475E] hover:text-white transition-all' }}">
                <i class="fa-solid fa-chart-line"></i>
                Dashboard
            </a>

            <a href="/admin/approval"
                class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->is('admin/approval') ? 'bg-[linear-gradient(180deg,#466C92,#30475E)] text-white shadow' : 'hover:bg-[#30475E] hover:text-white transition-all' }}">
                <i class="fa-solid fa-inbox"></i>
                Inbox Approval
            </a>

            <a href="/admin/manage-job"
                class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->is('admin/manage-job') ? 'bg-[linear-gradient(180deg,#466C92,#30475E)] text-white shadow' : 'hover:bg-[#30475E] hover:text-white transition-all' }}">
                <i class="fa-solid fa-briefcase"></i>
                Manage Lowongan
            </a>

            <a href="/admin/manage-user"
                class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->is('admin/manage-user') ? 'bg-[linear-gradient(180deg,#466C92,#30475E)] text-white shadow' : 'hover:bg-[#30475E] hover:text-white transition-all' }}">
                <i class="fa-solid fa-users"></i>
                Manage User
            </a>

        </nav>
    </div>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit"
            class="w-full text-[#F05454] p-3 border border-[#F05454] rounded-xl hover:bg-[#F05454] hover:text-white transition-all">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </button>
    </form>
</aside>