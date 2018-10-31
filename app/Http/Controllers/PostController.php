<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use DB;

class PostController extends Controller
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  function insertSales(Request $reqSale) {
    $id = $reqSale->input('salesID');

    $data = array('salesID'=>$id);

    DB::table('sales')->insert($data);

    echo "YASMAN";
  }
}
