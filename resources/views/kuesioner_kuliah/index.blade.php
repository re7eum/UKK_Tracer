<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kuesioner Kuliah</title>
    <!-- Link to Bootstrap CSS for responsiveness and styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts - Using Poppins for a modern look -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Lighter background */
            font-family: 'Poppins', sans-serif; /* Use Poppins font */
            color: #343a40; /* Darker text color */
        }
        .container {
            margin-top: 40px; /* Adjusted margin top */
            margin-bottom: 40px; /* Added margin bottom */
        }
        .card {
            border: none;
            border-radius: 15px; /* More rounded corners */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Softer, larger shadow */
            overflow: hidden; /* Ensures content respects border-radius */
        }
        .card-header {
            background-color: #007bff; /* Primary blue header */
            color: white;
            font-size: 1.5rem; /* Larger header font */
            font-weight: 600;
            padding: 20px;
            border-bottom: none;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .card-body {
             padding: 30px; /* More padding inside card body */
        }
        h2 { /* Adjusted from h1 to h2 to match original structure */
            color: #007bff; /* Match header color */
            font-weight: 700;
            margin-bottom: 30px; /* More space below title */
        }
        .table-responsive {
            background: #ffffff;
            border-radius: 10px; /* Rounded corners for table container */
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); /* Subtle shadow for table */
        }
        .table {
            margin-bottom: 0; /* Remove default table margin */
        }
        .table th, .table td {
            vertical-align: middle; /* Vertically align cell content */
            padding: 12px; /* More padding in table cells */
        }
        .thead-dark th {
            background-color: #343a40; /* Dark header background */
            color: #fff; /* White text */
            border-color: #454d55; /* Darker border */
            font-weight: 600;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.03); /* Lighter stripe */
        }
        .table-bordered th, .table-bordered td {
            border-color: #dee2e6; /* Standard border color */
        }

        /* Button Styling */
        .btn {
            border-radius: 8px; /* Rounded buttons */
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.3s ease; /* Smooth transitions */
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
            transform: translateY(-2px); /* Lift effect on hover */
            box-shadow: 0 4px 8px rgba(40, 167, 69, 0.3);
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #212529; /* Dark text for warning */
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(255, 193, 7, 0.3);
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(220, 53, 69, 0.3);
        }
         .btn-primary { /* Style for the "Kirim" button */
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
        }
         .btn-secondary { /* Style for the "Kembali" button */
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(108, 117, 125, 0.3);
        }


        /* Search Form Styling */
        .search-form-container {
            margin-bottom: 20px; /* Space below search form */
            padding: 20px;
            background-color: #e9ecef; /* Light grey background */
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        .search-form-container .form-control {
            border-radius: 8px;
            border-color: #ced4da;
        }
         .search-form-container .btn-primary {
             border-radius: 8px;
         }


        /* Action Buttons Container */
        .action-buttons {
            display: flex;
            gap: 10px; /* Space between action buttons */
            flex-wrap: wrap; /* Allow buttons to wrap on small screens */
        }
        .action-buttons .btn {
            flex-grow: 1; /* Allow buttons to grow */
            min-width: 80px; /* Minimum width for buttons */
            text-align: center;
        }

        /* Pagination Styling */
        .pagination .page-link {
            border-radius: 8px;
            margin: 0 3px;
            transition: all 0.3s ease;
        }
        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }
        .pagination .page-link:hover {
             color: #0056b3;
             background-color: #e9ecef;
             border-color: #dee2e6;
        }

        /* Responsive Table */
        @media (max-width: 768px) {
            .table-responsive {
                padding: 10px;
            }
            .table th, .table td {
                padding: 8px;
                font-size: 0.9rem;
            }
            .action-buttons .btn {
                padding: 8px 10px;
                font-size: 0.9rem;
            }
            .card-header {
                font-size: 1.2rem;
                padding: 15px;
            }
             .card-body {
                 padding: 20px;
             }
             h2 { /* Adjusted from h1 to h2 */
                 font-size: 2rem;
                 margin-bottom: 20px;
             }
             .search-form-container {
                 padding: 15px;
             }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                Daftar Kuesioner Kuliah
            </div>
            <div class="card-body">
                @if (Auth::user()->role == 'admin')
                <div class="mb-3 text-start">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary"><i class="fas fa-arrow-left me-2"></i>Kembali</a>
                </div>
                @endif
                @if (Auth::user()->role == 'user')
                <div class="mb-3 text-start">
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary"><i class="fas fa-arrow-left me-2"></i>Kembali</a>
                </div>
                @endif

                @if (Auth::user()->role == 'user')
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="{{ route('kuesioner_kuliah.create') }}" class="btn btn-success"><i class="fas fa-plus-circle me-2"></i>Tambah Kuesioner</a>
                </div>
                @endif

                <div class="search-form-container">
                    <form class="d-flex" method="GET">
                        <input class="form-control me-2" type="search" name="search" placeholder="Cari Kuesioner..." aria-label="Search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Cari</button>
                    </form>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th> {{-- Changed from ID to No --}}
                                <th>Nama Lengkap</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Alasan Melanjutkan Kuliah</th>
                                <th>Faktor Pendorong</th>
                                <th>Program Studi</th>
                                <th>Harapan Setelah Kuliah</th>
                                <th>Persiapan Kuliah</th>
                                <th>Universitas Tujuan</th>
                                <th>Faktor Pemilihan Universitas</th>
                                <th>Berencana Beasiswa</th>
                                <th>Jenis Beasiswa</th>
                                <th>Rencana Pembiayaan</th>
                                <th>Tantangan Besar</th>
                                <th>Harapan Kampus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($kuesioners as $kuesioner)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kuesioner->alumni->nama_depan }} {{ $kuesioner->alumni->nama_belakang }}</td>
                                    <td>{{ $kuesioner->umur }}</td>
                                    <td>{{ $kuesioner->jenis_kelamin }}</td>
                                    <td>{{ $kuesioner->statusAlumni->status }}</td>
                                    <td>{{ $kuesioner->alasan_melanjutkan_kuliah }}</td>
                                    <td>{{ $kuesioner->apa_yang_mendorong_anda }}</td>
                                    <td>{{ $kuesioner->program_studi }}</td>
                                    <td>{{ $kuesioner->harapan_setelah_kuliah }}</td>
                                    <td>{{ $kuesioner->persiapan_melanjutkan_kuliah }}</td>
                                    <td>{{ $kuesioner->tracerKuliah->tracer_kuliah_kampus }}</td>
                                    <td>{{ $kuesioner->faktor_pemilihan_universitas }}</td>
                                    <td>{{ $kuesioner->berencana_beasiswa ? 'Ya' : 'Tidak' }}</td>
                                    <td>{{ $kuesioner->jenis_beasiswa }}</td>
                                    <td>{{ $kuesioner->rencana_pembiayaan_kuliah }}</td>
                                    <td>{{ $kuesioner->tantangan_terbesar }}</td>
                                    <td>{{ $kuesioner->harapan_kampus }}</td>
                                    <td>
                                        <div class="action-buttons">
                                            @if (Auth::user()->role == 'admin')
                                                <a href="{{ route('kuesioner_kuliah.edit', $kuesioner->id_kuesioner_kuliah) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('kuesioner_kuliah.destroy', $kuesioner->id_kuesioner_kuliah) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</button>
                                                </form>
                                            @endif
                                            @if (Auth::user()->role == 'user')
                                                <a href="{{ route('kuesioner_kuliah.show', $kuesioner->id_kuesioner_kuliah) }}"
                                                   class="btn btn-primary btn-sm"
                                                   onclick="event.preventDefault(); confirmSend('{{ route('kuesioner_kuliah.show', $kuesioner->id_kuesioner_kuliah) }}')">
                                                   <i class="fas fa-paper-plane"></i> Kirim
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="18" class="text-center">Tidak ada data ditemukan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    {{ $kuesioners->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmSend(url) {
            Swal.fire({
                title: "Berhasil!",
                text: "Selamat, Anda berhasil kirim!",
                icon: "success"
            }).then(() => {
                window.location.href = url;
            });
        }
    </script>
</body>
</html>
