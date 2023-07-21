<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penitipan Barang</title>
    <link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="pngaaa.com-6554197.png">
    

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="grid-container">

        <header class="header">
        </header>

        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                <img src="pngaaa.com-6554197.png" alt="" height="45" width="45"> Penitipan L'Z
                </div>
            </div>

            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                  <a href="index1.php">
                    <span class="material-icons-outlined">dashboard</span> Beranda
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="tampil_data_pelanggan.php" target="index.html">
                    <span class="material-icons-outlined">inventory_2</span> Pelanggan
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="#" target="_blank">
                    <span class="material-icons-outlined">fact_check</span> Barang
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="logout.php">
                    <span class="material-icons-outlined">logout</span> Keluar
                  </a>
                </li>
            </ul>


        </aside>

        <main class="main-container">
            <div class="main-title">
                <p class="font-weight-bold">Tambah Pelanggan</p>
            </div>

            <form action="aksi_simpan_pelanggan.php" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" require>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" require>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" require>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="form-control" require></textarea>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" require>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="tampil_data_pelanggan.php" class="btn btn-secondary">Kembali</a>
            </form>

        </main>


    </div>
    

    
</body>
</html>