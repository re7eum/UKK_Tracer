@extends('layouts.app') {{-- Assuming this layout provides the basic structure (navbar, sidebar, etc.) --}}

@section('content')
<div class="container mt-5">
    {{-- Wrapped content in a card for better visual structure --}}
    <div class="card">
        <div class="card-header text-center">
            Daftar Data Tahun Lulus
        </div>
        <div class="card-body">
            {{-- Back Button --}}
            <div class="mb-3 text-start">
                <a href="{{ route('app') }}" class="btn btn-secondary"><i class="fas fa-arrow-left me-2"></i>Kembali</a>
            </div>

            {{-- Add Tahun Lulus Button --}}
            <div class="d-flex justify-content-between align-items-center mb-3">
                 <a href="{{ route('tahun_lulus.create') }}" class="btn btn-success"><i class="fas fa-plus-circle me-2"></i>Tambah Tahun Lulus</a>
            </div>

            {{-- Search Form --}}
            <div class="search-form-container mb-3">
                <form class="d-flex" method="GET">
                    <input class="form-control me-2" type="search" name="search" placeholder="Cari Tahun Lulus..." aria-label="Search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Cari</button>
                </form>
            </div>


            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Tabel Data Tahun Lulus --}}
            {{-- Removed .table-responsive wrapper to prevent horizontal scrolling --}}
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th> {{-- Changed from ID to No --}}
                        <th>Tahun Lulus</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tahunLulus as $tahun)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tahun->tahun_lulus }}</td>
                            <td>{{ $tahun->keterangan }}</td>
                            <td>
                                <div class="action-buttons"> {{-- Container for action buttons --}}
                                    <a href="{{ route('tahun_lulus.edit', $tahun) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                    <form action="{{ route('tahun_lulus.destroy', $tahun) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Data tahun lulus tidak tersedia.</td> {{-- Adjusted colspan --}}
                        </tr>
                    @endforelse
                </tbody>
            </table>
             {{-- Add pagination if you have it --}}
             {{-- <div class="d-flex justify-content-center mt-4">
                 {{ $tahunLulus->links() }}
             </div> --}}
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
