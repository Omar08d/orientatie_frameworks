<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureDrive</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-white shadow p-4 mb-6">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('showroom') }}" class="font-bold text-xl">FutureDrive</a>
            <div>
                <a href="{{ route('showroom') }}" class="mr-4 hover:text-blue-600">Showroom</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white shadow p-4 mt-12 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} FutureDrive B.V.
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
