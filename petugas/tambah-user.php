<div class="col-md-4">
    <div class="card well">
        <h3 class="">Tambah User</h3>
        <form action="" method="POST">
            <div class="mb-3 mt-3">
                <label for="nama" class="form-label">Nama<span style="color: red;"> *</span></label>
                <input type="text" class="form-control" id="nama" placeholder="Enter Name" name="Username">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password<span style="color: red;"> *</span></label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password">
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level<span style="color: red;"> *</span></label>
                <select class="form-control" name="Level" id="level">
                    <option value="">Pilih Level</option>
                    <option value="Administrator">Admin</option>
                    <option value="Petugas">Petugas</option>
                </select>
            </div>
            <p></p>
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
        
<?php
    include_once("../koneksi/koneksi.php");
    if(isset($_POST['submit'])) {
        $name = $_POST['Username'];
        $level = $_POST['Level'];
        $password = md5($_POST['Password']);

        $sql = $koneksi->query("INSERT INTO user (Username, Password, Level) VALUES('$name','$password','$level')");

        echo "<script>alert('Berhasil menambahkan user');window.location.href='?page=user';</script>";
    }


?>