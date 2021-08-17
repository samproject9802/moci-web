<?php
include_once '../config.php';

session_start();

$password = md5($_POST['pswkasir']);
$nama = $_POST['namakasir'];
$kontak = $_POST['kontakkasir'];
$id_user = $_SESSION['id'];

if (!isset($_POST['pswkasir']) && !isset($_POST['namakasir']) && !isset($_POST['kontakkasir'])) {
} else {
    $sqlupdateuser = "UPDATE table_user SET password='$password' WHERE id_user='$id_user'";
    if ($conn->query($sqlupdateuser) == true) {
        header('location:../../kasir.php?page=myprofile&tab=profile');
    };

    $sqlupdateprofile = "UPDATE table_profile SET nama_lengkap='$nama',contact_person='$kontak' WHERE id_user='$id_user'";
    if ($conn->query($sqlupdateprofile) == true) {
        header('location:../../kasir.php?page=myprofile&tab=profile');
    };
}
