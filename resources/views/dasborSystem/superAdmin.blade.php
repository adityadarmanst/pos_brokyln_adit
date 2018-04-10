<script src="{{ asset('js/superAdminJs.js') }}"></script>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <button class="btn btn-primary btn-lg" id="btnBeranda">Beranda</button>&nbsp;&nbsp;&nbsp;&nbsp;
  </li>

  <li class="nav-item">
    <button class="btn btn-primary btn-lg" id="btnCustomer">Customer</button>&nbsp;&nbsp;&nbsp;&nbsp;
  </li>
  <li class="nav-item">
    <div class="dropdown">
  <button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Laporan
  </button>&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#!">Transaksi</a>
    <a class="dropdown-item" href="#!">Cabang</a>
  </div>
</div>
  </li>
  <li class="nav-item">
    <div class="dropdown">
  <button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Setting
  </button>&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#!">Cabang</a>
    <a class="dropdown-item" href="#!">Stylish</a>
    <a class="dropdown-item" href="#!">User</a>
  </div>
</div>
  </li>
  <li class="nav-item">
    <button class="btn btn-primary btn-lg" id='btnInventory'>Inventory</button>&nbsp;&nbsp;&nbsp;&nbsp;
  </li>
  <li class="nav-item">
    <button class="btn btn-primary btn-lg" id='btnTes'>Tes</button>&nbsp;&nbsp;&nbsp;&nbsp;
  </li>
</ul>
<hr/>
<div class="" id='divUtamaKasir'>
<i class='fa fa-spin fa-refresh'></i> Loading ...
</div>
