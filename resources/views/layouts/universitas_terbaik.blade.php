<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Tracer Study - Universitas Terbaik di Jawa Timur</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"> <!-- Using Poppins font -->
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Modern font */
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ece9e6, #ffffff); /* Subtle gradient background */
            color: #333; /* Darker text */
            line-height: 1.7; /* Improved line height */
            overflow-x: hidden; /* Prevent horizontal scroll */
        }
        .container {
            width: 90%;
            max-width: 1100px; /* Wider container */
            margin: 40px auto; /* More margin */
            background: #ffffff;
            padding: 50px; /* Increased padding */
            border-radius: 20px; /* More rounded corners */
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1); /* Deeper shadow */
            animation: slideInUp 1s ease-out; /* Container entry animation */
        }
        @keyframes slideInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        header {
            background: linear-gradient(135deg, #ff6b6b, #f06595); /* Vibrant gradient */
            color: #ffffff;
            padding: 70px 0; /* More padding */
            text-align: center;
            position: relative;
            overflow: hidden;
            margin-bottom: 50px; /* More space below header */
            border-radius: 20px 20px 0 0; /* Match container border radius */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* Shadow for header */
        }
        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2); /* Darker overlay */
            z-index: 1;
        }
        .header-content {
            position: relative;
            z-index: 2;
        }
        header h1 {
            font-size: 48px; /* Larger heading */
            font-weight: 700;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 4px; /* Increased letter spacing */
            animation: textPop 1s ease-out; /* Text animation */
            text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.4); /* More pronounced shadow */
        }
         header h1 a {
             text-decoration: none;
             color: inherit;
         }
        header .subtitle {
            font-size: 24px; /* Larger subtitle */
            margin-top: 20px;
            color: #ffebee; /* Lighter subtitle color */
            animation: textFadeIn 1s ease-out 0.5s both; /* Delayed animation */
        }
        @keyframes textPop {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
         @keyframes textFadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        h2, h3 {
            color: #ff6b6b; /* Match header primary color */
            margin-bottom: 25px; /* More space below headings */
            font-weight: 600;
        }
        h2 {
            font-size: 32px; /* Larger h2 */
            margin-top: 50px; /* More space above h2 */
            border-bottom: 3px solid #f06595; /* Match header secondary */
            padding-bottom: 15px;
        }
        h3 {
            font-size: 28px; /* Larger h3 */
            margin-top: 35px;
            color: #f06595; /* Match header secondary */
        }
        p {
            color: #555; /* Slightly darker text color */
            margin-bottom: 25px; /* More space below paragraphs */
        }
        .university {
            margin: 35px 0; /* More margin */
            padding: 35px; /* More padding */
            background: #ffffff; /* White background */
            border: 1px solid #eee; /* Subtle border */
            border-radius: 12px; /* More rounded corners */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); /* Subtle initial shadow */
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        .university:hover {
            transform: translateY(-12px); /* More pronounced hover effect */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15); /* Deeper shadow on hover */
        }
        .university h3 {
            margin-top: 0;
            margin-bottom: 15px; /* More space below university titles */
            color: #ff6b6b; /* Match header primary for titles */
        }
        .university p {
            margin-bottom: 20px; /* More space below university descriptions */
        }
        .university a {
            display: inline-block;
            margin-top: 15px;
            margin-right: 25px; /* More space between links */
            padding: 14px 30px; /* More padding */
            background: linear-gradient(45deg, #ff6b6b, #f06595); /* Gradient button */
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px; /* More rounded buttons */
            transition: all 0.3s ease;
            font-size: 17px;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Button shadow */
        }
        .university a:hover {
            background: linear-gradient(45deg, #f06595, #ff6b6b); /* Reverse gradient on hover */
            transform: translateY(-3px); /* Slight lift on hover */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
        }
        footer {
            text-align: center;
            padding: 40px; /* More padding */
            background: #333; /* Dark footer */
            color: #eee; /* Light text */
            margin-top: 60px; /* More top margin */
            font-size: 18px;
            border-radius: 0 0 20px 20px; /* Match container border radius */
        }
        .highlight {
            color: #f06595; /* Match header secondary */
            font-weight: bold;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 25px;
                margin: 25px auto;
            }
            header {
                padding: 50px 0;
                margin-bottom: 30px;
            }
            header h1 {
                font-size: 36px;
                letter-spacing: 2px;
            }
            header .subtitle {
                font-size: 20px;
            }
            h2 {
                font-size: 26px;
                margin-top: 35px;
                padding-bottom: 10px;
            }
            h3 {
                font-size: 22px;
                margin-top: 25px;
            }
            .university {
                margin: 25px 0;
                padding: 25px;
            }
            .university a {
                display: block; /* Stack links on small screens */
                margin-right: 0;
                margin-bottom: 10px; /* Space between stacked links */
                text-align: center;
                padding: 12px 25px; /* Adjust button padding */
            }
             .university a:last-child {
                 margin-bottom: 0;
             }
            footer {
                padding: 30px;
                margin-top: 40px;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="header-content">
        <h1><a href="{{ route('dashboard') }}">Universitas Terbaik di Jawa Timur</a></h1>
        <p class="subtitle">Berita Tracer Study - Informasi Lengkap Seputar Pendidikan Tinggi</p>
    </div>
</header>

<div class="container">
    <h2>Apa itu Tracer Study?</h2>
    <p>
        <span class="highlight">Tracer Study</span> adalah survei yang dilakukan oleh perguruan tinggi untuk mengetahui perjalanan karir para lulusannya.
        Survei ini memberikan informasi penting mengenai relevansi pendidikan dengan dunia kerja.
    </p>

    <h2>Daftar Universitas Terbaik di Jawa Timur</h2>

    <h3>Universitas Negeri Terbaik</h3>

    <div class="university">
        <h3>Institut Teknologi Sepuluh Nopember (ITS) – Surabaya</h3>
        <p>ITS adalah salah satu perguruan tinggi negeri terbaik di Indonesia yang fokus pada pendidikan teknologi dan rekayasa. ITS dikenal dengan kualitas pendidikan teknik dan riset yang inovatif.</p>
        <a href="https://www.its.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.its.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Airlangga (UNAIR) – Surabaya</h3>
        <p>UNAIR adalah salah satu universitas negeri terkemuka di Indonesia yang memiliki program studi di berbagai bidang, termasuk kesehatan, ekonomi, hukum, dan ilmu sosial.</p>
        <a href="https://www.unair.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.unair.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Brawijaya (UB) – Malang</h3>
        <p>UB adalah universitas negeri yang terkenal dengan program pendidikan yang mencakup berbagai disiplin ilmu, serta dikenal dengan suasana akademik yang mendukung perkembangan mahasiswa.</p>
        <a href="https://www.ub.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.ub.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Negeri Malang (UM) – Malang</h3>
        <p>UM adalah universitas negeri di Malang yang memiliki fokus pada pendidikan, pelatihan guru, serta ilmu sosial dan pendidikan lainnya. Universitas ini berperan besar dalam mencetak tenaga pendidik yang berkualitas.</p>
        <a href="https://www.um.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.um.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Jember (UNEJ) – Jember</h3>
        <p>UNEJ adalah universitas negeri yang memiliki keunggulan dalam bidang pertanian, teknologi, serta program studi lainnya. UNEJ juga terkenal dengan riset-riset terkait pembangunan daerah.</p>
        <a href="https://www.unej.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.unej.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Trunojoyo Madura (UTM) – Bangkalan</h3>
        <p>UTM merupakan universitas negeri yang terletak di Madura, yang menawarkan berbagai program studi unggulan dan berkomitmen untuk mengembangkan daerah serta mencetak lulusan siap kerja.</p>
        <a href="https://www.trunojoyo.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.trunojoyo.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Islam Negeri Sunan Ampel (UINSA) – Surabaya</h3>
        <p>UIN Sunan Ampel Surabaya adalah universitas yang menggabungkan pendidikan agama Islam dengan ilmu pengetahuan dan teknologi, menawarkan program-program studi yang relevan dengan perkembangan zaman.</p>
        <a href="https://www.uinsa.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.uinsa.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Islam Negeri Maulana Malik Ibrahim (UIN Malang) – Malang</h3>
        <p>UIN Malang merupakan universitas Islam negeri yang mengintegrasikan nilai-nilai agama dengan ilmu pengetahuan, menawarkan pendidikan berkualitas di bidang agama dan ilmu sosial.</p>
        <a href="https://www.uin-malang.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.uin-malang.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Politeknik Elektronika Negeri Surabaya (PENS) – Surabaya</h3>
        <p>PENS adalah politeknik yang fokus pada pendidikan di bidang teknologi informasi dan elektronik, dengan program studi yang relevan dengan kebutuhan industri saat ini.</p>
        <a href="https://www.pens.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.pens.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Politeknik Negeri Malang (Polinema) – Malang</h3>
        <p>Polinema adalah politeknik negeri yang menyediakan pendidikan vokasi di bidang teknik dan ekonomi, memiliki komitmen tinggi untuk mencetak lulusan yang siap terjun ke dunia kerja.</p>
        <a href="https://www.polinema.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.polinema.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <h3>Universitas Swasta Terbaik</h3>

    <div class="university">
        <h3>Universitas Surabaya (UBAYA) – Surabaya</h3>
        <p>UBAYA merupakan universitas swasta yang memiliki berbagai program unggulan di bidang ekonomi, teknik, kesehatan, dan ilmu sosial. UBAYA dikenal dengan kualitas pendidikannya yang berstandar tinggi.</p>
        <a href="https://www.ubaya.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.ubaya.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Muhammadiyah Malang (UMM) – Malang</h3>
        <p>UMM adalah universitas swasta dengan kualitas pendidikan yang terus berkembang, memiliki berbagai program studi yang mencakup bidang kesehatan, hukum, teknik, dan lain-lain.</p>
        <a href="https://www.umm.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.umm.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Katolik Widya Mandala (UKWMS) – Surabaya</h3>
        <p>UKWMS adalah universitas swasta yang menawarkan berbagai program pendidikan berkualitas, dengan fokus pada pengembangan nilai-nilai keagamaan dan sosial.</p>
        <a href="https://www.ukwm.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.ukwm.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Kristen Petra (UKP) – Surabaya</h3>
        <p>UKP adalah universitas Kristen yang menawarkan pendidikan yang berkualitas di berbagai bidang studi, dengan tujuan untuk menghasilkan lulusan yang berintegritas dan kompeten.</p>
        <a href="https://www.ukp.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.ukp.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Ciputra (UC) – Surabaya</h3>
        <p>UC adalah universitas yang fokus pada pendidikan kewirausahaan, desain, dan bisnis, berkomitmen untuk menghasilkan pemimpin dan inovator masa depan.</p>
        <a href="https://www.uc.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.uc.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Narotama (UNNAR) – Surabaya</h3>
        <p>UNNAR adalah universitas swasta yang memiliki berbagai program studi yang relevan dengan perkembangan dunia industri, termasuk teknik, ekonomi, dan ilmu sosial.</p>
        <a href="https://www.unnar.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.unnar.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Merdeka Malang (UNMER) – Malang</h3>
        <p>UNMER adalah universitas swasta yang berfokus pada pengembangan ilmu pengetahuan dan teknologi, dengan komitmen untuk menghasilkan lulusan yang berkualitas dan siap bekerja.</p>
        <a href="https://www.unmer.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.unmer.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas PGRI Adi Buana (UNIPA) – Surabaya</h3>
        <p>UNIPA Surabaya adalah universitas yang berfokus pada pengembangan pendidikan, dengan berbagai program studi yang relevan dengan perkembangan dunia kerja.</p>
        <a href="https://www.unipa.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.unipa.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Muhammadiyah Sidoarjo (UMSIDA) – Sidoarjo</h3>
        <p>UMSIDA Sidoarjo memiliki berbagai program pendidikan yang berkualitas, serta komitmen untuk mencetak lulusan yang siap bersaing di pasar kerja global.</p>
        <a href="https://www.umsida.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.umsida.ac.id" target="_blank">Pendaftaran</a>
    </div>

    <div class="university">
        <h3>Universitas Muhammadiyah Jember (UMJ) – Jember</h3>
        <p>UMJ Jember memiliki visi untuk menjadi universitas unggul yang berfokus pada pendidikan dan pengembangan keterampilan mahasiswa untuk dunia profesional.</p>
        <a href="https://www.umj.ac.id" target="_blank">Website Resmi</a>
        <a href="https://pendaftaran.umj.ac.id" target="_blank">Pendaftaran</a>
    </div>
</div>

<footer>
    © 2025 Universitas Jawa Timur
</footer>

</body>
</html>
