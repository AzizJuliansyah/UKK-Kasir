<?php
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM produk WHERE ProdukID=$id");
echo "<script>
        alert('Data berhasil dihapus');
        window.location.href = '?page=stok';
    </script>";
?>