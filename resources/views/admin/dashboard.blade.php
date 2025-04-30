<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- AdminLTE CSS -->
    <link href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css" rel="stylesheet">
    <!-- Font Awesome untuk Ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts - Menggunakan Poppins untuk tampilan modern -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- CSS Kustom (dari dashboard alumni) -->
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Menggunakan Poppins */
            background-color: #f4f6f9; /* Latar belakang AdminLTE default */
            color: #333; /* Warna teks default */
        }

        .wrapper {
            background-color: #f4f6f9; /* Pastikan wrapper juga memiliki latar belakang yang sama */
        }

        /* Navbar Styling */
        .main-header.navbar {
            background: linear-gradient(135deg, #007bff, #0056b3); /* Gradien biru profesional */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Bayangan lebih jelas */
            color: white;
        }

        .main-header .navbar-brand {
            font-weight: 700; /* Lebih tebal */
            color: white !important;
            font-size: 1.5rem; /* Ukuran lebih besar */
            padding: 0.5rem 1rem;
        }

        .main-header .nav-link {
             color: rgba(255, 255, 255, 0.8) !important; /* Warna link sedikit transparan */
             transition: color 0.3s ease;
        }

        .main-header .nav-link:hover {
             color: white !important; /* Warna putih solid saat hover */
        }


        /* Sidebar Styling */
        .main-sidebar {
            background: #2d3748; /* Warna gelap solid */
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.15); /* Bayangan lebih jelas */
            color: #e2e8f0; /* Warna teks terang */
        }

        .brand-link {
            border-bottom: 1px solid rgba(255, 255, 255, 0.08); /* Border lebih halus */
            color: #e2e8f0 !important;
            font-weight: 600;
            font-size: 1.25rem;
            padding: 1rem 0.5rem;
        }

        .brand-image {
            filter: grayscale(50%); /* Sedikit efek grayscale pada logo */
            transition: filter 0.3s ease;
        }

        .brand-link:hover .brand-image {
             filter: grayscale(0%); /* Warna penuh saat hover */
        }

        .sidebar .nav-link {
            color: #c0ccda !important; /* Warna link sidebar */
            transition: background 0.3s ease, color 0.3s ease;
            padding: 12px 15px; /* Padding lebih nyaman */
            margin-bottom: 5px; /* Sedikit spasi antar item */
            border-radius: 5px; /* Sudut sedikit membulat */
        }

        .sidebar .nav-link p {
            white-space: normal; /* Izinkan teks wrap */
        }

        .sidebar .nav-link i {
            color: #63b3ed; /* Warna ikon */
            font-size: 1.1rem;
        }

        .sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.05) !important; /* Latar belakang transparan saat hover */
            color: #ffffff !important; /* Warna teks putih saat hover */
        }

        .sidebar .nav-item.menu-open > .nav-link {
             background-color: rgba(255, 255, 255, 0.08) !important; /* Latar belakang saat menu terbuka */
             color: #ffffff !important;\n
        }

        .sidebar .nav-treeview > .nav-item > .nav-link {
            color: #a0aec0 !important; /* Warna link submenu */
            padding-left: 30px !important; /* Indent submenu */
            transition: color 0.3s ease;
        }

        .sidebar .nav-treeview > .nav-item > .nav-link i {
             color: #a0aec0 !important; /* Warna ikon submenu */
             font-size: 0.9rem;
        }

        .sidebar .nav-treeview > .nav-item > .nav-link:hover {
            color: #ffffff !important; /* Warna teks putih saat hover submenu */
        }

        .sidebar .nav-treeview > .nav-item > .nav-link.active {
             color: #ffffff !important; /* Warna teks aktif submenu */
             font-weight: 600;
        }


        /* Content Styling */
        .content-wrapper {
            background-color: #f4f6f9; /* Latar belakang konten */
            padding: 20px; /* Padding default */
        }

        .content-header {
            padding: 20px 10px;
        }

        .container-fluid {
            padding: 0 10px;
        }

        /* Welcome Message Styling (Adjusted for Admin) */
        .welcome-message {
            font-size: 2.5rem; /* Ukuran lebih besar */
            font-weight: 700;
            color: #0056b3; /* Warna biru gelap */
            margin-bottom: 30px; /* Lebih banyak spasi bawah */
            text-align: center;
            animation: fadeInScale 1.5s ease-out; /* Animasi masuk */
        }

        @keyframes fadeInScale {
            0% { opacity: 0; transform: scale(0.9); }\n
            100% { opacity: 1; transform: scale(1); }\n
        }

        #welcome-message { /* Keeping this ID for potential JS */
             font-size: 2rem; /* Ukuran sedikit lebih kecil dari judul utama */
             color: #495057; /* Warna teks abu-abu gelap */
             margin-top: 10px;
             margin-bottom: 40px; /* Lebih banyak spasi bawah */
             text-align: center;
             animation: fadeIn 1s ease-out 0.5s both; /* Animasi fade in dengan delay */
        }

        @keyframes fadeIn {
            0% { opacity: 0; }\n
            100% { opacity: 1; }\n
        }


        /* Card Styling */
        .card {
            border-radius: 12px; /* Sudut lebih membulat */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08); /* Bayangan lebih lembut */
            transition: transform 0.4s ease, box-shadow 0.4s ease; /* Transisi lebih halus */
            overflow: hidden; /* Pastikan konten tidak keluar dari sudut membulat */
            border: none; /* Hapus border default */
        }

        .card:hover {
            transform: translateY(-8px); /* Efek lift saat hover */
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12); /* Bayangan lebih dalam saat hover */
        }

        .card-header {
            background: linear-gradient(135deg, #007bff, #0056b3); /* Gradien biru */
            color: white;
            font-size: 1.2rem; /* Ukuran font header kartu */
            font-weight: 600;
            border-radius: 12px 12px 0 0; /* Sudut atas membulat */
            padding: 15px 20px; /* Padding header */
            border-bottom: none; /* Hapus border bawah header */
        }

        .card-body {
            padding: 20px; /* Padding body kartu */
        }

        .card-text {
            color: #555; /* Warna teks body kartu */
            margin-bottom: 20px; /* Spasi bawah teks */
            line-height: 1.6;
        }

        /* Button Styling */
        .btn-primary {
            background: linear-gradient(45deg, #007bff, #0056b3); /* Gradien biru */
            border: none;
            border-radius: 8px; /* Sudut tombol membulat */
            padding: 10px 20px; /* Padding tombol */
            font-size: 1rem;\n
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3); /* Bayangan tombol */
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #0056b3, #007bff); /* Balik gradien saat hover */
            box-shadow: 0 6px 12px rgba(0, 123, 255, 0.4); /* Bayangan lebih dalam saat hover */
            transform: translateY(-2px); /* Efek lift saat hover */
        }

         .btn-danger {
            background: linear-gradient(45deg, #dc3545, #c82333); /* Gradien merah */
            border: none;
            border-radius: 8px; /* Sudut tombol membulat */
            padding: 10px 20px; /* Padding tombol */
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(220, 53, 69, 0.3); /* Bayangan tombol */
        }

        .btn-danger:hover {
            background: linear-gradient(45deg, #c82333, #dc3545); /* Balik gradien saat hover */
            box-shadow: 0 6px 12px rgba(220, 53, 69, 0.4); /* Bayangan lebih dalam saat hover */
            transform: translateY(-2px); /* Efek lift saat hover */
        }

        .btn-secondary { /* Added secondary button style from alumni */
             background: linear-gradient(45deg, #6c757d, #5a6268); /* Gradien abu-abu */
             border: none;
             border-radius: 8px;
             padding: 10px 20px;
             font-size: 1rem;
             font-weight: 600;
             transition: all 0.3s ease;
             box-shadow: 0 4px 8px rgba(108, 117, 125, 0.3);
        }

        .btn-secondary:hover {
             background: linear-gradient(45deg, #5a6268, #6c757d);
             box-shadow: 0 6px 12px rgba(108, 117, 125, 0.4);
             transform: translateY(-2px);
        }


        /* Footer Styling */
        .main-footer {
            background-color: #343a40; /* Warna abu-abu gelap */
            color: #e9ecef; /* Warna teks terang */
            padding: 20px;
            font-size: 0.9rem;
            text-align: center;
            border-top: none; /* Hapus border atas default */
        }

        .main-footer a {
            color: #ffc107; /* Warna link kuning */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .main-footer a:hover {
            color: #e0a800; /* Warna kuning lebih gelap saat hover */
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .main-header .navbar-brand {\n
                font-size: 1.3rem;\n
            }\n
            .brand-link {\n
                font-size: 1.1rem;\n
            }\n
            .welcome-message {\n
                font-size: 2rem;\n
            }\n
            #welcome-message {\n
                font-size: 1.5rem;\n
            }\n
            .card-header {\n
                font-size: 1.1rem;\n
            }\n
            .card-body {\n
                padding: 15px;\n
            }\n
            .btn-primary, .btn-danger, .btn-secondary {\n
                padding: 8px 15px;\n
                font-size: 0.9rem;\n
            }\n
        }\n

        @media (max-width: 768px) {
            .main-header.navbar {\n
                padding: 0.5rem 1rem;\n
            }\n
            .main-header .navbar-brand {\n
                font-size: 1.2rem;\n
            }\n
            .welcome-message {\n
                font-size: 1.8rem;\n
            }\n
            #welcome-message {\n
                font-size: 1.3rem;\n
            }\n
            .card {\n
                margin-bottom: 20px;\n
            }\n
            .card-header {\n
                font-size: 1rem;\n
            }\n
            .card-body {\n
                padding: 15px;\n
            }\n
            .btn-primary, .btn-danger, .btn-secondary {\n
                width: 100%; /* Tombol full width di layar kecil */\n
                margin-bottom: 10px;\n
            }\n
             .btn-primary:last-child, .btn-danger:last-child, .btn-secondary:last-child {\n
                 margin-bottom: 0;\n
             }\n
            .main-footer {\n
                padding: 15px;\n
                font-size: 0.8rem;\n
            }\n
        }\n
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                {{-- Removed the "Dashboard Admin" link here to match alumni navbar simplicity --}}
            </ul>
             <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Dashboard Admin</a> {{-- Added brand link to match alumni --}}
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ asset('images/admin.png') }}" alt="Admin Logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">Admin Tracer</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                {{-- Add user panel here if needed --}}

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link active"> {{-- Added 'active' class for current page --}}
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Pengguna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kuesioner_kuliah.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>Lihat Kuesioner Kuliah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kuesioner_kerja.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>Lihat Kuesioner Kerja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('statistik') }}" class="nav-link">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>Lihat Statistik</p>
                            </a>
                        </li>
                         {{-- Added the "Kembali ke Admin" style link from alumni, adjusted text --}}
                         <li class="nav-item mt-3">
                            <a href="{{ route('dashboard') }}" class="nav-link btn btn-secondary text-white">
                                <i class="nav-icon fas fa-arrow-left"></i>
                                <p>Kembali ke Alumni</p>
                            </a>
                        </li>
                        <li class="nav-item mt-auto"> {{-- Use mt-auto to push to bottom if needed, or just keep it last --}}
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-block">
                                    <i class="fas fa-sign-out-alt nav-icon"></i> {{-- Added logout icon --}}
                                    Keluar
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    {{-- Using the welcome message structure from alumni --}}
                    <h1 class="welcome-message">Selamat Datang di Halaman Admin</h1>
                    {{-- Assuming you have Auth::user()->name available in admin dashboard --}}
                    {{-- <p id="welcome-message">Selamat Datang, {{ Auth::user()->name }}!</p> --}}
                    {{-- Or a static message if name is not needed --}}
                    <p id="welcome-message">Kelola data tracer study dengan mudah.</p>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    {{-- Removed the redundant h1 "Selamat datang di Halaman Admin" --}}

                    <!-- Dashboard Widgets -->
                    <div class="row">
                        <div class="col-lg-4 col-12 mb-4"> {{-- Added mb-4 for consistent spacing --}}
                            <div class="card">
                                <div class="card-header">Permintaan Kuesioner Kuliah</div>
                                <div class="card-body">
                                    <p class="card-text">Permintaan pengguna data kuesioner kerja yang salah</p>
                                    <a href="{{ route('page_after_submission') }}" class="btn btn-primary btn-block">Lihat Data</a> {{-- Added btn-block --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4"> {{-- Added mb-4 for consistent spacing --}}
                            <div class="card">
                                <div class="card-header">Permintaan Kuesioner Kerja</div>
                                <div class="card-body">
                                    <p class="card-text">Permintaan pengguna data kuesioner kuliah yang salah</p>
                                    <a href="{{ route('page_after_submmission') }}" class="btn btn-primary btn-block">Lihat Data</a> {{-- Added btn-block --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4"> {{-- Added mb-4 for consistent spacing --}}
                            <div class="card">
                                <div class="card-header">Halaman Menu</div>
                                <div class="card-body">
                                    <p class="card-text">Data Tracer Study dari Alumni Sekolah yang Ada dan Berbakat</p>
                                    <a href="{{ route('app') }}" class="btn btn-primary btn-block">Lihat Data</a> {{-- Added btn-block --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <p class="mb-0">&copy; 2025 Dashboard Admin. Hak Cipta Dilindungi.</p> {{-- Kept admin text --}}
        </footer>
        <!-- /.main-footer -->
    </div>
    <!-- ./wrapper -->

    <!-- AdminLTE JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    {{-- Added the JS for welcome message fade out --}}
     <script>
        setTimeout(function() {
            const welcomeMsgElement = document.getElementById('welcome-message');
            if (welcomeMsgElement) {
                 welcomeMsgElement.style.display = 'none';
            }
        }, 5000); // Menghilangkan setelah 5 detik
    </script>
</body>
</html>
