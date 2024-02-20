<?php
$id = $_GET['id'];
$result = $koneksi->query("DELETE FROM user WHERE UserID=$id");
echo "<script>
        alert('Data berhasil dihapus');
        window.location.href = '?page=user';
    </script>";
?>