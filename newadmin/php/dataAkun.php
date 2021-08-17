<?php
require_once 'koneksi.php';

$tugas = $_POST['tugas'];

if ($_GET['task'] == "Select Data Akun") {
    $sql = "SELECT a.id_user,a.username,a.password,b.nama_lengkap,b.contact_person,a.level_user 
        FROM `table_user` as a
        JOIN table_profile as b
        WHERE a.id_user = b.id_user";
    $result = $conn->query($sql);
    $dataAkun = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $dataAkun[] = $row;
        }
    } else {
        $dataAkun[] = $row;
    }

    echo json_encode($dataAkun);
}

if ($tugas == "carispesifikdata") {
    $idUser = $_POST['idUser'];

    $sqlselect = "SELECT a.id_user,a.username,a.password,b.nama_lengkap,b.contact_person,a.level_user 
                FROM `table_user` as a
                JOIN table_profile as b
                ON a.id_user = b.id_user
                WHERE a.id_user = '$idUser'";
    $resultselect = $conn->query($sqlselect);
    $dataAkunPilihan = array();

    if ($resultselect->num_rows > 0) {
        // output data of each row
        while ($rowselect = $resultselect->fetch_assoc()) {
            $dataAkunPilihan[] = $rowselect;
        }
    } else {
        $dataAkunPilihan[] = $rowselect;
    }

    echo json_encode($dataAkunPilihan);
} else if ($tugas == "updatedata") {
    $idUser = $_POST['idUser'];

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level_user = $_POST['level_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $kontak_person = $_POST['kontak_person'];

    $sqlupdate = "UPDATE `table_user` as a
                CROSS JOIN `table_profile` as b
                ON a.id_user = b.id_user
                SET 
                a.username = '$username',
                a.password = '$password',
                a.level_user = '$level_user',
                b.nama_lengkap = '$nama_lengkap',
                b.contact_person = '$kontak_person'
                WHERE a.id_user = '$idUser'";

    if ($conn->query($sqlupdate) == true) {
        echo "Sukses";
    } else {
        echo "Gagal";
    }
} else if ($tugas == "deletedata") {
    $idUser = $_POST['idUser'];

    $sqldelete = "DELETE a,b
                FROM `table_user` as a
                INNER JOIN `table_profile` as b 
                ON a.id_user = b.id_user
                WHERE a.id_user = '$idUser'";

    if ($conn->query($sqldelete) == true) {
        echo "Sukses";
    } else {
        echo "Gagal";
    }
} else if ($tugas == "tambahdatasatu") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level_user = $_POST['level_user'];

    $sqlinsert1 = "INSERT INTO `table_user` (username,password,level_user)
                VALUES ('$username','$password','$level_user')";

    if ($conn->query($sqlinsert1) == true) {
        echo "Sukses";
    } else {
        echo "Gagal";
    }
} else if ($tugas == "selectdatasatu") {
    $username = $_POST['username'];

    $sql = "SELECT (id_user) FROM table_user WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo $row['id_user'];
        }
    } else {
        echo "Data Kosong";
    }
} else if ($tugas == "tambahdatadua") {
    $idUser = $_POST['idUser'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $kontak_person = $_POST['kontak_person'];

    $sqlinsert2 = "INSERT INTO `table_profile`
                VALUES ('$idUser','$nama_lengkap','$kontak_person')";

    if ($conn->query($sqlinsert2) == true) {
        echo "Sukses";
    } else {
        echo "Gagal";
    }
}
