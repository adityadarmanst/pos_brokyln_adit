<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testingController extends Controller
{
    public function homePageAngluar()
    {
      return view('testing/angularHome');
    }

    public function linkAngular1()
    {
      echo "linkAngular1";
    }

}
