<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data Wisata</h4>
            <a href="index.php?page=dashboard_create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nomor Items</th>
                        <th>Penulis</th>
                        <th>Tujuan Wisata</th>
                        <th>Jumlah Hari</th>
                        <th>Jam Keberangkatan</th>
                        <th>Jam Tiba</th>
                        <th>Transportasi</th>
                        <th>Penginapan</th>
                        <th>Restoran</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT *FROM tb_items JOIN tb_user ON tb_items.user_id = tb_user.id_cust");
                $no = 1;
                foreach ($query as $data){
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['no_items']?></td>
                        <td><?= $data['nama_cust']?></td>
                        <td><?= $data['tujuan_wisata']?></td>
                        <td><?= $data['jmlh_hari']?></td>
                        <td><?= $data['jam_berangkat']?></td>
                        <td><?= $data['jam_tiba']?></td>
                        <td><?= $data['transportasi']?></td>
                        <td><?= $data['penginapan']?></td>
                        <td><?= $data['restoran']?></td>
                        <td><?= $data['harga']?></td>
                        <td><?= $data['deskripsi']?></td>
                        <td>
                            <div class="btn-group">
                                <a href="index.php?page=dashboard_edit&no_items=<?= $data['no_items']?>"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <a href="index.php?page=dashboard_delete&no_items=<?= $data['no_items']?>"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>