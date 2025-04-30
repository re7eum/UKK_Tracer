<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Tracer Study</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3498db;
            --primary-dark: #2980b9;
            --secondary-color: #2ecc71;
            --accent-color: #f39c12;
            --dark-color: #2c3e50;
            --light-color: #ecf0f1;
            --gray-light: #f5f7fa;
            --gray-medium: #e0e0e0;
            --gray-dark: #95a5a6;
            --text-primary: #333333;
            --text-secondary: #555555;
            --text-light: #ffffff;
            --shadow-sm: 0 2px 10px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 15px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 8px 30px rgba(0, 0, 0, 0.15);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 20px;
            --transition-fast: 0.2s;
            --transition-normal: 0.3s;
            --transition-slow: 0.5s;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--gray-light), #c3cfe2);
            color: var(--text-primary);
            line-height: 1.6;
            min-height: 100vh;
        }

        .header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: var(--text-light);
            border-radius: var(--radius-md);
            margin: 20px auto;
            padding: 40px 20px;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
            transition: transform var(--transition-normal), box-shadow var(--transition-normal);
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.05);
            z-index: 1;
        }

        .header:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .header h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            z-index: 2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header p {
            font-size: 1.5rem;
            color: var(--text-light);
            position: relative;
            z-index: 2;
            opacity: 0.9;
        }

        .header a {
            color: var(--text-light);
            text-decoration: none;
            transition: all var(--transition-fast);
        }

        .header a:hover {
            color: var(--light-color);
            text-decoration: none;
        }

        .news-container {
            margin: 50px auto;
            max-width: 1200px;
            padding: 20px;
        }

        .news-item {
            background-color: var(--text-light);
            border-radius: var(--radius-md);
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: var(--shadow-md);
            transition: transform var(--transition-normal), box-shadow var(--transition-normal);
            border-left: 5px solid var(--primary-color);
            position: relative;
            overflow: hidden;
        }

        .news-item::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, transparent 50%, rgba(52, 152, 219, 0.1) 50%);
            border-radius: 0 0 0 100px;
            z-index: 1;
        }

        .news-item:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .news-item h3 {
            font-size: 26px;
            color: var(--primary-color);
            margin-bottom: 15px;
            font-weight: 600;
            border-bottom: 2px solid var(--gray-medium);
            padding-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .news-item h3 i {
            margin-right: 15px;
            color: var(--primary-color);
            font-size: 24px;
            background: rgba(52, 152, 219, 0.1);
            padding: 10px;
            border-radius: 50%;
        }

        .news-item p {
            font-size: 16px;
            line-height: 1.8;
            color: var(--text-secondary);
            margin-bottom: 15px;
        }

        .news-item strong {
            color: var(--dark-color);
            font-weight: 600;
        }

        .news-item a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all var(--transition-fast);
            display: inline-block;
            word-break: break-all;
        }

        .news-item a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .position-title {
            font-size: 20px;
            font-weight: 600;
            color: var(--dark-color);
            margin-top: 15px;
            background: rgba(52, 152, 219, 0.1);
            padding: 10px 15px;
            border-radius: var(--radius-sm);
            display: inline-block;
        }

        .position-description {
            margin: 15px 0 15px 20px;
            font-size: 15px;
            color: var(--text-secondary);
            padding: 15px;
            background-color: var(--gray-light);
            border-radius: var(--radius-sm);
            box-shadow: var(--shadow-sm);
        }

        .position-description ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .position-description li {
            margin-bottom: 10px;
            position: relative;
        }

        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadeInDown {
            animation-name: fadeInDown;
        }

        .fadeInUp {
            animation-name: fadeInUp;
        }

        .date-badge {
            display: inline-block;
            background-color: var(--gray-light);
            padding: 5px 15px;
            border-radius: 30px;
            color: var(--dark-color);
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 15px;
            border: 1px solid var(--gray-medium);
        }

        .application-link {
            margin-top: 15px;
            padding: 15px;
            background-color: var(--gray-light);
            border-radius: var(--radius-sm);
            border-left: 3px solid var(--accent-color);
        }

        .application-link p {
            margin-bottom: 5px;
        }

        .application-link a {
            font-weight: 600;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5rem;
            }
            
            .header p {
                font-size: 1.2rem;
            }
            
            .news-item {
                padding: 20px;
            }
            
            .news-item h3 {
                font-size: 22px;
            }
            
            .position-title {
                font-size: 18px;
            }
        }

        @media (max-width: 576px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .header p {
                font-size: 1rem;
            }
            
            .news-item h3 {
                font-size: 20px;
            }
            
            .news-item h3 i {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

<div class="header text-center py-5">
    @if (Auth::user()->role == 'admin')
        <h1 class="display-4 font-weight-bold animated fadeInDown">
            <a href="{{ route('admin.dashboard') }}" class="nav-link" style="color: white; text-decoration: none;">
                Lowongan Kerja Tracer Study
            </a>
        </h1>
    @endif
    @if (Auth::user()->role == 'user')
        <h1 class="display-4 font-weight-bold animated fadeInDown">
            <a href="{{ route('dashboard') }}" class="nav-link" style="color: white; text-decoration: none;">
                Lowongan Kerja Tracer Study
            </a>
        </h1>
    @endif
    <p class="lead animated fadeInUp">Informasi terbaru tentang lowongan kerja dan peluang karier untuk lulusan.</p>
</div>

<div class="container news-container">
    <!-- Berita 1 -->
    <div class="news-item">
        <h3><i class="fas fa-clipboard-list"></i> Pendaftaran Kerja di PT. Generasi baru</h3>
        <div class="date-badge">
            <i class="far fa-calendar-alt"></i> Tanggal: 31 Januari 2025
        </div>
        <p>PT. Generasi Baru membuka lowongan untuk berbagai posisi di bidang teknologi informasi. Bagi lulusan yang tertarik, silakan melakukan pendaftaran melalui situs resmi perusahaan. Pendaftaran dibuka hingga 15 Februari 2025. PT. Generasi Baru memberikan kesempatan kepada para lulusan untuk berkarier di bidang software development dan IT support.</p>
        <p><strong>Posisi yang tersedia:</strong></p>
        <div class="position-title">
            <i class="fas fa-code"></i> Software Engineer
        </div>
        <div class="position-description">
            Bertanggung jawab untuk merancang, mengembangkan, dan menguji perangkat lunak untuk berbagai aplikasi teknologi.
            <ul>
                <li>Minimal S1 di bidang Teknik Informatika</li>
                <li>Pengalaman minimal 1 tahun dalam pengembangan perangkat lunak</li>
                <li>Memiliki keterampilan dalam bahasa pemrograman seperti Java, Python, atau C++</li>
            </ul>
        </div>
        <div class="application-link">
            <p><strong>Website Pendaftaran:</strong></p>
            <a href="https://bkk.smkn1-sby.sch.id/vacancie/rpl-on-pt-generasi-baru-past-1504074044" target="_blank">https://bkk.smkn1-sby.sch.id/vacancie/rpl-on-pt-generasi-baru-past-1504074044</a>
        </div>
    </div>

    <!-- Berita 2 -->
    <div class="news-item">
        <h3><i class="fas fa-clipboard-list"></i> Lowongan Teknisi Kendaraan Ringan di PT. Auto Maju Jaya</h3>
        <div class="date-badge">
            <i class="far fa-calendar-alt"></i> Tanggal: 21 Januari 2025
        </div>
        <p>PT. Auto Maju Jaya membuka lowongan untuk posisi Teknisi Kendaraan Ringan. Pendaftaran dibuka hingga 10 Februari 2025.</p>
        <p><strong>Posisi yang tersedia:</strong></p>
        <div class="position-title">
            <i class="fas fa-car"></i> Teknisi Kendaraan Ringan
        </div>
        <div class="position-description">
            Bertanggung jawab untuk melakukan perawatan dan perbaikan kendaraan ringan.
            <ul>
                <li>Minimal SMK Jurusan Teknik Kendaraan Ringan</li>
                <li>Pengalaman minimal 1 tahun di bidang otomotif</li>
                <li>Memahami sistem kerja kendaraan ringan</li>
            </ul>
        </div>
        <div class="application-link">
            <p><strong>Website Pendaftaran:</strong></p>
            <a href="https://bkk.smkmuh3-yog.sch.id/2022/11/24/info-lowongan-pekerjaan-278-dari-indomobil-nissan/" target="_blank">https://bkk.smkmuh3-yog.sch.id/2022/11/24/info-lowongan-pekerjaan-278-dari-indomobil-nissan/</a>
        </div>
    </div>

    <!-- Berita 3 -->
    <div class="news-item">
        <h3><i class="fas fa-clipboard-list"></i> Lowongan Teknisi Pemesinan di PT. Mesin Presisi Utama</h3>
        <div class="date-badge">
            <i class="far fa-calendar-alt"></i> Tanggal: 20 Januari 2025
        </div>
        <p>PT. Mesin Presisi Utama membuka lowongan untuk posisi Teknisi Pemesinan. Pendaftaran dibuka hingga 15 Februari 2025.</p>
        <p><strong>Posisi yang tersedia:</strong></p>
        <div class="position-title">
            <i class="fas fa-cogs"></i> Teknisi Pemesinan
        </div>
        <div class="position-description">
            Bertanggung jawab untuk mengoperasikan dan memelihara mesin produksi.
            <ul>
                <li>Minimal SMK Jurusan Teknik Pemesinan</li>
                <li>Pengalaman minimal 1 tahun di bidang pemesinan</li>
                <li>Mampu membaca gambar teknik</li>
            </ul>
        </div>
        <div class="application-link">
            <p><strong>Website Pendaftaran:</strong></p>
            <a href="https://www.jakartakerja.com/lowongan/teknisi-mesin-industri-di-pt-wiriawan-ingenious-solution/" target="_blank">https://www.jakartakerja.com/lowongan/teknisi-mesin-industri-di-pt-wiriawan-ingenious-solution/</a>
        </div>
    </div>

    <!-- Berita 4 -->
    <div class="news-item">
        <h3><i class="fas fa-clipboard-list"></i> Lowongan Teknisi Listrik di PT. Listrik Cerdas Indonesia</h3>
        <div class="date-badge">
            <i class="far fa-calendar-alt"></i> Tanggal: 19 Januari 2025
        </div>
        <p>PT. Listrik Cerdas Indonesia membuka lowongan untuk posisi Teknisi Listrik. Pendaftaran dibuka hingga 5 Februari 2025.</p>
        <p><strong>Posisi yang tersedia:</strong></p>
        <div class="position-title">
            <i class="fas fa-bolt"></i> Teknisi Listrik
        </div>
        <div class="position-description">
            Bertanggung jawab untuk instalasi dan perawatan sistem listrik.
            <ul>
                <li>Minimal SMK Jurusan Teknik Listrik</li>
                <li>Pengalaman minimal 1 tahun di bidang listrik</li>
                <li>Memahami diagram listrik</li>
            </ul>
        </div>
        <div class="application-link">
            <p><strong>Website Pendaftaran:</strong></p>
            <a href="https://rsu.queenlatifa.co.id/yogyakarta/2024/01/27/lowongan-pekerjaan-teknisi-listrik-di-rumah-sakit/" target="_blank">https://rsu.queenlatifa.co.id/yogyakarta/2024/01/27/lowongan-pekerjaan-teknisi-listrik-di-rumah-sakit/</a>
        </div>
    </div>

    <!-- Berita 5 -->
    <div class="news-item">
        <h3><i class="fas fa-clipboard-list"></i> Lowongan Kerja di PT. JKL Network</h3>
        <div class="date-badge">
            <i class="far fa-calendar-alt"></i> Tanggal: 18 Januari 2025
        </div>
        <p>PT. JKL Network membuka lowongan untuk posisi Teknisi Jaringan Komputer. Pendaftaran dibuka hingga 10 Februari 2025.</p>
        <p><strong>Posisi yang tersedia:</strong></p>
        <div class="position-title">
            <i class="fas fa-network-wired"></i> Teknisi Jaringan Komputer
        </div>
        <div class="position-description">
            Bertanggung jawab untuk instalasi dan perawatan jaringan komputer.
            <ul>
                <li>Minimal SMK Jurusan Teknik Komputer dan Jaringan</li>
                <li>Pengalaman minimal 1 tahun di bidang jaringan komputer</li>
                <li>Memahami konfigurasi router, switch, dan firewall</li>
            </ul>
        </div>
        <div class="application-link">
            <p><strong>Website Pendaftaran:</strong></p>
            <a href="https://teknikkomputer.polsri.ac.id/lowongan-kerja-network-engineer-pt-graha-karya-informasi/" target="_blank">https://teknikkomputer.polsri.ac.id/lowongan-kerja-network-engineer-pt-graha-karya-informasi/</a>
        </div>
    </div>

    <!-- Berita 6 -->
    <div class="news-item">
        <h3><i class="fas fa-clipboard-list"></i> Lowongan Desainer Grafis di PT. Kreatif Media</h3>
        <div class="date-badge">
            <i class="far fa-calendar-alt"></i> Tanggal: 18 Januari 2025
        </div>
        <p>PT. Kreatif Media membuka lowongan untuk posisi Desainer Grafis. Pendaftaran dibuka hingga 10 Februari 2025.</p>
        <p><strong>Posisi yang tersedia:</strong></p>
        <div class="position-title">
            <i class="fas fa-paint-brush"></i> Desainer Grafis
        </div>
        <div class="position-description">
            Bertanggung jawab untuk membuat desain visual untuk berbagai media.
            <ul>
                <li>Minimal SMK Jurusan Desain Komunikasi Visual</li>
                <li>Pengalaman minimal 1 tahun di bidang desain grafis</li>
                <li>Menguasai Adobe Photoshop, Illustrator, atau CorelDraw</li>
            </ul>
        </div>
        <div class="application-link">
            <p><strong>Website Pendaftaran:</strong></p>
            <a href="https://www.lokerjogja.id/lowongan/desainer-grafis-editor-video-motion-graphic-di-pt-moremedia-kreasi-indonesia/" target="_blank">https://www.lokerjogja.id/lowongan/desainer-grafis-editor-video-motion-graphic-di-pt-moremedia-kreasi-indonesia/</a>
        </div>
    </div>

    <!-- Berita 7 -->
    <div class="news-item">
        <h3><i class="fas fa-clipboard-list"></i> Lowongan Teknisi Elektronika di PT. Elektronik Nusantara</h3>
        <div class="date-badge">
            <i class="far fa-calendar-alt"></i> Tanggal: 17 Januari 2025
        </div>
        <p>PT. Elektronik Nusantara membuka lowongan untuk posisi Teknisi Elektronika. Pendaftaran dibuka hingga 7 Februari 2025.</p>
        <p><strong>Posisi yang tersedia:</strong></p>
        <div class="position-title">
            <i class="fas fa-microchip"></i> Teknisi Elektronika
        </div>
        <div class="position-description">
            Bertanggung jawab untuk perbaikan dan perawatan perangkat elektronik.
            <ul>
                <li>Minimal SMK Jurusan Teknik Elektronika</li>
                <li>Pengalaman minimal 1 tahun di bidang elektronika</li>
                <li>Memahami komponen elektronik</li>
            </ul>
        </div>
        <div class="application-link">
            <p><strong>Website Pendaftaran:</strong></p>
            <a href="https://warta21.com/lowongan-kerja-teknisi-elektronika-surabaya/" target="_blank">https://warta21.com/lowongan-kerja-teknisi-elektronika-surabaya/</a>
        </div>
    </div>
    
    <!-- Berita 8 -->
    <div class="news-item">
        <h3><i class="fas fa-clipboard-list"></i> Lowongan Admin Kantor di PT. Sukses Administrasi</h3>
        <div class="date-badge">
            <i class="far fa-calendar-alt"></i> Tanggal: 16 Januari 2025
        </div>
        <p>PT. Sukses Administrasi membuka lowongan untuk posisi Admin Kantor. Pendaftaran dibuka hingga 6 Februari 2025.</p>
        <p><strong>Posisi yang tersedia:</strong></p>
        <div class="position-title">
            <i class="fas fa-user-tie"></i> Admin Kantor
        </div>
        <div class="position-description">
            Bertanggung jawab untuk pengelolaan administrasi kantor.
            <ul>
                <li>Minimal SMK/D3 Jurusan Administrasi Perkantoran</li>
                <li>Pengalaman minimal 1 tahun di bidang administrasi</li>
                <li>Menguasai MS Office</li>
            </ul>
        </div>
        <div class="application-link">
            <p><strong>Website Pendaftaran:</strong></p>
            <a href="https://www.jobstreet.co.id/id/job/admin-staff-4103013" target="_blank">https://www.jobstreet.co.id/id/job/admin-staff-4103013</a>
        </div>
    </div>

    <!-- Berita 9 -->
    <div class="news-item">
        <h3><i class="fas fa-clipboard-list"></i> Lowongan Teknisi AC di PT. Dingin Sejahtera</h3>
        <div class="date-badge">
            <i class="far fa-calendar-alt"></i> Tanggal: 15 Januari 2025
        </div>
        <p>PT. Dingin Sejahtera membuka lowongan untuk posisi Teknisi AC. Pendaftaran dibuka hingga 5 Februari 2025.</p>
        <p><strong>Posisi yang tersedia:</strong></p>
        <div class="position-title">
            <i class="fas fa-snowflake"></i> Teknisi AC
        </div>
        <div class="position-description">
            Bertanggung jawab untuk instalasi dan perawatan AC.
            <ul>
                <li>Minimal SMK Jurusan Teknik Pendingin</li>
                <li>Pengalaman minimal 1 tahun di bidang AC</li>
                <li>Memahami sistem kerja AC</li>
            </ul>
        </div>
        <div class="application-link">
            <p><strong>Website Pendaftaran:</strong></p>
            <a href="https://www.jobstreet.co.id/id/job/teknisi-ac-4245678" target="_blank">https://www.jobstreet.co.id/id/job/teknisi-ac-4245678</a>
        </div>
    </div>

    <!-- Berita 10 -->
    <div class="news-item">
        <h3><i class="fas fa-clipboard-list"></i> Lowongan Staff Accounting di PT. Akuntansi Prima</h3>
        <div class="date-badge">
            <i class="far fa-calendar-alt"></i> Tanggal: 14 Januari 2025
        </div>
        <p>PT. Akuntansi Prima membuka lowongan untuk posisi Staff Accounting. Pendaftaran dibuka hingga 4 Februari 2025.</p>
        <p><strong>Posisi yang tersedia:</strong></p>
        <div class="position-title">
            <i class="fas fa-calculator"></i> Staff Accounting
        </div>
        <div class="position-description">
            Bertanggung jawab untuk pengelolaan keuangan perusahaan.
            <ul>
                <li>Minimal D3/S1 Jurusan Akuntansi</li>
                <li>Pengalaman minimal 1 tahun di bidang akuntansi</li>
                <li>Memahami standar akuntansi</li>
            </ul>
        </div>
        <div class="application-link">
            <p><strong>Website Pendaftaran:</strong></p>
            <a href="https://www.jobstreet.co.id/id/job/staff-accounting-4567890" target="_blank">https://www.jobstreet.co.id/id/job/staff-accounting-4567890</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Add animation to news items when they come into view
    $(document).ready(function(){
        // Checking if element is in viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }
        
        // Add animation class when elements come into view
        function animateOnScroll() {
            $('.news-item').each(function(){
                if (isInViewport(this) && !$(this).hasClass('animated')) {
                    $(this).addClass('animated fadeInUp');
                }
            });
        }
        
        // Initial check and scroll listener
        animateOnScroll();
        $(window).on('scroll resize', animateOnScroll);
    });
</script>

</body>
</html>
