@php
$adit = "Aditya";
$link = new mysqli('localhost','root','','dbs_pos_barbershop');
$kJumlahTransaksi = $link -> query("SELECT id FROM tbl_faktur WHERE id_costumer='$idCustomer';");
$jlhTransaksi = mysqli_num_rows($kJumlahTransaksi);
@endphp
<div class="capTotalTransaksi" id="">
{{$jlhTransaksi}}
</div>
