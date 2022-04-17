<?php
if(isset($_POST['tambah'])){
    $tujuan_wisata = htmlentities(htmlspecialchars(strip_tags(trim($_POST['tujuan_wisata']))));
    $jmlh_hari = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jmlh_hari']))));
    $jam_berangkat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jam_berangkat']))));
    $jam_tiba = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jam_tiba']))));
    $transportasi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['transportasi']))));
    $penginapan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['penginapan']))));
    $restoran = htmlentities(htmlspecialchars(strip_tags(trim($_POST['restoran']))));
    $harga = htmlentities(htmlspecialchars(strip_tags(trim($_POST['harga']))));
    $deskripsi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['deskripsi']))));
    $user_id = htmlentities(htmlspecialchars(strip_tags(trim($_SESSION['id_cust']))));

    $query = mysqli_query($koneksi, "INSERT INTO tb_items VALUES(null,'$user_id','$tujuan_wisata','$jmlh_hari','$jam_berangkat','$jam_tiba','$transportasi','$penginapan','$restoran','$harga','$deskripsi')");

    if($query){
        header("Location: index.php?page=dashboard");
    }else{
        echo "gagal";
    }
}
?>