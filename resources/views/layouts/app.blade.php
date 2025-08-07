<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Training JKN')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light min-vh-100">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Training JKN</a>
            <div class="navbar-nav ms-auto">
                <a href="/" class="nav-link">Home</a>
                <a href="/contact" class="nav-link">Contact</a>
                <a href="/users" class="nav-link">Users</a>
                <a href="/posts" class="nav-link">Posts</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container py-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-auto">
        <div class="container py-4 text-center">
            <p class="mb-0">&copy; 2024 Training JKN. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
