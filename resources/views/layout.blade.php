<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Icons --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f6fa;
        }
        .navbar {
            background-color: #6c5ce7 !important;
        }
        .navbar-brand,
        .nav-link {
            color: #fff !important;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
        .card {
            border-radius: 16px;
        }
        .btn-primary {
            background-color: #6c5ce7;
            border: none;
        }
        .btn-primary:hover {
            background-color: #5a4fcf;
        }
        .btn-success {
            background-color: #00b894;
            border: none;
        }
        .btn-success:hover {
            background-color: #019875;
        }
        .btn-warning {
            background-color: #fdcb6e;
            border: none;
        }
        .btn-danger {
            background-color: #d63031;
            border: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="fas fa-cubes fa-lg me-2"></i> CRUD Dashboard
            </a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}"><i class="fas fa-list"></i> Categories</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-box"></i> Products</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
