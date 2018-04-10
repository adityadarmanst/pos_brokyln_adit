<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kasirController extends Controller
{
    function berandaDasar()
    {
      return view('beranda/berandaKasir');
    }
}
