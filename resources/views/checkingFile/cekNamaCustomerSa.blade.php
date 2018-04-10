@php
$link = new mysqli('localhost','root','','dbs_pos_barbershop');
$kNama = $link -> query("SELECT nama FROM tbl_costumer WHERE id_costumer='$idCustomer';");
$fNama = $kNama -> fetch_array();
@endphp
<div class="capTotalTransaksi" id="">
{{$fNama['nama']}}
</div>
