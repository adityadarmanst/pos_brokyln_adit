<script type="text/javascript">
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  $(document).ready(function(){
    $('#btnSimpan').click(function(){
      var nama = $('#txtNama').val();
      var email =  $('#txtEmail').val();
      $.ajax({
             type:'POST',
             url:'/proMasukanTest',
             data:{nama:nama,email:email},
             success:function(data){
                alert(data.nama);
             }
          });
    });
  });
</script>
<form class="" id="frmUpdate" method="post" action="{{ url('insert-ajax') }}">
Nama : <input id="txtNama" type="text"><br/>
Email : <input id="txtEmail" type="text"><br/>
</form>
<button id='btnSimpan'>Simpan</button>
