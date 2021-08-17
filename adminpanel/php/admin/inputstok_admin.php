<?php
include_once '../config.php';

session_start();

date_default_timezone_set("Asia/Jakarta");

$current_date = date("Y-m-d");
$current_time = date("H:i:s");
$timenow = "$current_date" . " " . "$current_time";

$namaproduk = $_POST['namaproduk'];
$jumlahstok = $_POST['jumlahstok'];
$nama_user = $_SESSION['nama'];

$sqlinputstok = "INSERT INTO `table_stockist` 
                VALUES ('','$namaproduk','$jumlahstok','$nama_user','$timenow')";
if ($conn->query($sqlinputstok) == true) {
    header('location:../../admin.php');
};
