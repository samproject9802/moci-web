$(document).ready(function () {

    $.ajax({
        method: 'POST',
        url: 'php/user/cashincashout.php',
        data: {
            task: 'selectData',
        },
        success: function (response) {
            let jsonParse = JSON.parse(response);
            $('#datatablecash').DataTable({
                data: jsonParse,
                columns: [
                    { data: 'id_trx' },
                    { data: 'type' },
                    { data: 'value' },
                    { data: 'description' }
                ]
            });
        }
    })

    $('#formcashincashout').on('submit', (e) => {
        e.preventDefault();
    })

})

const CashInFunction = () => {
    let nilaiuang = $('#inputnilaicash').val();
    let deskripsi = $('#deskripsiuang').val();

    if (nilaiuang && deskripsi) {
        $.ajax({
            method: 'POST',
            url: 'php/user/cashincashout.php',
            data: {
                task: 'inputDataCash',
                type: 'Cash In',
                value: nilaiuang,
                description: deskripsi
            },
            success: function (response) {
                if (response == "Sukses") {
                    window.location.reload();
                } else {
                    window.location.reload();
                }
            }
        })
    } else {
        alert('Field masih kosong');
    }

}

const CashOutFunction = () => {
    let nilaiuang = $('#inputnilaicash').val();
    let deskripsi = $('#deskripsiuang').val();

    if (nilaiuang && deskripsi) {
        $.ajax({
            method: 'POST',
            url: 'php/user/cashincashout.php',
            data: {
                task: 'inputDataCash',
                type: 'Cash Out',
                value: nilaiuang,
                description: deskripsi
            },
            success: function (response) {
                if (response == "Sukses") {
                    window.location.reload();
                } else {
                    window.location.reload();
                }
            }
        })
    } else {
        alert('Field masih kosong');
    }

}

const CancelFunction = () => {
    window.location.reload();
}