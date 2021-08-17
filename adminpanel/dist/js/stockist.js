function getdatatablestok(valuenama,idelement) {

    var getelement = idelement;
    var namauser = valuenama;

        $.ajax({
            type: "POST",
            url: 'php/admin/loaddatastok.php',
            dataType: "html",
            data: {namauser: namauser},
            success: function (response) {
                document.getElementById(getelement).innerHTML = response;
            }
        });

}

$(document).ready(function() {
    getdatatablestok("Administrator","datastokadmin");

    $('#filterbyuser').change(function(){
        if(!$(this).val()){ // or this.value == 'volvo'
            getdatatablestok("","datastokadmin");
        }else { // or this.value == 'volvo'
            getdatatablestok($(this).val(),"datastokkasir");
        }
    });

    $.ajax({
            type: "POST",
            url: 'php/admin/loadproduk.php',
            dataType: "html",
            success: function (response) {
                document.getElementById("productnamastok").innerHTML = response;
            }
        });
})

