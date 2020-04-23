<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Tes</title>
  </head>
  <body>
  <div class="container">
   <h1>Kasir</h1>
    <div class="row mt-3">
        <div class="input-group mb-3">
        <label class="col-1">Pembeli</label>
        <input type="text" placeholder="Nama Pembeli">
        </div>
        <div class="input-group mb-3">
        <label class="col-1">Kasir</label>
        <input type="text" placeholder="Nama Kasir">
        </div>
        <div class="input-group mb-3">
        <label class="col-1">Tanggal</label>
        <input type="date">
        </div>
    </div>
    
        


<table class="table text-center">
        <thead class="thead-dark">
            <tr>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Diskon</th>
                <th>Subtotal</th>
                <th><button id="tambah">Tambah</button></th>
            </tr>
        </thead>
        <tbody>
        <form id="data">
        <tr id="c">
            <td><input type="text" placeholder="Nama Barang"></td>
            <td><input name="jasa[]" type="text" id="jasa-0" class="hitung"></td>
            <td><input name="satuan[]" type="text" id="satuan-0" class="hitung"></td>
            <td><input name="diskon[]" type="text" id="diskon-0" class="hitung"> </td>
            <td><input name="subtotal[]" type="text" id="total-0" class="total" readonly="readonly"></td>
            <td><button class="btn btn-danger" id="hapus">x</button></td>            
        </tr>
        <tbody id="plus"></tbody>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="7" class="text-right">
            Subtotal <input name="alltotal" type="text" id="total" readonly="readonly"><br>
            PPN 10% <input name="ppn" type="text" id="ppn" readonly="readonly"><br>
            Grand Total  <input name="gatot" type="text" id="gatot" readonly="readonly">
            </td>
        </tr>   
        </tfoot>
        </form> 
        
        
    </table>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
$('#tambah').click(function() {

var i = $('input').size() + 1,
input = '<tr id="c"><td><input type="text" placeholder="Nama Barang"></td>';
input += '<td><input name="jasa[]" type="text" id="jasa-' + i + '" class="hitung"></td>';
input += '<td><input name="satuan[]" type="text" id="satuan-' + i + '" class="hitung"></td>';
input += '<td><input name="diskon[]" type="text" id="diskon-' + i + '" class="hitung"> </td>';
input += '<td><input name="subtotal[]" type="text" id="total-' + i + '" class="total" readonly="readonly"></td>';
input += '<td><button class="btn btn-danger" id="hapus">x</button></td></tr>';


$('#plus').append(input);

i++;
return false;

});

// proses menghapus inputan
$('body').on('click', '#hapus', function() {

$('#c').remove();

});


// proses menghitung total value inputan
$('body').on('focus', '.hitung', function() {
    var aydi = $(this).attr('id'),
		berhitung = aydi.split('-');
    $(this).keydown(function() {
        setTimeout(function() {
            var satuan = ($('#satuan-' + berhitung[1]).val() != '' ? $('#satuan-' + berhitung[1]).val() : 0),
                jasa = ($('#jasa-' + berhitung[1]).val() != '' ? $('#jasa-' + berhitung[1]).val() : 0),
                diskon = ($('#diskon-' + berhitung[1]).val() != '' ? $('#diskon-' + berhitung[1]).val() : 0),
                subtotal = parseInt(satuan) * parseInt(jasa) - parseInt(diskon);
            if (!isNaN(subtotal)) {
                $('#total-' + berhitung[1]).val(subtotal);
				var alltotal = 0;
				$('.total').each(function(){
					alltotal += parseFloat($(this).val());
				});
                $('#total').val(alltotal);
                ppn = parseInt(alltotal)*10/100;
                $('#ppn').val(ppn);
                gatot = parseInt(alltotal)+parseInt(ppn);
                $('#gatot').val(gatot);
            }
        }, 50);
    });
});

</script>

  </body>
</html>