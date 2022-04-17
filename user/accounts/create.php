<?php
if(isset($_POST['buat'])){
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $pass = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_cust']))));
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat']))));
    $telp = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_telp']))));
    $status = htmlentities(htmlspecialchars(strip_tags(trim($_POST['status']))));
    $pass = sha1($pass);

    $query = mysqli_query($koneksi, "INSERT INTO tb_user VALUES(null,'$username','$pass','$nama','$alamat','$telp','$status')");

    if($query){
        header("Location: index.php?page=signin");
    }else{
        echo "gagal";
    }
}
?>