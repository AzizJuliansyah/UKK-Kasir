<?php
$id = $_GET['id'];
$result = $koneksi->query("DELETE FROM produk WHERE ProdukID=$id");
echo "<script>
        alert('Data berhasil dihapus');
        window.location.href = '?page=stok';
    </script>";
?>