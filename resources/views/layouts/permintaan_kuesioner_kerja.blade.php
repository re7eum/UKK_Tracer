<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permintaan Perbaikan Data Kuesioner Kerja</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Permintaan Perbaikan Data Kuesioner Kerja</h1>

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
                        Jika terdapat kesalahan pengisian data pada kuesioner kerja, silakan ajukan permintaan perbaikan data.
                    </p>

                    <!-- Form untuk mengisi detail kesalahan -->
                    <div class="form-group mb-3">
                        <label for="errorDescription">Deskripsi Kesalahan:</label>
                        <textarea class="form-control" id="errorDescription" rows="3" placeholder="Jelaskan kesalahan yang terjadi..."></textarea>
                    </div>

                    <!-- Tombol untuk mengajukan permintaan -->
                    <button class="btn btn-primary w-100 mb-3" onclick="submitRequest()">Ajukan Permintaan</button>

                    <!-- Tombol untuk Ambil Data Kuesioner Kerja -->
                    <button class="btn btn-success w-100" onclick="ambilDataKuesioner()">Ambil Data Kuesioner Kerja</button>
                </div>
            </div>
        </div>

        <!-- Card untuk menampilkan data kuesioner kerja -->
        <div class="col-lg-8 col-12 mx-auto">
            <div class="card" id="dataKuesionerCard">
                <div class="card-header bg-success text-white">Data Kuesioner Kerja</div>
                <div class="card-body">
                    <ul id="dataKuesioner" class="list-group">
                        <li class="list-group-item">Klik tombol "Ambil Data Kuesioner Kerja" untuk melihat data.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card untuk menampilkan daftar permintaan perbaikan -->
        <div class="col-lg-8 col-12 mx-auto mt-3">
            <div class="card">
                <div class="card-header bg-warning text-dark">Permintaan Perbaikan yang Diajukan</div>
                <div class="card-body">
                    <ul id="daftarPermintaan" class="list-group">
                        <li class="list-group-item">Belum ada permintaan perbaikan yang diajukan.</li>
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
            { id: 4, pertanyaan: "Status Alumni" },
            { id: 5, pertanyaan: "Bidang Keahlian" },
            { id: 6, pertanyaan: "Konsentrasi Keahlian" },
            { id: 7, pertanyaan: "Motivasi Melanjutkan Pekerjaan" },
            { id: 8, pertanyaan: "Bidang Karir" },
            { id: 9, pertanyaan: "Sektor Pekerjaan" },
            { id: 10, pertanyaan: "Pengalaman Kerja" },
            { id: 11, pertanyaan: "Keterampilan Digunakan" },
            { id: 12, pertanyaan: "Rencana 5 Tahun" },
            { id: 13, pertanyaan: "Minat Kerja Luar Negeri" },
            { id: 14, pertanyaan: "Faktor Pemilihan Pekerjaan" },
            { id: 15, pertanyaan: "Pendapat Jaringan Profesional" },
            { id: 16, pertanyaan: "Jenis Pekerjaan" },
            { id: 17, pertanyaan: "Preferensi Kerja" },
            { id: 18, pertanyaan: "Kesiapan Mental Fisik" },
            { id: 19, pertanyaan: "Harapan Pekerjaan" },
            { id: 20, pertanyaan: "Gaji yang Diharapkan" },
            { id: 21, pertanyaan: "Tingkat Kepuasan Terhadap Pekerjaan" }
        ]; 

        // Fungsi untuk mengajukan permintaan perbaikan data kuesioner kerja
        function submitRequest() {
            const errorDescription = document.getElementById('errorDescription').value;

            // Validasi input
            if (!errorDescription.trim()) {
                alert('Silakan isi deskripsi kesalahan.');
                return;
            }

            // Ambil tanggal, bulan, dan tahun
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

            // Ambil data lama dari localStorage
            let errorList = JSON.parse(localStorage.getItem('errorDescriptions')) || [];

            // Tambahkan deskripsi baru dengan tanggal ke dalam array
            errorList.push({ description: errorDescription, date: formattedDate });

            // Simpan kembali ke localStorage
            localStorage.setItem('errorDescriptions', JSON.stringify(errorList));

            // Bersihkan textarea setelah disubmit
            document.getElementById('errorDescription').value = '';

            alert('Permintaan berhasil diajukan.');

            // Menampilkan data permintaan di bawahnya
            const newRequest = document.createElement('li');
            newRequest.className = 'list-group-item';
            newRequest.textContent = `${formattedDate} - ${errorDescription}`;
            const daftarPermintaan = document.getElementById('daftarPermintaan');
            daftarPermintaan.appendChild(newRequest);

            // Menyembunyikan Data Kuesioner Kerja setelah permintaan diajukan
            document.getElementById('dataKuesionerCard').style.display = 'none';

            // Menampilkan permintaan yang sudah diajukan tanpa me-refresh halaman
            tampilkanPermintaan(); // Menampilkan data yang sudah diajukan langsung
        }

        // Fungsi untuk mengambil data kuesioner kerja
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

            alert('Data kuesioner kerja berhasil diambil.');

            // Menampilkan kembali data kuesioner kerja jika sebelumnya disembunyikan
            document.getElementById('dataKuesionerCard').style.display = 'block';
        }

        // Fungsi untuk menampilkan semua permintaan yang sudah diajukan
        function tampilkanPermintaan() {
            const daftarPermintaan = document.getElementById('daftarPermintaan');
            daftarPermintaan.innerHTML = ''; // Kosongkan list sebelum menampilkan data baru

            const errorList = JSON.parse(localStorage.getItem('errorDescriptions')) || [];

            if (errorList.length === 0) {
                daftarPermintaan.innerHTML = '<li class="list-group-item">Belum ada permintaan perbaikan yang diajukan.</li>';
            } else {
                errorList.forEach((item, index) => {
                    const li = document.createElement('li');
                    li.className = "list-group-item d-flex justify-content-between align-items-center";
                    li.textContent = `${item.date} - ${item.description}`;
                    
                    // Tombol Edit
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

        // Fungsi kembali ke dashboard
        function kembaliKeDashboard() {
            window.location.href = '/dashboard';
        }

        // Menampilkan permintaan saat halaman pertama kali dimuat
        window.onload = tampilkanPermintaan;
    </script>
</body>
</html>
