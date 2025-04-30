<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Tracer Study</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts - Poppins for modern look -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom CSS for Remake -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5; /* Light grey background */
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .statistik-wrapper {
            padding: 30px 20px; /* Padding around the main content */
            max-width: 1200px; /* Max width for content */
            margin: 0 auto; /* Center the wrapper */
        }

        .page-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: #1a3a5a; /* Dark blue */
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .page-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: #007bff; /* Primary blue underline */
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .back-button-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .back-button-container .btn {
            border-radius: 30px; /* Pill shape */
            padding: 10px 30px;
            font-weight: 600;
            background-color: #6c757d; /* Secondary color */
            border-color: #6c757d;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .back-button-container .btn:hover {
            background-color: #5a6268;
            border-color: #545b62;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Responsive grid */
            gap: 25px; /* Space between grid items */
            margin-bottom: 40px;
        }

        .stat-card {
            background-color: #ffffff;
            border-radius: 15px; /* More rounded corners */
            padding: 25px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* Softer, larger shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e0e0e0; /* Subtle border */
        }

        .stat-card:hover {
            transform: translateY(-8px); /* Lift effect */
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.18);
        }

        .stat-card .icon {
            font-size: 2.5rem;
            color: #007bff; /* Primary color for icons */
            margin-bottom: 15px;
        }

        .stat-card .count {
            font-size: 2.2rem;
            font-weight: 700;
            color: #1a3a5a; /* Dark blue for counts */
            margin-bottom: 5px;
        }

        .stat-card .label {
            font-size: 1rem;
            color: #555;
            font-weight: 400;
        }

        .chart-section {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .chart-section h4 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #1a3a5a;
            margin-bottom: 25px;
            text-align: center;
        }

        /* Adjust chart container within the section */
        .chart-container-remake { /* Unique class for this layout */
             position: relative;
             height: 400px; /* Fixed height for the chart area */
             width: 100%;
        }


        @media (max-width: 768px) {
            .statistik-wrapper {
                padding: 20px 15px;
            }
            .page-title {
                font-size: 2rem;
                margin-bottom: 30px;
            }
            .page-title::after {
                width: 60px;
            }
            .back-button-container {
                margin-bottom: 20px;
            }
            .back-button-container .btn {
                padding: 8px 20px;
                font-size: 0.9rem;
            }
            .stats-grid {
                gap: 15px;
            }
            .stat-card {
                padding: 20px;
            }
            .stat-card .icon {
                font-size: 2rem;
                margin-bottom: 10px;
            }
            .stat-card .count {
                font-size: 1.8rem;
            }
            .stat-card .label {
                font-size: 0.9rem;
            }
            .chart-section {
                padding: 20px;
            }
            .chart-section h4 {
                font-size: 1.5rem;
                margin-bottom: 20px;
            }
             .chart-container-remake {
                 height: 300px; /* Adjust height for smaller screens */
             }
        }
    </style>
</head>
<body>
    <div class="statistik-wrapper">
        <h1 class="page-title">Statistik Data Tracer Study</h1>

        <div class="back-button-container">
            @if (Auth::user()->role == 'admin')
                <a href="{{ route('admin.dashboard') }}" class="btn">
                    <i class="fas fa-arrow-left me-2"></i> Kembali ke Dashboard Admin
                </a>
            @endif
            @if (Auth::user()->role == 'user')
                <a href="/dashboard" class="btn">
                    <i class="fas fa-arrow-left me-2"></i> Kembali ke Dashboard Alumni
                </a>
            @endif
        </div>

        {{-- Statistics Cards Grid --}}
        <div class="stats-grid">
            <div class="stat-card">
                <div class="icon"><i class="fas fa-school"></i></div>
                <div class="count">{{ $sekolahCount ?? 0 }}</div>
                <div class="label">Sekolah</div>
            </div>
            <div class="stat-card">
                <div class="icon"><i class="fas fa-calendar-alt"></i></div>
                <div class="count">{{ $tahunLulusCount ?? 0 }}</div>
                <div class="label">Tahun Lulus</div>
            </div>
             <div class="stat-card">
                <div class="icon"><i class="fas fa-cogs"></i></div>
                <div class="count">{{ $bidangKeahlianCount ?? 0 }}</div>
                <div class="label">Bidang Keahlian</div>
            </div>
            <div class="stat-card">
                <div class="icon"><i class="fas fa-briefcase"></i></div>
                <div class="count">{{ $programKeahlianCount ?? 0 }}</div>
                <div class="label">Program Keahlian</div>
            </div>
             <div class="stat-card">
                <div class="icon"><i class="fas fa-user-graduate"></i></div>
                <div class="count">{{ $konsentrasiKeahlianCount ?? 0 }}</div>
                <div class="label">Konsentrasi Keahlian</div>
            </div>
             <div class="stat-card">
                <div class="icon"><i class="fas fa-users"></i></div>
                <div class="count">{{ $statusAlumniCount ?? 0 }}</div>
                <div class="label">Status Alumni</div>
            </div>
            <div class="stat-card">
                <div class="icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="count">{{ $alumniCount ?? 0 }}</div>
                <div class="label">Alumni</div>
            </div>
            <div class="stat-card">
                <div class="icon"><i class="fas fa-briefcase"></i></div>
                <div class="count">{{ $tracerKerjaCount ?? 0 }}</div>
                <div class="label">Tracer Kerja</div>
            </div>
            <div class="stat-card">
                <div class="icon"><i class="fas fa-university"></i></div>
                <div class="count">{{ $tracerKuliahCount ?? 0 }}</div>
                <div class="label">Tracer Kuliah</div>
            </div>
            <div class="stat-card">
                <div class="icon"><i class="fas fa-comment-dots"></i></div>
                <div class="count">{{ $testimoniCount ?? 0 }}</div>
                <div class="label">Testimoni</div>
            </div>
        </div>

        {{-- Chart Section --}}
        <div class="chart-section">
            <h4 class="text-center">Visualisasi Data Statistik</h4>
            <div class="chart-container-remake">
                 <canvas id="myBarChart"></canvas>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS & jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('myBarChart').getContext('2d');

            const data = {
                labels: [
                    'Sekolah',
                    'Tahun Lulus',
                    'Bidang Keahlian',
                    'Program Keahlian',
                    'Konsentrasi Keahlian',
                    'Status Alumni',
                    'Alumni',
                    'Tracer Kerja',
                    'Tracer Kuliah',
                    'Testimoni'
                ],
                datasets: [{
                    label: 'Jumlah Data',
                    data: [
                        {{ $sekolahCount ?? 0 }},
                        {{ $tahunLulusCount ?? 0 }},
                        {{ $bidangKeahlianCount ?? 0 }},
                        {{ $programKeahlianCount ?? 0 }},
                        {{ $konsentrasiKeahlianCount ?? 0 }},
                        {{ $statusAlumniCount ?? 0 }},
                        {{ $alumniCount ?? 0 }},
                        {{ $tracerKerjaCount ?? 0 }},
                        {{ $tracerKuliahCount ?? 0 }},
                        {{ $testimoniCount ?? 0 }}
                    ],
                    backgroundColor: [
                        'rgba(0, 123, 255, 0.8)',  // Primary
                        'rgba(40, 167, 69, 0.8)',   // Success
                        'rgba(255, 193, 7, 0.8)',   // Warning
                        'rgba(23, 162, 184, 0.8)',  // Info
                        'rgba(108, 117, 125, 0.8)', // Secondary
                        'rgba(220, 53, 69, 0.8)',   // Danger
                        'rgba(52, 58, 64, 0.8)',    // Dark
                        'rgba(0, 123, 255, 0.8)',  // Primary (reused)
                        'rgba(40, 167, 69, 0.8)',   // Success (reused)
                        'rgba(255, 193, 7, 0.8)'    // Warning (reused)
                    ],
                    borderColor: [
                         'rgba(0, 123, 255, 1)',
                         'rgba(40, 167, 69, 1)',
                         'rgba(255, 193, 7, 1)',
                         'rgba(23, 162, 184, 1)',
                         'rgba(108, 117, 125, 1)',
                         'rgba(220, 53, 69, 1)',
                         'rgba(52, 58, 64, 1)',
                         'rgba(0, 123, 255, 1)',
                         'rgba(40, 167, 69, 1)',
                         'rgba(255, 193, 7, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        },
                         x: {
                            categoryPercentage: 0.8,
                            barPercentage: 0.9
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: false,
                            text: 'Statistik Data Tracer Study'
                        }
                    }
                },
            };

            const myBarChart = new Chart(ctx, config);
        });
    </script>
</body>
</html>
