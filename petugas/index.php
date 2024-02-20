<?php
session_start();
include "../koneksi/koneksi.php";

if ($_SESSION['Username']=="") {
    header("Location: login.php");
}
$User = $_SESSION['Username'];
$Level = $_SESSION['Level'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>KASIR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <script src="../assets/jquery.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
    <style>
        .row.content {height: 640px}
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }
        @media screen and (max-width: 767px) {
        .row.content {height: auto;} 
        }
    </style>
</head>
<body>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
        <h2><?php echo $Level ?></h2>
        <ul class="nav nav-pills nav-stacked">
            <li <?php if(isset($_GET['page']) && $_GET['page'] == 'dashboard') echo 'class="active"'; ?>><a href="?page=dashboard">Dashboard</a></li>
            <li <?php if(isset($_GET['page']) && $_GET['page'] == 'user') echo 'class="active"'; ?>><a href="?page=user">User</a></li>
            <li <?php if(isset($_GET['page']) && $_GET['page'] == 'stok') echo 'class="active"'; ?>><a href="?page=stok">Stok</a></li>
            <li <?php if(isset($_GET['page']) && $_GET['page'] == 'daftar-transaksi') echo 'class="active"'; ?>><a href="?page=daftar-transaksi">Daftar Transaksi</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>

    </div>
    
    <div class="col-sm-9">
    <?php
            if (isset($_GET['page'])) {
                $laman = $_GET['page'];

                switch ($laman) {
                    case 'user':
                        include "user.php";
                        break;
                    case 'edit-user':
                        include "edit-user.php";
                        break;
                    case 'hapus-user':
                        include "hapus-user.php";
                        break;
                    case 'tambah-user':
                        include "tambah-user.php";
                        break;

                    case 'stok':
                        include "stok-barang.php";
                        break;
                    case 'daftar-transaksi':
                        include "daftar-transaksi.php";
                        break;
                    case 'hapus-daftar-transaksi':
                        include "hapus-daftar-transaksi.php";
                        break;
                    case 'tambah-barang':
                        include "tambah-barang.php";
                        break;
                    case 'edit-barang':
                        include "edit-barang.php";
                        break;
                    case 'hapus-barang':
                        include "hapus-barang.php";
                        break;
                        
                    case 'dashboard':
                        include "dashboard.php";
                        break;
                
                    case 'logout':
                        include "logout.php";
                        break;
                }
            }
            else {
                include "dashboard.php";
            }
        ?>
     </div>
  </div>
</div>
</body>
</html>