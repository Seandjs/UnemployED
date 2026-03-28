<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - UnemployED</title>

    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="bg-[#F7F7F7]">

    <div class="flex min-h-screen">

        <!-- SIDEBAR -->
        @include('admin.sparepart.sidebar')

        <!-- MAIN CONTENT -->
        <main class="flex-1 p-6">

            <!-- TOPBAR -->
            @include('admin.sparepart.topbar')

            <!-- CONTENT -->
            <div class="mt-6">
                @yield('content')
            </div>

        </main>

    </div>

</body>

</html>