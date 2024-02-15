<?php
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM user WHERE UserID=$id");
echo "<script>
        alert('Data berhasil dihapus');
        window.location.href = '?page=user';
    </script>";
?>