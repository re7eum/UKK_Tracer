<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Informasi lengkap tentang Tracer Study, manfaatnya bagi pendidikan, alumni, dan masyarakat, serta dampaknya dalam meningkatkan kualitas institusi.">
    <title>Tracer Study - Meningkatkan Kualitas Pendidikan</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            line-height: 1.8;
            background-color: #eef1f7;
            color: #333;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        h1, h2, p {
            margin: 0;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        /* Header Section */
        .header {
            background: linear-gradient(135deg, #0066cc, #00509e);
            color: white;
            text-align: center;
            padding: 4rem 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 0.8rem;
        }

        .header p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Main Content Section */
        .content {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }

        section {
            background: white;
            margin: 1.5rem 0;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        section h2 {
            font-size: 2rem;
            color: #00509e;
            margin-bottom: 1rem;
        }

        section p {
            text-align: justify;
            margin-bottom: 1.5rem;
        }

        ul li {
            margin-bottom: 0.8rem;
            padding-left: 1.2rem;
            position: relative;
        }

        ul li::before {
            content: "✔";
            position: absolute;
            left: 0;
            color: #0066cc;
            font-size: 1.2rem;
        }

        /* Footer Section */
        .footer {
            background: #00509e;
            color: white;
            text-align: center;
            padding: 2rem 1rem;
            margin-top: 3rem;
        }

        .footer p {
            font-size: 0.9rem;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5rem;
            }

            .header p {
                font-size: 1.2rem;
            }

            section h2 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
    @if (Auth::user()->role == 'admin')
    <a href="{{ route('admin.dashboard') }}" class="nav-link">
        <h1>Tracer Study</h1>
    </a>
    @endif
    @if (Auth::user()->role == 'user')
    <a href="{{ route('dashboard') }}" class="nav-link">
        <h1>Tracer Study</h1>
    </a>
    @endif
        <p>Mengungkap Jejak Kesuksesan Alumni untuk Meningkatkan Mutu Pendidikan dan Daya Saing Global</p>
    </header>

    <!-- Main Content -->
    <main class="content">
        <!-- Definisi Tracer Study -->
        <section>
            <h2>Apa Itu Tracer Study?</h2>
            <p>
                Tracer Study adalah sebuah penelitian yang bertujuan untuk melacak keberadaan dan perjalanan karier alumni setelah mereka menyelesaikan pendidikan di sebuah institusi. 
                Penelitian ini digunakan untuk mengumpulkan data tentang pengalaman alumni di dunia kerja, pendidikan lanjutan, dan kontribusi mereka dalam masyarakat. 
                Institusi pendidikan sering menggunakan Tracer Study untuk mengevaluasi sejauh mana kualitas pendidikan mereka relevan dengan kebutuhan dunia kerja.
            </p>
            <p>
                Proses ini tidak hanya membantu institusi meningkatkan kurikulum dan layanan pendidikan, tetapi juga membangun hubungan yang lebih erat dengan para alumni, 
                sehingga menciptakan jaringan yang mendukung perkembangan karier mereka. Dengan data yang akurat dan terpercaya, Tracer Study menjadi alat yang sangat penting 
                dalam menentukan strategi pengembangan pendidikan jangka panjang.
            </p>
        </section>

        <!-- Manfaat Tracer Study -->
        <section>
            <h2>Manfaat Utama Tracer Study</h2>
            <p>
                Berikut adalah beberapa manfaat penting dari Tracer Study, baik bagi institusi pendidikan maupun para alumninya:
            </p>
            <ul>
                <li><strong>Evaluasi Kurikulum:</strong> Memberikan masukan untuk memperbaiki dan menyesuaikan kurikulum agar lebih relevan dengan kebutuhan pasar kerja.</li>
                <li><strong>Peningkatan Reputasi Institusi:</strong> Data dari alumni yang sukses dapat meningkatkan citra positif institusi.</li>
                <li><strong>Pengembangan Layanan Karier:</strong> Membantu institusi menyediakan pelatihan atau program yang mendukung alumni di dunia kerja.</li>
                <li><strong>Penyesuaian Kebijakan Pendidikan:</strong> Menjadi dasar pengambilan keputusan strategis dalam pendidikan.</li>
                <li><strong>Hubungan yang Lebih Erat:</strong> Memperkuat koneksi antara institusi dan alumni melalui program dukungan atau komunitas.</li>
                <li><strong>Persiapan Akreditasi:</strong> Data Tracer Study sering menjadi komponen penting dalam proses akreditasi institusi pendidikan.</li>
            </ul>
        </section>

        <!-- Kesimpulan -->
        <section>
            <h2>Kesimpulan</h2>
            <p>
                Tracer Study merupakan salah satu metode paling efektif untuk mengevaluasi hasil pendidikan dan dampaknya pada kehidupan alumni. Data yang dihasilkan 
                dari Tracer Study tidak hanya berguna bagi institusi pendidikan dalam memperbaiki kualitas layanan mereka, tetapi juga membantu alumni dan masyarakat 
                dalam menciptakan lingkungan pendidikan yang lebih baik. Partisipasi aktif alumni adalah kunci keberhasilan Tracer Study, sehingga manfaatnya dapat 
                dirasakan secara luas oleh semua pihak yang terlibat.
            </p>
            <p>
                Dengan melibatkan alumni dan memanfaatkan data Tracer Study secara efektif, institusi pendidikan dapat terus berinovasi dan mempersiapkan lulusan yang 
                mampu bersaing di era globalisasi.
            </p>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <p>&copy; 2025 Farel As | Email: tracerstudy@SEKOLAH.ac.id | Telp: 0857-9124-9812</p>
    </footer>
</body>
</html>
