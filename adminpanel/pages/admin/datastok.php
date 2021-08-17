<div class="container-fluid p-3">
    <div class="row ">
        <div class="col">
            <div class="card h-100">
                <div class="card-header">
                    <h5>Input Data Stok Admin</h5>
                </div>
                <div class="card-body">
                    <form action="php/admin/inputstok_admin.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                            <select class="form-select" aria-label="Default select example" id='productnamastok' name="namaproduk">
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jumlah Stok</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="jumlahstok">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-success">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-header">
                    <h5>Data Stok Admin</h5>
                </div>
                <div class="card-body">
                    <table id="displaydatastokadmin" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Nama Poduk</th>
                                <th>Jumlah Stok</th>
                                <th>Input By</th>
                                <th>Tanggal Input</th>
                            </tr>
                        </thead>
                        <tbody class="text-center" id="datastokadmin">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-header">
                    <div class="row g-3">
                        <div class="col">
                            <h5>Data Stok Kasir</h5>
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" id='filterbyuser'>
                                <option selected value="">Pilih user...</option>
                                <option value="Dinda Windari">Dinda</option>
                                <option value="Maya Tarigan">Maya</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="displaydatastokkasir" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Nama Poduk</th>
                                <th>Jumlah Stok</th>
                                <th>Input By</th>
                                <th>Tanggal Input</th>
                            </tr>
                        </thead>
                        <tbody class="text-center" id="datastokkasir">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>