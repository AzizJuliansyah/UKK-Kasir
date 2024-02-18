<div class="well well-lg">
    <h4>Kasir</h4>
    <p>Selamat Datang <?php echo "$User"; ?> Sebagai <?php echo $Level; ?></p>
</div>
<div class="well">
    <h3>Jumlah Menu Saat Ini:</h3>
    <?php
    include("../koneksi/koneksi.php");
    
    $sql = $koneksi->query("SELECT COUNT(*) AS total FROM produk");
    if ($sql->num_rows > 0) {
        $data = $sql->fetch_assoc();
        $totaldata = $data["total"];
    ?>
    <h1><?php echo $totaldata; ?></h1>
    <?php } ?>
</div>
<div class="well">
    <h3>Jumlah Transaksi Saat Ini:</h3>
    <?php
    $sql = $koneksi->query("SELECT COUNT(*) AS total FROM penjualan");
    if ($sql->num_rows > 0) {
        $data = $sql->fetch_assoc();
        $totaldata = $data["total"];
    ?>
    <h1><?php echo $totaldata; ?></h1>
    <?php } ?>
</div>