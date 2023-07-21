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
  <style>
    .center {
  display: block;
  margin-left: 60px;
  margin-right: 90px;
  width: 50%;
}

</style>
</head>
<body>



    <div class="grid-container">

    <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          
        </div>
        
        <div class="header-right">
          
          
        </div>
      </header>

        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                <img src="pngaaa.com-6554197.png" alt="" height="45" width="45"> Penitipan L'Z
                </div>
            </div>

            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                  <a href="#">
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
        

            
            <center> <h1>Selamat Datang</h1> </center>
            

         
            

        </main>


    </div>
    

    
</body>
</html>