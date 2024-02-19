<div class="p-4 main-content">
  <div class="card mt-5">
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Pemesan</th>
            <th>No Meja</th>
            <th>Menu</th>	
            <th>Aksi</th>	
          </tr>
        </thead>
        <tbody>
            <?php
                $sql = $koneksi->query("SELECT * FROM penjualan ORDER BY PenjualanID DESC");
                while ($data= $sql->fetch_assoc()) {
            ?>
                  <tr>
                    <td><?php echo $data['PenjualanID']?></td>
                    <td><?php echo $data['TanggalPenjualan']?></td>
                      <?php
                        $sql2 = $koneksi->query("SELECT * FROM pelanggan WHERE PelangganID = '".$data['PenjualanID']."'");
                        while ($data2= $sql2->fetch_assoc()) { ?>
                          <td><?php echo $data2['NamaPelanggan'];?></td>
                          <td><?php echo $data2['NoMeja'];?></td>
                        <?php } ?>
                    <td>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                              // Fetch details for the current Penjualan
                              $sql3 = $koneksi->query("SELECT * FROM detailpenjualan WHERE DetailID = '" . $data['PenjualanID'] . "'");
                                
                              $totalharga = 0;

                              while ($data3= $sql3->fetch_assoc()) {
                            ?>
                                <tr>
                                  <td>
                                  <?php
                                    $sql4 = $koneksi->query("SELECT * FROM produk WHERE ProdukID = '" . $data3['ProdukID'] . "' ");
                                    while ($data4= $sql4->fetch_assoc()) {
                                        echo $data4['NamaProduk'];
                                    }
                                  ?>
                                  </td>
                                  <td><?php echo $data3['JumlahProduk']?> Pcs</td>
                                  <td>RP.<?php echo number_format($data3['Subtotal']) ?></td>
                                </tr>

                                <?php
                                  $totalproduk = $data3['JumlahProduk'] * $data3['Subtotal'];
                                  $totalharga += $totalproduk;
                                }
                                ?>

                                <tr>
                                <td colspan='2'><strong>Total Harga:</strong></td>
                                <td><strong>RP.<?php echo number_format("$totalharga") ?></strong></td>
                            </tr>

                            </tbody>
                        </table>
                    </td>
                    <td><a onclick="return confirm('Apakah anda yakin ingin menghapus nya!!')" href="?page=hapus-daftar-transaksi&id=<?=$data['PenjualanID'] ?>" class="btn btn-sm btn-danger col-sm-12">Hapus</a></td>
                    <?php
                    echo "</tr>";
                }
                  
            ?>
        </tbody>
      </table>
                </div>
              </div>
            </div>
          