var myDataSalesTabel;
$(document).ready(function() {
    myDataSalesTabel = $("#tabelsales").DataTable({
        "deferRender": true,
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "sDom": 'lfrtip'
    });

    selectData();
})

function selectData() {
    $.ajax({
        url: 'php/dataSales.php',
        method: 'POST',
        data: {
            tugas: "selectAllData",
        },
        success: function(response) {
            const jsonSales = JSON.parse(response);
            let number = 1;
            const resultDataSale = jsonSales.map((item) => {
                let result = [];
                result.push(number);
                result.push(`
                <div class="text-center">
                <button class="btn btn-success" onClick="seeDataSales(${item.id_transaksi});"><i class="fas fa-eye"></i></button>
                </div>
                `);
                result.push(item.subtotal);
                result.push(item.pajak);
                result.push(item.total);
                result.push(item.bayar);
                result.push(item.kembalian);
                result.push(item.tanggal_transaksi);
                result.push(item.input);
                result.push(`
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-danger" onClick="deleteDataSales(${item.id_transaksi});"><i class="fas fa-trash-alt"></i></button>
                </div>
                `)
                number++;
                return result;
            })
            myDataSalesTabel.rows.add(resultDataSale);
            myDataSalesTabel.draw();
        }
    });
}

function seeDataSales(idtransaksi) {
    $.ajax({
        method: 'POST',
        url: 'php/dataSales.php',
        data: {
            idtransaksi: idtransaksi,
            tugas: "selectSpecificData",
        },
        success: function(response) {
            var jsonDataSpec = (JSON.parse(response))[0].detail_transaksi;
            let myDataSalesOn = JSON.parse(jsonDataSpec).data;
            let tableshowDetailData = [];
            let nomor = 1;
            for (let index = 0; index < myDataSalesOn.length; index++) {
                const nomorUr = nomor;
                const itemData = myDataSalesOn[index].Item;
                const priceData = myDataSalesOn[index].Price;
                const qtyData = myDataSalesOn[index].Qty;
                const discData = myDataSalesOn[index].Disc;
                const subtotalData = myDataSalesOn[index].SubTotal;
                const data = Array(nomorUr,itemData,priceData,qtyData,discData,subtotalData);
                tableshowDetailData.push(data);
                nomor++;
            }
            console.log(tableshowDetailData);
            myDataSeeTabel = $("#tabelsalesshow").DataTable({
                "deferRender": true,
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "sDom": 'lfrtip',
                "scrollX": true
            });
            myDataSeeTabel.rows.add(tableshowDetailData);
            myDataSeeTabel.draw();
            $('#lihatDataSales').modal('show');
            $('#btnmodalseedatahide').on('click', function () {
                $('#lihatDataSales').modal('hide');
            })
        }
    });
}

function deleteDataSales(idtransaksi) {
    $.ajax({
        method: 'POST',
        url: 'php/dataSales.php',
        data: {
            idtransaksi: idtransaksi,
            tugas: "deleteData",
        },
        success: function(response) {
            if (response == "Sukses") {
                window.location.reload();
            } else if (response == "Gagal") {
                alert("Gagal menghapus Data");
            }
        }
    })
}