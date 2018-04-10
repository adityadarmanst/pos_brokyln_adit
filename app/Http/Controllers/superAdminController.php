<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Yajra\Datatables\Facades\Datatables;
use App\tbl_customer;

class superAdminController extends Controller
{
  function berandaDasarSuperAdmin()
  {
    //return view('beranda/berandaSuperAdmin');
  }

  function customerMaster()
  {
    $tampilCustomer = DB::table('tbl_costumer') -> skip(0) -> take(100) -> orderByRaw('id DESC') -> get();

    return view('master/masterCustomer',['customer' => $tampilCustomer]);
  }

  function cekTotalTransaksiCustomer($idCustomer)
  {
    echo $idCustomer;
    //$totalUser = DB::table('tbl_customer')->count();
    //echo $totalUser;
    //return response()->json(['totalTransaksi' => $totalUser]);
  }

  public function totalTransaksiCustomer()
  {
    echo "1";
  }
  public function formEditCustomer($idCustomer)
  {
    $idCustomer = $idCustomer;
    $customerData = DB::table('tbl_costumer')->where('id_costumer', $idCustomer)->first();
    return view('master/formEditCustomer',['customerData' => $customerData]);
  }

  public function proEditCustomer(Request $request)
   {
      $idCustomer = request() -> idCustomer;
      $namaCustomer = request() -> namaCustomer;
      $hp = request() -> hp;

      DB::table('tbl_costumer')
              ->where('id_costumer', $idCustomer)
              ->update(array('nama' => $namaCustomer, 'no_hp' => $hp));
    }

  public function proTambahCustomer(Request $request)
  {
    $input = request() -> all();
    $namaCustomer = request() -> namaCustomer;
    $hp = request() -> hp;
    $idCustomer = str_random(10);
    DB::table('tbl_costumer') -> insert([
    ['id_costumer'=> $idCustomer,'nama' => $namaCustomer,'no_hp' => $hp,'email' => '-','active'=>'y']
    ]);
    return response()->json(['message' => $namaCustomer]);
  }
  public function testMasukanForm()
  {
    return view('master/formTes');
  }

  public function proMasukanTest(Request $request)
    {
        $input = request()->all();
        $nama = request() -> nama;
        $email = request() -> email;
        DB::table('tbl_test') -> insert(['nama' => $nama, 'email' => $email]);
        return response()->json(['success'=>'Got Simple Ajax Request.','nama' =>$nama]);
    }



}
