<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col text-center">
            <h2>Destinations</h2>
        </div>
        <div class="row">
            <?php
            $query = "SELECT *FROM tb_items";
        $dewan1 = $koneksi->prepare($query);
        $dewan1->execute();
        $res1 = $dewan1->get_result();
        while ($row = $res1->fetch_assoc()) {
          $no_items = $row["no_items"];
          $user_id = $row["user_id"];
          $tujuan_wisata = $row["tujuan_wisata"];
          $jmlh_hari = $row["jmlh_hari"];
          $jam_berangkat = $row["jam_berangkat"];
          $jam_tiba = $row["jam_tiba"];
          $transportasi = $row["transportasi"];
          $penginapan = $row["penginapan"];
          $restoran = $row["restoran"];
          $harga = $row["harga"];
          $deskripsi = $row["deskripsi"];
          ?>
            <div id="card" class="col-4 pb-5">
                <div class="card h-100">
                    <img src="../assets/images/hotel.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;"><?php echo $tujuan_wisata; ?></h5>
                        <p><label for="jmlh_hari" class="form-label">Jumlah Hari</label>
                            <input style="width: 50%" type="jmlh_hari" name="jmlh_hari" id="jmlh_hari"
                                class="form-control" disabled value="<?= $jmlh_hari?>">
                            <label for="jam_berangkat" class="form-label">Jam Berangkat</label>
                            <input style="width: 50%;" type="jam_berangkat" name="jam_berangkat" id="jam_berangkat"
                                class="form-control" disabled value="<?= $jam_berangkat?>">
                            <label for="jam_tiba" class="form-label">Jam Tiba</label>
                            <input style="width: 50%;" type="jam_tiba" name="jam_tiba" id="jam_tiba"
                                class="form-control" disabled value="<?= $jam_tiba?>">
                            <label for="transportasi" class="form-label">Transportasi
                                Berangkat</label>
                            <input style="width: 50%;" type="transportasi" name="transportasi" id="transportasi"
                                class="form-control" disabled value="<?= $transportasi?>">
                        </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <?php
        }
            ?>
        </div>
    </div>
</div>
</div>