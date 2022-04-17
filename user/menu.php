<?php
if(isset($_GET['page'])){

    include '../lib/koneksi.php';
    
    $page = $_GET['page'];
    
    switch($page){
    case 'destinasi':
    include 'destinasi.php';
    break;
    case 'home':
    include 'home.php';
    break;
    case 'profile':
    include 'profile/index.php';
    break;
    case 'signup':
    include 'accounts/signup.php';
    break;
    case 'signup_create':
    include 'accounts/create.php';
    break;
    case 'signin':
    include 'accounts/signin.php';
    break;
    case 'signin_proses':
    include 'accounts/proses.php';
    break;
    case 'about':
    include 'about.php';
    break;
    case 'logout':
    include 'logout.php';
    break;
    default :
    echo "Maaf Halaman Tidak Ada";
    break;
    }
}
?>