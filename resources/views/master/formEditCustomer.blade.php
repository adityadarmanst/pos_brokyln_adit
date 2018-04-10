<script type="text/javascript">
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){
      $('#btnSimpanCustomer').click(function(){
        var nama = $('#txtNama').val();
        var hp = $('#txtHp').val();
        $('#divEditCustomer').html("Update data ...");
        $.ajax({
               type:'POST',
               url:'proEditCustomer',
               data:{'namaCustomer':nama,'hp':hp,'idCustomer':'{{$customerData -> id_costumer}}'},
               success:function(data){
                  //alert(data.nama);
                  //console.log(data.message);
                  $('#divUtamaKasir').load('customerMaster');
               }
            });
      });
    });
</script>
<div class="row" id="divEditCustomer">
  <div class="col-md">
    <table>
      <tr>
        <td>Nama </td>
        <td><input class="" id='txtNama' placeholder="Nama customer" value="{{$customerData->nama}}"></td>
      </tr>
      <tr>
        <td>No. Hp</td>
        <td><input class="" disabled id='txtHp' placeholder="No Hp Customer" value="{{$customerData->no_hp}}"></td>
      </tr>
    </table>
<button class="btn btn-primary" id='btnSimpanCustomer' style="margin-top:12px;">Simpan</button>
<hr/>
  </div>
</div>
