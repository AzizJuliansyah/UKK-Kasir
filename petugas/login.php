<?php

include("../koneksi/koneksi.php");
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    $namauser = $_POST['Username'];
    $password = md5($_POST['Password']);
    $sql = "SELECT * FROM user WHERE Username='$namauser' AND Password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $level = $row['Level'];
        $_SESSION['Level'] = $level;
        $_SESSION['Username'] = $row['Username'];
        header("Location: index.php");
        echo "<script>alert('Berhasil Masuk!')</script>";
    } else {
        echo "<script>alert('Username atau Password Anda Salah. Silahkan Coba Lagi')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <!-- Form Login -->
                    <form action="" method="post">
                        
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" name="Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="Password" required>
                        </div>
                        <button type="submit" name="submit" class="btn col-12 btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>