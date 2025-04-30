<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Permintaan Perbaikan Data Kuesioner Kuliah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Daftar Permintaan Perbaikan Data Kuesioner Kuliah</h1>

        <!-- Tombol Kembali ke Dashboard -->
        <div class="text-center mb-4">
            <button class="btn btn-secondary" onclick="kembaliKeDashboard()">Kembali ke Dashboard</button>
        </div>

        <!-- Card untuk Daftar Permintaan -->
        <div class="col-lg-8 col-12 mx-auto">
            <div class="card">
                <div class="card-header bg-info text-white">Daftar Permintaan Perbaikan Data</div>
                <div class="card-body">
                    <ul id="daftarPermintaan" class="list-group">
                        <li class="list-group-item">Memuat data permintaan...</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Fungsi untuk memperbarui daftar permintaan
        function updatePermintaanList() {
            const permintaanList = JSON.parse(localStorage.getItem('permintaanList')) || [];
            const daftarPermintaan = document.getElementById('daftarPermintaan');
            daftarPermintaan.innerHTML = ""; // Kosongkan list sebelum menampilkan data baru

            if (permintaanList.length === 0) {
                daftarPermintaan.innerHTML = '<li class="list-group-item">Tidak ada permintaan.</li>';
            } else {
                permintaanList.forEach(permintaan => {
                    const li = document.createElement('li');
                    li.className = "list-group-item";
                    li.innerHTML = `
                        <strong>${permintaan.tanggal}</strong><br>
                        ${permintaan.deskripsi}
                        <div class="mt-2">
                            <button class="btn btn-sm btn-warning" onclick="editPermintaan(${permintaan.id})">Edit</button>
                            <button class="btn btn-sm btn-danger" onclick="hapusPermintaan(${permintaan.id})">Hapus</button>
                        </div>
                    `;
                    daftarPermintaan.appendChild(li);
                });
            }
        }

        // Fungsi untuk menghapus permintaan
        function hapusPermintaan(id) {
            let permintaanList = JSON.parse(localStorage.getItem('permintaanList')) || [];
            permintaanList = permintaanList.filter(permintaan => permintaan.id !== id);
            localStorage.setItem('permintaanList', JSON.stringify(permintaanList));
            updatePermintaanList();
            alert('Permintaan berhasil dihapus.');
        }

        // Fungsi untuk mengedit permintaan
        function editPermintaan(id) {
            let permintaanList = JSON.parse(localStorage.getItem('permintaanList')) || [];
            const permintaan = permintaanList.find(permintaan => permintaan.id === id);

            if (permintaan) {
                const newDescription = prompt("Edit deskripsi kesalahan:", permintaan.deskripsi);
                if (newDescription !== null) {
                    // Mengambil tanggal dan waktu saat edit
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

                    permintaan.deskripsi = newDescription;
                    permintaan.tanggal = formattedDate;
                    localStorage.setItem('permintaanList', JSON.stringify(permintaanList));
                    updatePermintaanList();
                    alert('Permintaan berhasil diubah.');
                }
            }
        }

        // Fungsi untuk kembali ke dashboard
        function kembaliKeDashboard() {
            // Ganti URL berikut dengan URL dashboard Anda
            window.location.href = "{{ route('admin.dashboard') }}";
        }

        // Memperbarui daftar permintaan saat halaman dimuat
        window.onload = function() {
            updatePermintaanList();
        };
    </script>
</body>
</html>
