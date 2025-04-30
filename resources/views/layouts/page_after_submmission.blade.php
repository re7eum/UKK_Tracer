<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Permintaan Perbaikan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
        }
        .card-header {
            font-size: 1.25rem;
            font-weight: bold;
            text-align: center;
            background-color:rgba(46, 158, 250, 0.78);
            color: #212529;
        }
        .list-group-item {
            font-size: 1rem;
            padding: 15px;
            border-radius: 8px;
        }
        .list-group-item .btn-group {
            display: inline-flex;
            gap: 10px;
        }
        .list-group-item:hover {
            background-color: #f1f1f1;
            transition: 0.3s;
        }
        .btn-sm {
            font-size: 0.875rem;
        }
        .btn-warning {
            background-color: #ffbb33;
            border-color: #ffbb33;
        }
        .btn-warning:hover {
            background-color: #e6a700;
            border-color: #e6a700;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4 mb-4">Daftar Permintaan Perbaikan Data Kuesioner Kerja</h1>

        <!-- Tombol Kembali ke Halaman Sebelumnya -->
        <div class="text-center mb-4">
            <button class="btn btn-secondary" onclick="kembaliKeHalamanSebelumnya()">Kembali ke Halaman Sebelumnya</button>
        </div>

        <!-- Card untuk menampilkan daftar permintaan perbaikan -->
        <div class="col-lg-8 col-md-10 col-12 mx-auto">
            <div class="card shadow-lg">
                <div class="card-header">Permintaan Perbaikan yang Diajukan</div>
                <div class="card-body">
                    <ul id="daftarPermintaan" class="list-group">
                        <li class="list-group-item text-center">Belum ada permintaan perbaikan yang diajukan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Fungsi untuk menampilkan daftar permintaan perbaikan
        function tampilkanPermintaan() {
            const daftarPermintaan = document.getElementById('daftarPermintaan');
            daftarPermintaan.innerHTML = ''; // Kosongkan list sebelum menampilkan data baru

            const errorList = JSON.parse(localStorage.getItem('errorDescriptions')) || [];

            if (errorList.length === 0) {
                daftarPermintaan.innerHTML = '<li class="list-group-item text-center">Belum ada permintaan perbaikan yang diajukan.</li>';
            } else {
                errorList.forEach((item, index) => {
                    const li = document.createElement('li');
                    li.className = "list-group-item d-flex justify-content-between align-items-center";
                    li.textContent = `${item.date} - ${item.description}`;
                    
                    // Tombol Edit dan Hapus
                    const buttonGroup = document.createElement('div');
                    buttonGroup.className = 'btn-group';

                    const editButton = document.createElement('button');
                    editButton.className = "btn btn-warning btn-sm";
                    editButton.textContent = "Edit";
                    editButton.onclick = function() {
                        editPermintaan(index, item);
                    };

                    const deleteButton = document.createElement('button');
                    deleteButton.className = "btn btn-danger btn-sm";
                    deleteButton.textContent = "Hapus";
                    deleteButton.onclick = function() {
                        hapusPermintaan(index);
                    };

                    buttonGroup.appendChild(editButton);
                    buttonGroup.appendChild(deleteButton);
                    li.appendChild(buttonGroup);
                    daftarPermintaan.appendChild(li);
                });
            }
        }

        // Fungsi untuk mengedit permintaan
        function editPermintaan(index, oldItem) {
            const newError = prompt("Edit deskripsi kesalahan:", oldItem.description);
            if (newError !== null && newError.trim()) {
                // Ambil tanggal, bulan, dan tahun saat edit
                const now = new Date();
                const formattedDate = now.toLocaleString('id-ID', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: 'numeric',
                    minute: 'numeric',
                    second: 'numeric'
                });

                const errorList = JSON.parse(localStorage.getItem('errorDescriptions')) || [];
                errorList[index] = { description: newError.trim(), date: formattedDate };
                localStorage.setItem('errorDescriptions', JSON.stringify(errorList));
                tampilkanPermintaan(); // Menampilkan data yang sudah diubah
            }
        }

        // Fungsi untuk menghapus permintaan
        function hapusPermintaan(index) {
            const errorList = JSON.parse(localStorage.getItem('errorDescriptions')) || [];
            errorList.splice(index, 1); // Hapus data dari array
            localStorage.setItem('errorDescriptions', JSON.stringify(errorList));
            tampilkanPermintaan(); // Menampilkan data setelah dihapus
        }

        // Fungsi untuk kembali ke halaman sebelumnya
        function kembaliKeHalamanSebelumnya() {
            window.history.back(); // Kembali ke halaman sebelumnya
        }

        // Menampilkan permintaan saat halaman pertama kali dimuat
        window.onload = tampilkanPermintaan;
    </script>
</body>
</html>
