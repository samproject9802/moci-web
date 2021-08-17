$(document).ready(function (){
		$.ajax({
        type: "GET",
        url: "php/user/loadproducts.php",             
        dataType: "html",              
        success: function(response){                    
            $("#listproduct").html(response); 
        }

    });
});

function goDoSomething(identifier){     
			Swal.fire({
				title: 'Masukkan Jumlah Produk',
				html:
				'<div class="input-group mt-3">' +
				'<button class="btn btn-outline-secondary" type="button" id="btntambah"><b>+</b></button>' +
				'<input type="text" class="form-control text-center" id="inputvalue" style="font-weight: bold; font-size: 15px;">' +
				'<button class="btn btn-outline-secondary" type="button" id="btnkurang"><b>-</b></button>' +
				'</div>',
				confirmButtonText: 'Submit',
				reverseButtons: true
			}).then((result) => {
									if (result.isConfirmed) {
										var inputvalue = document.getElementById("inputvalue").value;
										var namaproduk = $(identifier).data('nama');
										var hargaproduk = $(identifier).data('harga');
										var minpembelian = $(identifier).data('sale');
										var diskon = $(identifier).data('discount');
										var validdate = $(identifier).data('valid');
										var unvaliddate = $(identifier).data('unvalid');
										addtocart(namaproduk,hargaproduk,inputvalue,minpembelian,diskon,validdate,unvaliddate);
								}
			})

			var nilai = 0;
			$('#inputvalue').val(nilai);

			$('#btntambah').on('click', function() {
				nilai++;
				$('#inputvalue').val(nilai);
			})
			$('#btnkurang').on('click', function() {
				nilai--;
				$('#inputvalue').val(nilai);
			})	
}

function GrandTotal(){
	var TotalValue = 0;
	$('#totalValue1').val(accounting.formatMoney(TotalValue,{symbol:"Rp",format: "%s %v"}));
	var TotalPriceArr = $('#tablepenjualan tr .subtotal').get();
	var pajak = $('#taxvalue').val();
	var tax = pajak.split(" ");

	$(TotalPriceArr).each(function(){
    TotalValue += parseFloat($(this).text().replace(/,/g, "").replace("Rp",""));
	});

	var totalan = accounting.unformat(TotalValue,{symbol:"Rp",format: "%s %v"});

	var finalvalue = totalan + (totalan * (tax[0]/100));

	$('#totalValue1').val(accounting.formatMoney(finalvalue,{symbol:"Rp",format: "%s %v"}));
	$('#totalValue').val(accounting.formatMoney(TotalValue,{symbol:"Rp",format: "%s %v"}));
	$('#kembaliansaya').val(accounting.formatMoney(finalvalue,{symbol:"Rp",format: "%s %v"}))
};

function addtocart(nama,harga,qty,minsale,diskon,valid,invalid) {
	var namaproduk = nama;
	var hargaproduk = harga;
	var quantity = qty;
	var minimalpembelian = minsale;
	var discount = diskon;
	var validdiskon = valid;
	var invaliddiskon = invalid;

	var today = new Date();
	var timenow = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	var yyyy = today.getFullYear();
	var hh = timenow.getHours();
	var min = timenow.getMinutes();
	var sec = timenow.getSeconds();

	today = yyyy + '-' + mm + '-' + dd;
	waktu = hh + ':' + min + ':' + sec;

	var currentdate = today + ' ' + waktu;

	if (currentdate >= validdiskon && currentdate <= invaliddiskon) {
		var salediskon = discount/100;

		if (!qty) {
			Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Jumlah Produk tidak boleh kosong!',
					})
		} else if (qty >= minimalpembelian) {
			var total = (hargaproduk * quantity) - (hargaproduk * quantity * salediskon);
			$('#salestable').append("<tr class='prd'><td class='item'>"+namaproduk+"</td><td class='price'>"+hargaproduk+"</td><td class='qty'>"+quantity+"</td><td class='disc'>"+discount+" %</td><td class='subtotal'>"+total+"</td><td class='action'><button class='btn btn-danger btn-sm' type='button' id='delete-row'><i class='fas fa-times-circle'></i></button><tr>");
			GrandTotal();
		} else {
			discount = 0;
			salediskon = 0;
			var total = (hargaproduk * quantity) - (hargaproduk * quantity * salediskon);
			$('#salestable').append("<tr class='prd'><td class='item'>"+namaproduk+"</td><td class='price'>"+hargaproduk+"</td><td class='qty'>"+quantity+"</td><td class='disc'>"+discount+" %</td><td class='subtotal'>"+total+"</td><td class='action'><button class='btn btn-danger btn-sm' type='button' id='delete-row'><i class='fas fa-times-circle'></i></button><tr>");
			GrandTotal();
		}

	} else {
		discount = 0;
		if (!qty) {
			Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Jumlah Produk tidak boleh kosong!',
					})
		} else if (qty >= minimalpembelian) {
			salediskon = 0;
			var total = (hargaproduk * quantity) - (hargaproduk * quantity * salediskon);
			$('#salestable').append("<tr class='prd'><td class='item'>"+namaproduk+"</td><td class='price'>"+hargaproduk+"</td><td class='qty'>"+quantity+"</td><td class='disc'>"+discount+" %</td><td class='subtotal'>"+total+"</td><td class='action'><button class='btn btn-danger btn-sm' type='button' id='delete-row'><i class='fas fa-times-circle'></i></button><tr>");
			GrandTotal();
		} else {
			discount = 0;
			salediskon = 0;
			var total = (hargaproduk * quantity) - (hargaproduk * quantity * salediskon);
			$('#salestable').append("<tr class='prd'><td class='item'>"+namaproduk+"</td><td class='price'>"+hargaproduk+"</td><td class='qty'>"+quantity+"</td><td class='disc'>"+discount+" %</td><td class='subtotal'>"+total+"</td><td class='action'><button class='btn btn-danger btn-sm' type='button' id='delete-row'><i class='fas fa-times-circle'></i></button><tr>");
			GrandTotal();
		}
	}
	
	
}

$('body').on('click','#delete-row',function(){
	Swal.fire({
		title: "Remove this item?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$(this).parents("tr").remove();
				Swal.fire("Removed Successfully!", {
				icon: "success",
				});
				GrandTotal();
			}
	});
})

function kembalian() {
	jQuery(function($) {
		$('#cashprocess').simpleMoneyFormat();    
	});

	var totalproduk = $('#totalValue1').val();
	var nilaitotal = accounting.unformat(totalproduk, ".")

	$('#kembaliansaya').val(totalproduk);

	$('#cashprocess').click(function() {
		$('#cashprocess').attr('value', ''); 
	});

	var cashin = $('#cashprocess').val();
	var nilaimasukan = accounting.unformat(cashin, ".");
	
	var kembalian = nilaimasukan - nilaitotal;

	$('#kembaliansaya').val(accounting.formatMoney(kembalian,{symbol:"Rp",format: "%s %v"}));
}

function prosesdata() {
	Swal.fire({
	title: 'Do you want to save the changes?',
	showDenyButton: true,
	showCancelButton: true,
	confirmButtonText: `Save`,
	denyButtonText: `Don't save`,
	}).then((result) => {
  		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
		Swal.fire('Saved!', '', 'success');
		savedata();
		} else if (result.isDenied) {
		Swal.fire('Changes are not saved', '', 'info')
		}
	})
};

function savedata() {
	var rows = [];
	$('tbody#tablepenjualan tr').each(function(i, n){
		var $row = $(n);
		rows.push({
			Item: 		$row.find('td:eq(0)').text(),
			Price:  	$row.find('td:eq(1)').text(),
			Qty:    	$row.find('td:eq(2)').text(),
			Disc:   	$row.find('td:eq(3)').text(),
			SubTotal:	$row.find('td:eq(4)').text(),
		});
	});

	var sumdata = Object.keys(rows).length;

	var data = [];
	
	for (let index = 1; index < sumdata; index++) {
		if(index%2==0)
		{} else
		{
			data.push(rows[index]);
		}
	}

	var dataarr = {data};

	var detailtransaksi = JSON.stringify(dataarr);
	var subtotally = $('#totalValue').val();
	var pajakly = $('#taxvalue').val();
	var totally = $('#totalValue1').val();
	var bayarly = $('#cashprocess').val();
	var bayar = accounting.unformat(bayarly,".");
	var bayarsana = accounting.formatMoney(bayar,{symbol:"Rp",format: "%s %v"})
	var kembalianly = $('#kembaliansaya').val();

	$.ajax({
		method: "POST",
		url: "php/user/insertsale.php",
		data: {
			"detail":detailtransaksi,
			"subtotal":subtotally,
			"pajak":pajakly,
			"total":totally,
			"bayar":bayarsana,
			"kembalian":kembalianly,
		},
		success: function(data){ 
                if (data == "Success") {
					Swal.fire(
							'Berhasil!',
							'Transaksi Berhasil!',
							'success'
					).then((result) => {
					/* Read more about isConfirmed, isDenied below */
						if (result.isConfirmed) {
							window.location.reload(false); 
						}
					})
				} else {
					Swal.fire(
							'Gagal!',
							'Transaksi Gagal!',
							'error'
					)
				} 
		},
	});
}
