<script src="{{ asset('js/customerMaster.js') }}"></script>
<h3>Halaman master customer</h3>
<button class="btn btn-primary" id='btnTambahCustomer'>Tambah Customer</button>
<p>
  <div class="container" id='divFormTambahCustomer' style="display:none;">
    <hr/>
  <div class="row">
    <div class="col-md">
      <table>
        <tr>
          <td>Nama</td>
          <td><input class="" id='txtNama' placeholder="Nama customer"></td>
        </tr>
        <tr>
          <td>No. Hp</td>
          <td><input class="" id='txtHp' placeholder="No Hp Customer"></td>
        </tr>
      </table>
<button class="btn btn-primary" id='btnSimpanCustomer' style="margin-top:12px;">Simpan</button>
<hr/>
    </div>
  </div>
</div>
</p>
<div id='divDataCustomer'>
<p>

<table id='users-table' class="table table-stripped table table-bordered">
<thead>
  <tr>
    <th><a href="#!">Nama</a></th>
    <th><a href="#!">No. Hp</a></th>
    <th><a href="#!">Total Transaksi</a></th>
    <th><a href="#!">Aksi</a></th>
  </tr>
  @foreach($customer as $cus)
  <tr>
    <td>{{$cus -> nama}}</td>
    <td>{{$cus -> no_hp}}</td>
    <td>@include('/master/cekTotalTransaksiCustomer', ['idCustomer' => $cus -> id_costumer])</td>
    <td style="text-align:center;">
      <button class='btn btn-success btnEdit' id='{{$cus -> id_costumer}}'><i class='fa fa-gears'></i> Edit</button>
      <button class='btn btn-success btnDetails' id='{{$cus -> id_costumer}}'><i class='fa fa-id-card'></i> Details</button>
    </td>
  </tr>
  @endforeach
</thead>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous" id='btnKembali'>
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next" id='btnSelanjutnya'>
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
  </ul>
  Page 1 of 22
</nav>
</p>
</div>
