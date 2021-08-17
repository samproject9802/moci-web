var myDataAkunTabel;
$(document).ready(function() {

    $('#closeModalAkun').on('click', function() {
        $('#showDataAkun').modal('hide');
    })

    $('#closetambahModalAkun').on('click', function() {
        $('#tambahDataAkun').modal('hide');
    })

    myDataAkunTabel = $("#tabeltambahakun").DataTable({
        "deferRender": true,
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "sDom": 'lfrtip'
    });
    showDatatable();

    tambahDatatable();
    
});

function tambahDatatable() {
    $('#btntambahdata').on('click', function(){
        $('#tambahDataAkun').modal('show');
    })

    $('#tambahModalAkun').on('click', function() {
        $.ajax({
            method: 'POST',
            url: 'php/dataAkun.php',
            data: {
                'tugas': 'tambahdatasatu',
                'username': $('#usernamefield').val(),
                'password': $('#passwordfield').val(),
                'level_user': $('#leveluserfield').val()
            },
            success: function(response) {
                if (response == "Sukses") {
                    $.ajax({
                        method: 'POST',
                        url: 'php/dataAkun.php',
                        data : {
                            'tugas': 'selectdatasatu',
                            'username': $('#usernamefield').val(),
                        },
                        success: function(response) {
                            if (response == "Data Kosong") {
                                alert("Data tidak dapat diproses");
                            } else {
                                $.ajax({
                                    method: 'POST',
                                    url: 'php/dataAkun.php',
                                    data : {
                                        'tugas': 'tambahdatadua',
                                        'idUser': response,
                                        'nama_lengkap': $('#namalengkapfield').val(),
                                        'kontak_person': $('#kontakfield').val(),
                                    },
                                    success: function(response) {
                                        if (response == "Sukses") {
                                            $('#tambahDataAkun').modal('hide');
                                            window.location.reload(false);
                                        } else {
                                            alert('Data Gagal di Proses');
                                        }
                                    }
                                })
                            }
                        }
                    });
                } else {
                    alert('Data Gagal diproses');
                }
            }
        });
    })
}

function showDatatable() {
    $.ajax({
        method: 'GET',
        url: 'php/dataAkun.php?task=Select Data Akun',
        success: (response) => {
            const jsonObject = JSON.parse(response);
            let number = 1;
            const result = jsonObject.map((item) => {
                let result = [];
                result.push(number);
                result.push(item.username);
                result.push(item.password);
                result.push(item.nama_lengkap);
                result.push(item.contact_person);
                result.push(item.level_user);
                result.push(`
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-warning" onClick="editDataAkun(${item.id_user});"><i class="fas fa-pen"></i></button>
                    <button class="btn btn-danger" onClick="deleteDataAkun(${item.id_user});"><i class="fas fa-trash-alt"></i></button>
                </div>
                `)
                number++;
                return result;
            })
            myDataAkunTabel.rows.add(result);
            myDataAkunTabel.draw();
        }
    });
}

function editDataAkun(idUser) {
    $.ajax({
        method: 'POST',
        url: 'php/dataAkun.php',
        data: {
            tugas: 'carispesifikdata',
            idUser: idUser,
        },
        success: function(response) {
            let jsonData = JSON.parse(response);
            let myData = jsonData[0];

            $('#showDataAkunForm').html(`
                <h4 class="text-center mb-3"><b>Data Pengguna</b></h4>
                <div class="mb-3 row">
                    <label for="usernamefield" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="usernamefield" value="${myData['username']}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="passwordfield" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="passwordfield" value="${myData['password']}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="namalengkapfield" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="namalengkapfield" value="${myData['nama_lengkap']}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kontakfield" class="col-sm-3 col-form-label">No. HP</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="kontakfield" value="${myData['contact_person']}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="leveluserfield" class="col-sm-3 col-form-label">Level User</label>
                    <div class="col-sm-9">
                    <select class="form-control-plaintext" id="leveluserfield">
                        <option value="${myData['level_user']}" selected>${myData['level_user']}</option>
                        <option disabled>--Pilih Level User--</option>
                        <option value="Admin">Admin</option>
                        <option value="Kasir">Kasir</option>
                    </select>
                    </div>
                </div>
    `       );
        }
    });
    $('#showDataAkun').modal('show');
    $('#updateModalAkun').on('click', function() {
        $.ajax({
            method: 'POST',
            url: 'php/dataAkun.php',
            data: {
                'tugas': 'updatedata',
                'idUser': idUser,
                'username': $('#usernamefield').val(),
                'password': $('#passwordfield').val(),
                'level_user': $('#leveluserfield').val(),
                'nama_lengkap': $('#namalengkapfield').val(),
                'kontak_person': $('#kontakfield').val(),
            },
            success: function(response) {
                if (response == "Sukses") {
                    $('#showDataAkun').modal('hide');
                    window.location.reload(false);
                } else {
                    alert('Data Gagal di Proses');
                }
            }
        });
    })
}

function deleteDataAkun(idUser) {
    $.ajax({
        method: 'POST',
        url: 'php/dataAkun.php',
        data: {
            'tugas': 'deletedata',
            'idUser': idUser,
        },
        success: function(response) {
            if (response == "Sukses") {
                $('#showDataAkun').modal('hide');
                window.location.reload(false);
            } else {
                alert('Data Gagal di Proses');
            }
        }
    });
}