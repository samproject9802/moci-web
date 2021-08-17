<?php
include_once 'php/config.php';
$dataupdate = [];

$sql = "SELECT a.id_user,a.nama_lengkap,a.contact_person,b.username,b.password,b.level_user FROM `table_profile` as a
        INNER JOIN `table_user` as b
        WHERE a.id_user = $_SESSION[id]";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $dataupdate = $row;
    }
}

echo "
<section class='content'>
    <div class='container-fluid'>
        <div class='row'>
            <section class='col-lg-7 connectedSortable'>
                <div class='card'>
                    <div class='card-header'>
                        <b>Profile</b>
                    </div>
                    <div class='card-body'>
                        <div class='tab-content p-0'>
                            <form action='php/user/updateprofile-kasir.php' method='post'>
                                <div class='mb-3 row'>
                                    <label for='inputPassword' class='col-sm-2 col-form-label'>Password</label>
                                    <div class='col-sm-10'>
                                        <input type='password' class='form-control' name='pswkasir' value='$dataupdate[password]'>
                                    </div>
                                </div>
                                <div class='mb-3 row'>
                                    <label for='inputPassword' class='col-sm-2 col-form-label'>Nama</label>
                                    <div class='col-sm-10'>
                                        <input type='text' class='form-control' name='namakasir' value='$dataupdate[nama_lengkap]'>
                                    </div>
                                </div>
                                <div class='mb-3 row'>
                                    <label for='inputPassword' class='col-sm-2 col-form-label'>Kontak</label>
                                    <div class='col-sm-10'>
                                        <input type='text' class='form-control' name='kontakkasir' value='$dataupdate[contact_person]'>
                                    </div>
                                </div>
                                <div class='mb-3 row'>
                                    <button type='submit' class='btn btn-success'>Update</button>
                                    <button type='reset' class='btn btn-danger mt-3'>Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.card-body -->
                </div>

            </section>
            <section class='col-lg-5 connectedSortable'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='tab-content p-0'>
                            <div class='mb-3' align='center'>
                                <img src='dist/img/avatar.png' class='img-thumbnail' alt=''>
                            </div>
                            <div class='mb-3 row'>
                                <label for='staticEmail' class='col-sm-2 col-form-label'>Nama</label>
                                <div class='col-sm-10'>
                                    <input type='text' readonly class='form-control-plaintext' id='staticEmail' value='$dataupdate[nama_lengkap]'>
                                </div>
                            </div>
                            <div class='mb-3 row'>
                                <label for='staticEmail' class='col-sm-2 col-form-label'>Kontak</label>
                                <div class='col-sm-10'>
                                    <input type='text' readonly class='form-control-plaintext' id='staticEmail' value='$dataupdate[contact_person]'>
                                </div>
                            </div>
                            <div class='mb-3 row'>
                                <label for='staticEmail' class='col-sm-2 col-form-label'>Level</label>
                                <div class='col-sm-10'>
                                    <input type='text' readonly class='form-control-plaintext' id='staticEmail' value='$dataupdate[level_user]'>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                </div>
            </section>
        </div>
    </div>
</section>";
