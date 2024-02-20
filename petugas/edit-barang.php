<?php
include("../koneksi/koneksi.php");

$id = $_GET['id'];
$sql = $koneksi->query("SELECT * FROM produk WHERE ProdukID = $id");
$data = $sql->fetch_assoc();

if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $nama_produk = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $sql = $koneksi->query("UPDATE produk SET NamaProduk = '$nama_produk', Harga = '$harga', Stok = '$stok' WHERE ProdukID = $id");
    echo "<script>
            alert('Data berhasil diubah');
            window.location.href = '?page=stok';
          </script>";
} 
?>
<div class="p-4" id="main-content">
    <div class="card well">
        <div class="card-body">
            <div class="container mt-5">
            <h2>Edit Produk</h2>
                <form action="" method="POST" class="col-md-10">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" value="<?php echo $data['NamaProduk']; ?>" name="nama" required>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" value="<?php echo $data['Harga']; ?>" name="harga" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" value="<?php echo $data['Stok']; ?>" name="stok" required>
                    </div>
                    </div>
                    <button type="submit" name="edit" class="btn btn-primary">Edit Produk</button>
                </form>
            </div>            
        </div>
    </div>
</div>