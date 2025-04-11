<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Form User' }}</title>

    {{-- Hubungkan Tailwind dari CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Hubungkan Custom CSS dari Public Folder --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="flex items-center justify-center min-h-screen bg-white">


    <div class="bg-pink-200 p-6 rounded-lg shadow-lg w-full max-w-md">
        @yield('content')
    </div>

    {{-- Hubungkan Custom JavaScript dari Public Folder --}}
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
