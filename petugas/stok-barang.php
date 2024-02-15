<div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Barang</h4>
                        <p class="card-description">
                        <!-- Add class <code>.table</code> -->
                            <a href="?page=tambah-barang" class="btn btn-primary btn-sm">
                                    <span class="text">Tambah Produk</span>
                            </a>
                        </p>
                        <div class="table-responsive">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Terjual</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no = 1;
                                    $sql = $koneksi->query("SELECT * FROM produk");
                                    while ($data= $sql->fetch_assoc()) {
                                        
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo "<img src='../foto/".$data['Foto']."' width='70' height='70'>"; ?></td>
                                    <td><?php echo $data['NamaProduk']?></td>
                                    <td>IDR.<?php echo number_format($data['Harga']) ?></td>
                                    <td><?php echo $data['Stok']?></td>
                                    <td><?php echo $data['Terjual']?></td>
                                    <td><a type='button' href='?page=edit-barang&id=<?= $data['ProdukID']; ?>' class='btn btn-sm btn-warning'>Edit</a>/<a type='button' href='?page=hapus-barang&id=<?= $data['ProdukID']; ?>' class='btn btn-sm btn-danger'>Delete</a></td>
                                </tr>
                                <?php } ?>
                            
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>