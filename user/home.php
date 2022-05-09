<section style="background-image: url('../assets/images/wisata.jpg'); background-attachment: fixed; background-size: cover; height:
    450px; padding-bottom: 44%; text-shadow: 100px; position: relative;" id="awal">
    <div class="container-fluid text-center" style="padding-top: 100px;">
        <h1 class="display-4"><strong>WELCOME</strong></h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
            featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#about" role="button">Learn more</a>
    </div>
</section>
<div class="container-fluid pt-5 pb-5">
    <div class="row">
        <div class="col text-center">
            <h2>Rekomendasi</h2>
        </div>
        <div class="row">
            <?php
            $query = "SELECT *FROM tb_items ORDER BY harga ASC LIMIT 3";
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
                            <input style="width: 280px" type="jmlh_hari" name="jmlh_hari" id="jmlh_hari"
                                class="form-control" disabled value="<?= $jmlh_hari?>">
                            <label for="jam_berangkat" class="form-label">Jam Berangkat</label>
                            <input style="width: 280px;" type="jam_berangkat" name="jam_berangkat" id="jam_berangkat"
                                class="form-control" disabled value="<?= $jam_berangkat?>">
                            <label for="jam_tiba" class="form-label">Jam Tiba</label>
                            <input style="width: 280px;" type="jam_tiba" name="jam_tiba" id="jam_tiba"
                                class="form-control" disabled value="<?= $jam_tiba?>">
                            <label for="transportasi" class="form-label">Transportasi
                                Berangkat</label>
                            <input style="width: 280px;" type="transportasi" name="transportasi" id="transportasi"
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
    <section id="about">
        <div class="container-fluid about pt-5 pb-5" style="background-image: url('../assets/images/corporate-incentives.jpg');
background-size: cover;
    background-repeat: no-repeat;
    color: rgb(255, 255, 255);
    text-shadow: 100px;">
            <div class="container text-center py-5">
                <h2 class="display-2"><strong>About</strong></h2>
                <h5>Tentang Website Ini</h5>
            </div>
            <div class="row pt-5">
                <div class="col-md-12">

                    <p>Minecraft adalah sebuah permainan sandbox yang dikembangkan oleh pengembang permainan asal Swedia
                        Mojang
                        Studios. Game ini dibuat oleh Markus "Notch" Persson dalam bahasa pemrograman Java. Setelah
                        beberapa
                        versi pengujian pribadi awal, permainan ini pertama kali dipublikasikan pada Mei 2009 sebelum
                        sepenuhnya
                        dirilis pada November 2011, kemudian Jens "Jeb" Bergensten mengambil alih pengembangan.</p>
                    <p>Website ini berisi tentang guide dari minecraft yaitu adventure, mining, dan building yang
                        memiliki
                        penjelasan menarik didalamnya.</p>
                </div>
            </div>
        </div>
    </section>