<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Additional CSS or meta tags -->
</head>
<body>
    <header>
        <!-- Include your site's header here -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('roles') }}">Roles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('permissions') }}">Permissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('users') }}">Users</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main class="py-4">
        {{ $slot }}
    </main>
    
    <footer class="text-center mt-4">
        <!-- Include your site's footer here -->
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
    </footer>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Additional JavaScript -->
</body>
</html>
