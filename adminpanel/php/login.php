<?php
session_start();

include_once 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM table_user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
$data = [];

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $data = $row;
    }
} else {
    $data = null;
}

if (isset($data['level_user'])) {
    if ($data['level_user'] == "Developer" || $data['level_user'] == "Admin") {
        $dataadmin = [];
        $_SESSION['status'] = "Logged";
        $sqlloginadm = "SELECT * FROM table_profile WHERE id_user='$data[id_user]'";
        $resultadm = $conn->query($sqlloginadm);
        if ($resultadm->num_rows > 0) {
            // output data of each row
            while ($rowadmin = $resultadm->fetch_assoc()) {
                $dataadmin = $rowadmin;
            }
        }
        $_SESSION['nama'] = $dataadmin['nama_lengkap'];
        $_SESSION['cp'] = $dataadmin['contact_person'];
        $_SESSION['level'] = $data['level_user'];
        $_SESSION['id'] = $data['id_user'];
        $_SESSION['psw'] = $data['password'];
        header('location:../../newadmin');
    } elseif ($data['level_user'] == "Kasir") {
        $datakasir = [];
        $_SESSION['status'] = "Logged";
        $sqlloginkasir = "SELECT * FROM table_profile WHERE id_user='$data[id_user]'";
        $resultksr = $conn->query($sqlloginkasir);
        if ($resultksr->num_rows > 0) {
            // output data of each row
            while ($rowkasir = $resultksr->fetch_assoc()) {
                $datakasir = $rowkasir;
            }
        }
        $_SESSION['nama'] = $datakasir['nama_lengkap'];
        $_SESSION['cp'] = $datakasir['contact_person'];
        $_SESSION['level'] = $data['level_user'];
        $_SESSION['id'] = $data['id_user'];
        $_SESSION['psw'] = $data['password'];
        header('location:../kasir.php');
    }
} else {
    header('location:../index.php?msg=error');
}
