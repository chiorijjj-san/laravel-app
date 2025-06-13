<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Alpine.js --}}
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-50 text-gray-800" x-data="portfolio">

    {{-- Main Content --}}
    @yield('content')

</body>
</html>
