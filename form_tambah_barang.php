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
                <p class="font-weight-bold">Tambah Barang</p>
            </div>

            <form action="aksi_simpan_barang.php" method="post">
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" require>
            </div>
            <div class="mb-3">
                <label for="Dimensi" class="form-label">Dimensi</label>
                <select name="Dimensi" id="Dimensi" class="form-select" require>
                    <option value="50x50x50">A (50x50x50)</option>
                    <option value="150x150x150">B (150x150x150)</option>
                    <option value="300x300x250">C (300x300x250)</option>
                    <option value="450x470x460">D (450x470x460)</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_penitipan" class="form-label">Tanggal Penitipan</label>
                <input type="date" class="form-control" id="tanggal_penitipan" name="tanggal_penitipan" require>
            </div>
            <div class="mb-3">
                <label for="tanggal_pengembalian" class="form-label">Tanggal pengembalian</label>
                <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" require>
            </div>
            <div class="mb-3">
                <label for="lama_penitipan" class="form-label">Lama Penitipan</label>
                <input type="text" class="form-control" id="lama_penitipan" name="lama_penitipan" require>
            </div>

            <div class="mb-3">
                <label for="id" class="form-label">Nama</label>
                <select type ="text" class="form-control" id="id" name="id" require>
                <option>Pilih</option>
                <?php
                include "koneksi.php";
                $query = mysqli_query($link,"SELECT * FROM pelanggan") or die (mysqli_error($link));
                while($row = mysqli_fetch_array($query)){
                    echo "<option value=$row[id]> $row[nama] </option>";
                }
                ?>
                </select>
 
            </div>
            
           
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="tampil_data_barang.php" class="btn btn-secondary">Kembali</a>
            </form>

        </main>


    </div>
    

    
</body>
</html>