<?php
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM penjualan WHERE PenjualanID=$id");
echo "<script>
        alert('Data berhasil dihapus');
        window.location.href = '?page=daftar-transaksi';
    </script>";
?>