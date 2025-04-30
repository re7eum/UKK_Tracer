<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permintaan Perbaikan Data Kuesioner Kuliah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Permintaan Perbaikan Data Kuesioner Kuliah</h1>
        
        <!-- Tombol Kembali ke Dashboard -->
        <div class="text-center mb-4">
            <button class="btn btn-secondary" onclick="kembaliKeDashboard()">Kembali ke Dashboard</button>
        </div>

        <!-- Card untuk Permintaan Perbaikan Data Kuesioner Kerja -->
        <div class="col-lg-6 col-12 mb-3 mx-auto">
            <div class="card">
                <div class="card-header bg-primary text-white">Permintaan Perbaikan Data Kuesioner Kuliah</div>
                <div class="card-body">
                    <p class="card-text">
                        Jika terdapat kesalahan pengisian data pada kuesioner kuliah, silakan ajukan permintaan perbaikan data.
                    </p>
                    
                    <!-- Form untuk mengisi detail kesalahan -->
                    <div class="form-group mb-3">
                        <label for="errorDescription">Deskripsi Kesalahan:</label>
                        <textarea class="form-control" id="errorDescription" rows="3" placeholder="Jelaskan kesalahan yang terjadi..."></textarea>
                    </div>

                    <!-- Tombol untuk mengajukan permintaan -->
                    <button class="btn btn-primary w-100 mb-3" onclick="submitRequest()">Ajukan Permintaan</button>

                    <!-- Tombol untuk Ambil Data Kuesioner Kerja -->
                    <button class="btn btn-success w-100" onclick="ambilDataKuesioner()">Ambil Data Kuesioner Kuliah</button>
                </div>
            </div>
        </div>

        <!-- Card untuk menampilkan data kuesioner kerja -->
        <div class="col-lg-8 col-12 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">Data Kuesioner Kuliah</div>
                <div class="card-body">
                    <ul id="dataKuesioner" class="list-group">
                        <li class="list-group-item">Klik tombol "Ambil Data Kuesioner Kuliah" untuk melihat data.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card untuk Permintaan Perbaikan Berhasil -->
        <div class="col-lg-6 col-12 mb-3 mx-auto mt-4" id="perbaikanBerhasil" style="display: none;">
            <div class="card">
                <div class="card-header bg-success text-white">Permintaan Diterima</div>
                <div class="card-body">
                    <p class="card-text">
                        Terima kasih telah mengajukan permintaan perbaikan data. Kami akan segera menindaklanjuti permintaan Anda.
                    </p>

                    <!-- Menampilkan deskripsi kesalahan yang dikirim -->
                    <p><strong>Deskripsi Kesalahan:</strong> <span id="errorDescriptionDisplay"></span></p>

                    <a href="#" class="btn btn-primary w-100" onclick="goBack()">Kembali ke Halaman Utama</a>
                </div>
            </div>
        </div>

        <!-- Card untuk Daftar Permintaan -->
        <div class="col-lg-8 col-12 mx-auto mt-4">
            <div class="card">
                <div class="card-header bg-info text-white">Daftar Permintaan Perbaikan Data</div>
                <div class="card-body">
                    <ul id="daftarPermintaan" class="list-group">
                        <li class="list-group-item">Tidak ada permintaan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Data Kuesioner Kerja (Simulasi data dari server)
        const dataKuesionerKerja = [
            { id: 1, pertanyaan: "Nama Lengkap" },
            { id: 2, pertanyaan: "Umur" },
            { id: 3, pertanyaan: "Jenis Kelamin" },
            { id: 4, pertanyaan: "Pendidikan Terakhir" },
            { id: 5, pertanyaan: "Alasan Melanjutkan Kuliah" },
            { id: 6, pertanyaan: "Faktor Pendorong" },
            { id: 7, pertanyaan: "Program Studi" },
            { id: 8, pertanyaan: "Harapan Setelah Kuliah" },
            { id: 9, pertanyaan: "Persiapan Melanjutkan Kuliah" },
            { id: 10, pertanyaan: "Universitas Tujuan" },
            { id: 11, pertanyaan: "Faktor Pemilihan Universitas" },
            { id: 12, pertanyaan: "Berencana Beasiswa" },
            { id: 13, pertanyaan: "Jenis Beasiswa" },
            { id: 14, pertanyaan: "Rencana Pembiayaan Kuliah" },
            { id: 15, pertanyaan: "Tantangan Terbesar" },
            { id: 16, pertanyaan: "Harapan Kampus" }
        ];

        // Fungsi untuk mengajukan permintaan perbaikan data kuesioner kerja
        function submitRequest() {
            const errorDescription = document.getElementById('errorDescription').value;

            // Validasi input
            if (!errorDescription) {
                alert('Silakan isi deskripsi kesalahan.');
                return;
            }

            // Ambil data permintaan dari localStorage
            let permintaanList = JSON.parse(localStorage.getItem('permintaanList')) || [];

            // Simpan permintaan baru
            const permintaan = {
                id: permintaanList.length + 1,
                deskripsi: errorDescription,
                tanggal: new Date().toLocaleString()
            };

            permintaanList.push(permintaan);

            // Simpan kembali data permintaan ke localStorage
            localStorage.setItem('permintaanList', JSON.stringify(permintaanList));

            // Tampilkan konfirmasi permintaan
            alert(`Permintaan perbaikan data untuk kuesioner kuliah berhasil dikirim.\nDeskripsi: ${errorDescription}`);

            // Reset form
            document.getElementById('errorDescription').value = '';

            // Tampilkan halaman konfirmasi
            document.getElementById('perbaikanBerhasil').style.display = 'block';
            document.getElementById('errorDescriptionDisplay').textContent = errorDescription;

            // Sembunyikan form permintaan perbaikan
            document.querySelector('.col-lg-6').style.display = 'none';
            document.querySelector('.col-lg-8').style.display = 'none';

            // Update daftar permintaan
            updatePermintaanList();
        }

        // Fungsi untuk mengambil data kuesioner kuliah
        function ambilDataKuesioner() {
            const dataList = document.getElementById('dataKuesioner');
            dataList.innerHTML = ""; // Kosongkan list sebelum menampilkan data baru

            // Tampilkan data dalam daftar
            dataKuesionerKerja.forEach(item => {
                const li = document.createElement('li');
                li.className = "list-group-item";
                li.textContent = item.pertanyaan;
                li.onclick = function() {
                    document.getElementById('errorDescription').value = item.pertanyaan;
                };
                dataList.appendChild(li);
            });

            alert('Data kuesioner kuliah berhasil diambil.');
        }

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
                    permintaan.deskripsi = newDescription;
                    localStorage.setItem('permintaanList', JSON.stringify(permintaanList));
                    updatePermintaanList();
                    alert('Permintaan berhasil diubah.');
                }
            }
        }

        // Fungsi untuk kembali ke halaman utama
        function goBack() {
            location.reload(); // Reload halaman untuk kembali ke tampilan awal
        }

        // Fungsi untuk kembali ke dashboard
        function kembaliKeDashboard() {
            // Ganti URL berikut dengan URL dashboard Anda
            window.location.href = "{{ route('dashboard') }}";
        }

        // Memperbarui daftar permintaan saat halaman dimuat
        window.onload = function() {
            updatePermintaanList();
        };
    </script>
</body>
</html>
