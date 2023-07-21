<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>

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

          <form method="GET" action="tampil_data_pelanggan.php">
            <label class="font-weight-bold">Pencarian : </label>
            <input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];}?>">
            <button type="submit" class="btn btn-primary">cari</button>
          </form>

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
                  <a href="tampil_data_pelanggan.php">
                    <span class="material-icons-outlined">inventory_2</span> Pelanggan
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="tampil_data_barang.php">
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
                <p class="font-weight-bold">Data Pelanggan</p>
            </div>
            <?php include "koneksi.php";
            $sql = "SELECT * FROM pelanggan";
            $result = mysqli_query($link, $sql);
            $No = 1;
            ?>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Status</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "koneksi.php";
                    
                    if(isset($_GET['cari'])){
                      $pencarian = $_GET['cari'];
                      $query = "select * from pelanggan where nama like '%".$pencarian."%' ";
                    }else{
                      $query = "select * from pelanggan";
                    }
                    
                    $result = mysqli_query($link , $query);
                    while ($row = mysqli_fetch_assoc($result)) { 
                      
                      
                      ?>
                        <tr>
                            <td><?=$No?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['jenis_kelamin'] ?></td>
                            <td><?= $row['nik'] ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['no_hp'] ?></td>
                            <td>
                                <a href="form_edit_pelanggan.php?id=<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                                <a href="delete_pelanggan.php?id=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php 
                 $No++;   } ?>
                </tbody>
            </table>
            <a href="form_tambah_pelanggan.php" class="btn btn-success">Tambah Pelanggan</a>

            </main>


    </div>
    
</body>
</html>