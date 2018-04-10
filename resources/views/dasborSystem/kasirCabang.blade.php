<script type="text/javascript">
  $(document).ready(function(){
    function loading(){
      $('#divUtamaKasir').html("Loading...");
    }
    $('#divUtamaKasir').load('berandaKasir');
    $('#btnBeranda').click(function(){
      loading();
      $('#divUtamaKasir').load('berandaKasir');
    });
  });
</script>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <button class="btn btn-primary btn-lg" id="btnBeranda">Beranda</button>&nbsp;&nbsp;&nbsp;&nbsp;
  </li>
  <li class="nav-item">
    <button class="btn btn-primary btn-lg">Kasir</button>&nbsp;&nbsp;&nbsp;&nbsp;
  </li>
  <li class="nav-item">
    <button class="btn btn-primary btn-lg">Customer</button>&nbsp;&nbsp;&nbsp;&nbsp;
  </li>
  <li class="nav-item">
    <button class="btn btn-primary btn-lg">Laporan</button>&nbsp;&nbsp;&nbsp;&nbsp;
  </li>
</ul>
<hr/>
<div class="" id='divUtamaKasir'>
  Coba keluar
</div>
