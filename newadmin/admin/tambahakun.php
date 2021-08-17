<div class="container-fluid">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pengguna</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success mb-3" id="btntambahdata">+ Tambah Akun</button>
            </div>
            <table id="tabeltambahakun" class="display">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama Lengkap</th>
                        <th>Kontak Person</th>
                        <th>Level User</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Show Data -->
<div class="modal fade" id="showDataAkun" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><b>Detail User</b></h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form id="showDataAkunForm">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="updateModalAkun">Update</button>
                <button type="button" class="btn btn-secondary" id="closeModalAkun">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="tambahDataAkun" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><b>Tambah User</b></h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form id="tambahDataAkunForm">
                        <div class="mb-3 row">
                            <label for="usernamefield" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="usernamefield">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="passwordfield" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="passwordfield">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="namalengkapfield" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="namalengkapfield">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="kontakfield" class="col-sm-3 col-form-label">No. HP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kontakfield">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="leveluserfield" class="col-sm-3 col-form-label">Level User</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="leveluserfield">
                                    <option selected disabled>--Pilih Level User--</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Kasir">Kasir</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="tambahModalAkun">Tambah</button>
                <button type="button" class="btn btn-secondary" id="closetambahModalAkun">Close</button>
            </div>
        </div>
    </div>
</div>