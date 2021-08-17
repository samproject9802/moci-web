$(document).ready(function () {
    $.ajax({
        method: 'POST',
        url: 'php/detailproduk.php',
        data: {
            task: 'selectDataAllProduk'
        },
        success: function (response) {
            if (response) {
                let dataParseObj = JSON.parse(response);

                for (let i = 0; i < dataParseObj.length; i++) {
                    let button = `<button>Edit</button>`;
                    let dataAdd = {
                        dataAct: button,
                    }
                    dataParseObj.push(dataAdd);
                }

                console.log(dataParseObj);

                $('#tabelDetailProduk').DataTable({
                    data: dataParseObj,
                    columns: [
                        { data: 'id_produk' },
                        { data: 'kode_produk' },
                        { data: 'nama_produk' },
                        { data: 'harga' }
                    ]
                });

            } else {
                $('#tabelDetailProduk').DataTable();
            }
        }
    });
})