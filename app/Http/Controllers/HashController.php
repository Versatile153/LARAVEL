<?php

namespace App\Http\Controllers;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\HashController;

class HashController extends Controller
{
  public function hashid(){
      $id='12345versatile';
      $hashids=new Hashids();

      $id=$hashids->encode($id);
      dd($id);
  }
}
