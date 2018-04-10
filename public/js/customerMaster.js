$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  $(document).ready(function(){
    $('#divFormTambahCustomer').hide();
    $('.btnEdit').click(function(){
        var idCostumer = $(this).attr('id');
        var urlGet = 'formEditCustomer/'+idCostumer;
        $('#divUtamaKasir').html("Loading form...");
        $('#divUtamaKasir').load(urlGet);
    });
    $('#btnTambahCustomer').click(function(){
      $('#divFormTambahCustomer').show();
    });

    $('#btnSimpanCustomer').click(function(){
      var nama = $('#txtNama').val();
      var hp = $('#txtHp').val();

      if(nama==''){
        $('#txtNama').focus();
      }else if(hp==''){
        $('#txtHp').focus();
      }else{
          $('#divDataCustomer').html("<i class='fa fa-spin fa-refresh'></i> Insert data ....");
        $.ajax({
               type:'POST',
               url:'proTambahCustomer',
               data:{'namaCustomer':nama,'hp':hp},
               success:function(data){
                  //alert(data.nama);
                  console.log(data.message);
                  $('#divUtamaKasir').load('customerMaster');
               }
            });
      }
    });
  });
