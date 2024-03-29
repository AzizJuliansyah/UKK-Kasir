<div class="row">
    <div class="col-lg-12">
    <h4>Daftar User</h4>
    <?php if ($Level == "Administrator") { ?>
    <a href="?page=tambah-user" class="btn btn-primary btn-sm">Tambah User+</a>
    <?php } ?>
        <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <?php if ($Level == "Administrator") { ?>
                        <th>Pilihan</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        $sql = $koneksi->query("SELECT * FROM user");
                        while ($data= $sql->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['Username']; ?></td>
                        <td><?php echo str_repeat('*', strlen($data['Password'])); ?></td>
                        <td><?php echo $data['Level']; ?></td>
                        <?php if ($Level == "Administrator") { ?>
                        <td><a href='?page=edit-user&id=<?= $data['UserID']; ?>' class='btn btn-sm btn-warning'>Edit</a> <a onclick="return confirm('Apakah anda yakin ingin menghapus nya!!')" href='?page=hapus-user&id=<?= $data['UserID']; ?>' class='btn btn-sm btn-danger'>Delete</a></td>
                        <?php } ?>
                    </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>