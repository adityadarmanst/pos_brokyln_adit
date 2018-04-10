<table id='users-table' class="table table-stripped table table-bordered">
  <tr>
    <th><a href="#!">No</a></th>
    <th><a href="#!">No. Faktur</a></th>
    <th><a href="#!">Tanggal</a></th>
    <th><a href="#!">Customer</a></th>
    <th><a href="#!">Cabang</a></th>
    <th><a href="#!">Total</a></th>
    <th><a href="#!">Aksi</a></th>
  </tr>
  @php
	$no=1;
  @endphp
  @foreach($tampilRiwayatTransaksi as $rt)
  	<tr>
    <th>{{$no}}</th>
    <th>{{$rt -> no_faktur}}</th>
    <th>
    	@php
    	$dasar = $rt -> tanggal;
    	$pecah = explode('-',$dasar);
    	$tglIndo = $pecah[2].'/'.$pecah[1].'/'.$pecah[0];
    	@endphp
    	{{$tglIndo}}
    </th>
    <th>@include('checkingFile/cekNamaCustomerSa', ['idCustomer' => $rt -> id_costumer])</th>
    <th>{{$rt -> id_cabang}}</th>
    <th>Rp. {{number_format($rt -> total_harga)}}</th>
    <th>
    	<button class="btn btn-sm btn-success btnDetails" id='{{$rt -> no_faktur}}'><i class='fa fa fa-pencil-square-o'></i></button>
    	<a href="{{ url('/cetakStruk/aaa') }}" target="new"><button class="btn btn-sm btn-success btnDetails" id='{{$rt -> no_faktur}}'><i class='fa fa-print'></i></button></a>
    </th>
  </tr>
	@php
	$no++;
  @endphp
  @endforeach
</table>