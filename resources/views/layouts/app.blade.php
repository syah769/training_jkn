<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Training JKN')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div>
                    <a href="/" class="text-xl font-bold">Training JKN</a>
                </div>
                <div class="space-x-4">
                    <a href="/" class="hover:text-blue-200 transition-colors">Home</a>
                    <a href="/contact" class="hover:text-blue-200 transition-colors">Contact</a>
                    <a href="/users" class="hover:text-blue-200 transition-colors">Users</a>
                    <a href="/posts" class="hover:text-blue-200 transition-colors">Posts</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-4 py-6 text-center">
            <p>&copy; 2024 Training JKN. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
