<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pinjam Barang Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        html {
        scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }


        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }


        .hero-text {
            color: #5f687b;
            font-size: 30px;
            font-weight: 600;
        }

        .hero-text p {
            margin-bottom: 10px;
        }

        .get-started-btn {
            background-color: #1B56FD;
            color: #ffffff;
            font-weight: 600;
            border-radius: 12px;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
        }

        .hero-image img {
            max-width: 100%;
            height: auto;
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: #000;
        }

        .navbar-nav .nav-link:hover {
            color: #2F43F5;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    {{-- Main Content --}}
    <main class="py-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
