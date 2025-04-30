<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Tracer Study</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts - Menggunakan Poppins untuk tampilan modern -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Menggunakan Poppins */
            background-color: #f0f2f5; /* Latar belakang abu-abu muda */
            color: #333; /* Warna teks default */
            line-height: 1.7; /* Meningkatkan tinggi baris */
            overflow-x: hidden; /* Mencegah scroll horizontal */
        }

        .container {
            max-width: 1100px; /* Lebar maksimum container */
            margin: 0 auto; /* Pusatkan container */
            padding: 0 15px; /* Padding horizontal */
        }

        /* Hero Section */
        .hero-section {
            background-image: url('{{ asset("images/tracerstudy.png") }}');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 180px 0; /* Padding lebih besar */
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Overlay lebih gelap */
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeInScale 1.5s ease-out; /* Animasi masuk */
        }

        @keyframes fadeInScale {
            0% { opacity: 0; transform: scale(0.95); }
            100% { opacity: 1; transform: scale(1); }
        }

        .hero-section h1 {
            font-size: 4.5rem; /* Ukuran judul lebih besar */
            font-weight: 700; /* Lebih tebal */
            margin-bottom: 25px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4); /* Bayangan teks lebih jelas */
        }

        .hero-section p {
            font-size: 1.6rem; /* Ukuran paragraf lebih besar */
            margin-bottom: 40px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            color: rgba(255, 255, 255, 0.9); /* Warna teks sedikit transparan */
        }

        .hero-section .btn {
            font-size: 1.3rem; /* Ukuran tombol lebih besar */
            padding: 15px 40px; /* Padding tombol lebih besar */
            background: linear-gradient(45deg, #007bff, #0056b3); /* Gradien biru */
            color: white;
            border-radius: 30px; /* Sudut tombol membulat */
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3); /* Bayangan tombol */
            transition: all 0.3s ease; /* Transisi halus */
            font-weight: 600;
            border: none; /* Hapus border default */
        }

        .hero-section .btn:hover {
            background: linear-gradient(45deg, #0056b3, #007bff); /* Balik gradien saat hover */
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.4); /* Bayangan lebih dalam saat hover */
            transform: translateY(-3px); /* Efek lift saat hover */
        }

        /* About Section */
        .about-section {
            padding: 100px 0; /* Padding lebih besar */
            text-align: center;
            background-color: #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); /* Bayangan lebih lembut */
            border-radius: 20px;
            margin-top: -80px; /* Mengangkat section ke atas hero */
            position: relative;
            z-index: 3; /* Pastikan di atas hero */
        }

        .about-section h2 {
            font-size: 3rem; /* Ukuran judul lebih besar */
            color: #0056b3; /* Warna biru gelap */
            margin-bottom: 30px;
            font-weight: 700;
        }

        .about-section p {
            font-size: 1.4rem; /* Ukuran paragraf lebih besar */
            color: #555;
            max-width: 900px;
            margin: 0 auto 30px auto; /* Spasi bawah paragraf */
        }

        .about-section .btn {
            font-size: 1.3rem; /* Ukuran tombol lebih besar */
            padding: 15px 40px; /* Padding tombol lebih besar */
            background: linear-gradient(45deg, #28a745, #218838); /* Gradien hijau */
            color: white;
            border-radius: 30px;
            text-decoration: none;
            margin-top: 20px;
            box-shadow: 0 8px 20px rgba(40, 167, 69, 0.3); /* Bayangan tombol */
            transition: all 0.3s ease;
            font-weight: 600;
            border: none;
        }

        .about-section .btn:hover {
            background: linear-gradient(45deg, #218838, #28a745); /* Balik gradien saat hover */
            box-shadow: 0 10px 25px rgba(40, 167, 69, 0.4); /* Bayangan lebih dalam saat hover */
            transform: translateY(-3px); /* Efek lift saat hover */
        }

        /* Card Section */
        .card-section {
            margin-top: 60px; /* Spasi atas */
            padding-bottom: 80px; /* Spasi bawah section */
        }

        .card {
            border-radius: 16px; /* Sudut lebih membulat */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Bayangan lebih jelas */
            padding: 30px; /* Padding lebih besar */
            background-color: #ffffff;
            border: none;
            transition: transform 0.4s ease, box-shadow 0.4s ease; /* Transisi lebih halus */
        }

        .card:hover {
            transform: translateY(-10px); /* Efek lift saat hover */
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15); /* Bayangan lebih dalam saat hover */
        }

        .card-header {
            font-size: 2rem; /* Ukuran font header kartu lebih besar */
            font-weight: 700;
            color: #0056b3; /* Warna biru gelap */
            padding-bottom: 20px; /* Spasi bawah header */
            border-bottom: 3px solid #007bff; /* Border bawah lebih tebal */
            margin-bottom: 20px; /* Spasi bawah header */
            background-color: transparent; /* Hapus latar belakang header default */
        }

        .card-body {
            text-align: left;
            font-size: 1.3rem; /* Ukuran font body kartu lebih besar */
            color: #555;
        }

        /* Footer */
        .footer {
            background-color: #343a40; /* Warna abu-abu gelap */
            color: #e9ecef; /* Warna teks terang */
            padding: 30px 0; /* Padding lebih besar */
            text-align: center;
            font-size: 1.1rem;
        }

        .footer a {
            color: #ffc107; /* Warna link kuning */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #e0a800; /* Warna kuning lebih gelap saat hover */
            text-decoration: underline;
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-section {
                padding: 150px 0;
            }
            .hero-section h1 {
                font-size: 3.5rem;
            }
            .hero-section p {
                font-size: 1.4rem;
            }
            .hero-section .btn, .about-section .btn {
                font-size: 1.1rem;
                padding: 12px 30px;
            }
            .about-section {
                padding: 80px 0;
                margin-top: -60px;
            }
            .about-section h2 {
                font-size: 2.5rem;
            }
            .about-section p {
                font-size: 1.2rem;
            }
            .card {
                padding: 25px;
            }
            .card-header {
                font-size: 1.8rem;
            }
            .card-body {
                font-size: 1.2rem;
            }
            .footer {
                padding: 25px 0;
                font-size: 1rem;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 120px 0;
            }
            .hero-section h1 {
                font-size: 2.8rem;
            }
            .hero-section p {
                font-size: 1.2rem;
                margin-bottom: 30px;
            }
            .hero-section .btn, .about-section .btn {
                font-size: 1rem;
                padding: 10px 25px;
            }
            .about-section {
                padding: 60px 0;
                margin-top: -40px;
            }
            .about-section h2 {
                font-size: 2rem;
            }
            .about-section p {
                font-size: 1rem;
            }
            .card {
                padding: 20px;
                margin-top: 40px;
            }
            .card-header {
                font-size: 1.5rem;
                padding-bottom: 15px;
                margin-bottom: 15px;
            }
            .card-body {
                font-size: 1rem;
            }
            .footer {
                padding: 20px 0;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <h1>Selamat Datang di Tracer Study</h1>
            <p>Bergabunglah dengan kami untuk melacak keberhasilan lulusan kami dan membantu membentuk masa depan pendidikan.</p>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Masuk ke Akun Anda</a>
        </div>
    </div>

    <!-- About Section -->
    <div class="about-section container">
        <h2>Tentang Tracer Study</h2>
        <p>Tracer Study adalah platform yang didedikasikan untuk mengumpulkan dan menganalisis umpan balik dari alumni untuk memahami jalur karir mereka setelah lulus. Ini membantu lembaga pendidikan untuk meningkatkan program mereka dan melayani mahasiswa dengan lebih baik.</p>
        <a href="{{ route('register') }}" class="btn btn-success btn-lg">Daftar sebagai Alumni</a>
    </div>

    <!-- Card Section with Description -->
    <div class="container card-section">
        <div class="card">
            <div class="card-header">
                Mengapa Bergabung dengan Tracer Study?
            </div>
            <div class="card-body">
                <p>Dengan bergabung dengan platform Tracer Study, Anda dapat membantu lembaga pendidikan untuk meningkatkan program akademik mereka dan memberikan wawasan berharga tentang kesuksesan karir alumni. Umpan balik Anda sangat penting untuk generasi mahasiswa yang akan datang.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025. ReComp</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
