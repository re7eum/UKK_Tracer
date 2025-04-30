<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tracer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts - Poppins for modern look -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f4f7fc; /* Light background */
            font-family: 'Poppins', sans-serif; /* Use Poppins font */
            font-size: 15px; /* Slightly increased base font size */
            color: #333;
        }

        .app-wrapper {
            display: flex;
            min-height: 100vh; /* Ensure wrapper takes full viewport height */
        }

        /* Sidebar Styling */
        .sidebar {
            background-color: #2c3e50; /* Darker blue-grey */
            color: white;
            width: 250px; /* Standard sidebar width */
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            flex-shrink: 0; /* Prevent sidebar from shrinking */
        }

        .sidebar .sidebar-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px; /* More space below header */
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1); /* Separator line */
        }

        .sidebar .sidebar-header i {
            font-size: 35px; /* Larger icon */
            margin-right: 10px;
            color: #3498db; /* Accent color */
        }

        .sidebar .sidebar-header h4 {
            color: white;
            margin: 0;
            font-weight: 600;
            font-size: 1.4rem;
        }

        .sidebar .nav-link {
            color: #bdc3c7; /* Lighter text color */
            text-decoration: none;
            font-size: 15px;
            padding: 12px 15px; /* More padding */
            margin-bottom: 8px; /* Space between links */
            border-radius: 5px; /* Slightly rounded corners */
            transition: background-color 0.3s ease, color 0.3s ease;
            display: flex; /* Use flexbox for icon and text alignment */
            align-items: center;
        }

        .sidebar .nav-link:hover {
            background-color: #34495e; /* Darker hover background */
            color: white;
        }

        .sidebar a.active {
            background-color: #3498db; /* Accent color for active link */
            color: white;
            font-weight: 600;
        }

        .sidebar .nav-link i {
            margin-right: 12px; /* More space between icon and text */
            font-size: 1.1rem;
        }

        /* Content Area Styling */
        .content {
            flex-grow: 1; /* Allows content to take up remaining space */
            padding: 30px; /* More padding */
            overflow-y: auto; /* Enable scrolling if content overflows */
        }

        /* Navbar Styling */
        .navbar {
            background-color: #ffffff; /* White navbar */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08); /* Subtle shadow */
            padding: 15px 30px; /* More padding */
            margin-bottom: 30px; /* Space below navbar */
        }

        .navbar .navbar-brand {
            font-weight: 700;
            color: #2c3e50; /* Dark color */
            font-size: 1.3rem;
        }

        .navbar .welcome-message {
            font-size: 1rem;
            font-weight: 500;
            color: #555;
            margin-right: 20px;
        }

        .navbar .logout-btn {
            background-color: #e74c3c; /* Red color */
            border: none;
            font-size: 0.9rem;
            padding: 8px 18px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navbar .logout-btn:hover {
            background-color: #c0392b; /* Darker red */
        }

        /* Main Content Section Styling */
        .main-content-section {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .sidebar {
                width: 200px; /* Slightly smaller sidebar on medium screens */
                padding: 15px;
            }
            .sidebar .sidebar-header h4 {
                font-size: 1.2rem;
            }
            .sidebar .nav-link {
                font-size: 14px;
                padding: 10px 12px;
            }
            .sidebar .nav-link i {
                 margin-right: 8px;
            }
            .content {
                padding: 20px;
            }
            .navbar {
                padding: 10px 20px;
            }
            .navbar .navbar-brand {
                font-size: 1.2rem;
            }
            .navbar .welcome-message {
                font-size: 0.9rem;
                margin-right: 10px;
            }
            .navbar .logout-btn {
                font-size: 0.8rem;
                padding: 6px 15px;
            }
             .main-content-section {
                 padding: 20px;
             }
        }

        @media (max-width: 768px) {
            .app-wrapper {
                flex-direction: column; /* Stack sidebar and content vertically */
            }
            .sidebar {
                width: 100%; /* Full width sidebar on small screens */
                height: auto; /* Auto height */
                position: relative; /* Remove fixed positioning */
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
             .sidebar .sidebar-header {
                 justify-content: flex-start; /* Align header left */
                 margin-bottom: 20px;
                 padding-bottom: 10px;
             }
            .sidebar .nav {
                flex-direction: row !important; /* Horizontal navigation */
                flex-wrap: wrap; /* Allow links to wrap */
                justify-content: center; /* Center links */
            }
            .sidebar .nav-item {
                margin: 5px; /* Space between horizontal links */
            }
            .sidebar .nav-link {
                padding: 8px 12px;
                font-size: 13px;
                margin-bottom: 0;
            }
             .sidebar .nav-link i {
                 margin-right: 5px;
             }
            .content {
                margin-left: 0; /* Remove left margin */
                width: 100%; /* Full width content */
                padding: 15px;
            }
            .navbar {
                padding: 10px 15px;
                margin-bottom: 20px;
            }
            .navbar .navbar-brand {
                font-size: 1.1rem;
            }
            .navbar .welcome-message {
                display: none; /* Hide welcome message on very small screens */
            }
            .navbar .logout-btn {
                 font-size: 0.8rem;
                 padding: 5px 12px;
            }
             .main-content-section {
                 padding: 15px;
             }
        }
    </style>
</head>
<body>
    <div class="app-wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <i class="bi bi-graph-up"></i>
                <h4>TRACER STUDY</h4>
            </div>

            <ul class="nav flex-column">
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('sekolah.index') ? 'active' : '' }}" href="{{ route('sekolah.index') }}">
                            <i class="bi bi-building"></i> Sekolah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('tahun_lulus.index') ? 'active' : '' }}" href="{{ route('tahun_lulus.index') }}">
                            <i class="bi bi-calendar"></i> Tahun Lulus
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('bidang_keahlian.index') ? 'active' : '' }}" href="{{ route('bidang_keahlian.index') }}">
                            <i class="bi bi-book"></i> Bidang Keahlian
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('program_keahlian.index') ? 'active' : '' }}" href="{{ route('program_keahlian.index') }}">
                            <i class="bi bi-wrench"></i> Program Keahlian
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('konsentrasi_keahlian.index') ? 'active' : '' }}" href="{{ route('konsentrasi_keahlian.index') }}">
                            <i class="bi bi-tools"></i> Konsentrasi Keahlian
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('status_alumni.index') ? 'active' : '' }}" href="{{ route('status_alumni.index') }}">
                            <i class="bi bi-person-check"></i> Status Alumni
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('alumni.index') ? 'active' : '' }}" href="{{ route('alumni.index') }}">
                            <i class="bi bi-person"></i> Alumni
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('tracer_kerja.index') ? 'active' : '' }}" href="{{ route('tracer_kerja.index') }}">
                            <i class="bi bi-briefcase"></i> Tracer Kerja
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('tracer_kuliah.index') ? 'active' : '' }}" href="{{ route('tracer_kuliah.index') }}">
                            <i class="bi bi-house-door"></i> Tracer Kuliah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('testimoni.index') ? 'active' : '' }}" href="{{ route('testimoni.index') }}">
                            <i class="bi bi-chat-square-text"></i> Testimoni
                        </a>
                    </li>
                    {{-- Added link back to admin dashboard --}}
                     <li class="nav-item mt-4">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="bi bi-speedometer2"></i> Dashboard Admin
                        </a>
                    </li>
                    @endif
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Tracer Study Admin</a> {{-- Updated brand text --}}
                    <div class="d-flex align-items-center"> {{-- Use flex to align items --}}
                        <span class="welcome-message">
                            Selamat datang, {{ Auth::user()->name }}!
                        </span>
                         {{-- Logout button --}}
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger logout-btn">
                                <i class="bi bi-box-arrow-right me-2"></i> Keluar
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            <!-- Main Content Section -->
            <div class="main-content-section"> {{-- New container for main content --}}
                 {{-- Welcome Message (Optional, can be removed if navbar message is enough) --}}
                {{-- <div class="welcome-message">
                    <p>Selamat datang di Halaman Tracer Study.</p>
                </div> --}}

                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
