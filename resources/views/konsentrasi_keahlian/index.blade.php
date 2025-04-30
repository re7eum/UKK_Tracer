@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Kotak putih untuk konten -->
    <div class="bg-white p-5 rounded shadow-lg">
        <h1 class="text-center mb-4 text-2xl font-semibold text-gray-800">Data Konsentrasi Keahlian</h1>

        <!-- Tombol kembali ke halaman dashboard -->
        <div class="mb-3 text-start">
            <a href="{{ route('app') }}" class="btn btn-secondary ">Kembali</a>
        </div>
        <!-- Tombol tambah konsentrasi keahlian -->
        <div class="mb-3 text-start">
            <a href="{{ route('konsentrasi_keahlian.create') }}" class="btn btn-primary">Tambah Konsentrasi Keahlian</a>
        </div>
        
        <!-- Menampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel data konsentrasi keahlian -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Kode Konsentrasi Keahlian</th>
                        <th>Konsentrasi Keahlian</th>
                        <th>Program Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($konsentrasiKeahlian as $konsentrasi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $konsentrasi->kode_konsentrasi_keahlian }}</td>
                            <td>{{ $konsentrasi->konsentrasi_keahlian }}</td>
                            <td>{{ $konsentrasi->programKeahlian->program_keahlian }}</td>
                            <td>
                                <!-- Tombol edit dan hapus yang dirapikan -->
                                <div class="d-flex gap-2">
                                    <a href="{{ route('konsentrasi_keahlian.edit', $konsentrasi) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('konsentrasi_keahlian.destroy', $konsentrasi) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


{{-- Add custom styles here or in your main layout file --}}
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
    h1 { /* Adjusted from h1 to match card-header */
        color: #007bff; /* Match header color */
        font-weight: 700;
        margin-bottom: 30px; /* More space below title */
    }
    /* Removed .table-responsive styling as the wrapper is removed */
    /* .table-responsive {
        background: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    } */
    .table {
        margin-bottom: 0; /* Remove default table margin */
        width: 100%; /* Ensure table takes full width */
        table-layout: auto; /* Allow browser to determine column widths */
    }
    .table th, .table td {
        vertical-align: middle; /* Vertically align cell content */
        padding: 8px; /* Reduced padding in table cells */
        word-break: break-word; /* Allow long words to break and wrap */
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
     .btn-primary { /* Style for the "Cari" button */
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
        gap: 5px; /* Reduced space between action buttons */
        flex-wrap: wrap; /* Allow buttons to wrap on small screens */
        justify-content: center; /* Center buttons if they wrap */
    }
    .action-buttons .btn {
        flex-grow: 1; /* Allow buttons to grow */
        min-width: unset; /* Remove minimum width */
        padding: 5px 10px; /* Reduced button padding */
        font-size: 0.8rem; /* Reduced button font size */
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
        /* Removed .table-responsive padding */
        /* .table-responsive {
            padding: 10px;
        } */
        .table th, .table td {
            padding: 6px; /* Further reduced padding on small screens */
            font-size: 0.8rem; /* Further reduced font size */
        }
        .action-buttons .btn {
            padding: 6px 8px; /* Further reduced button padding */
            font-size: 0.8rem; /* Consistent button font size */
        }
        .card-header {
            font-size: 1.2rem;
            padding: 15px;
        }
         .card-body {
             padding: 20px;
         }
         h1 { /* Adjusted from h1 */
             font-size: 2rem;
             margin-bottom: 20px;
         }
         .search-form-container {
             padding: 15px;
         }
    }
</style>
@endsection