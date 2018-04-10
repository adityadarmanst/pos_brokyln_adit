$(document).ready(function(){
  function loading(){
    $('#divUtamaKasir').html("<i class='fa fa-spin fa-refresh'></i> Loading...");
  }
  //
  $('#divUtamaKasir').load('berandaDasarSuperAdmin');
  //
  $('#btnBeranda').click(function(){
    loading();
    $('#divUtamaKasir').load('berandaDasarSuperAdmin');
  });
  //
  $('#btnCustomer').click(function(){
    loading();
    $('#divUtamaKasir').load('customerMaster');
  });

  $('#btnRiwayatTransaksi').click(function(){
    loading();
    $('#divUtamaKasir').load('riwayatTransaksiSuperAdmin');
  });


  $('#btnTes').click(function(){
    $('#divUtamaKasir').load('testMasukanForm');
  });
});
