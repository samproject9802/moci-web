$(document).ready(function (){
		$.ajax({
        type: "GET",
        url: "php/admin/loadtransaksi.php",             
        dataType: "html",              
        success: function(response){                    
            $("#transactiondetail").html(response); 
        }
    });
});

function showdatatransaksi(atr) {
    var idtransaksi = $(atr).data("id");

    $.ajax({
            type: "POST",
            url: 'php/admin/detailtransaksi.php',
            dataType: "html",
            data: {idtransaksi: idtransaksi},
            success: function(response){
                                    var datatransaksi = response;
                                    var value = JSON.parse(datatransaksi);
                                    var valuetrans = value.data;
                                    var html = "<thead class='text-center'>";
                                    html+= "<tr>";
                                    html+= "<th>Item</th>";
                                    html+= "<th>Price</th>";
                                    html+= "<th>Qty</th>";
                                    html+= "<th>Disc</th>";
                                    html+= "<th>Subtotal</th>";
                                    html+= "</tr>";
                                    html+= "</thead>";
                                    html+= "<tbody class='text-center'>";
                                    for (var i = 0; i < valuetrans.length; i++) {
                                        html+="<tr>";
                                        html+="<td>"+valuetrans[i].Item+"</td>";
                                        html+="<td>"+valuetrans[i].Price+"</td>";
                                        html+="<td>"+valuetrans[i].Qty+"</td>";
                                        html+="<td>"+valuetrans[i].Disc+"</td>";
                                        html+="<td>"+valuetrans[i].SubTotal+"</td>";
                                        html+="</tr>";
                                    }
                                    html+="</tbody>";
                                    document.getElementById("displaydatatrans").innerHTML = html;
                                    },
    });
}