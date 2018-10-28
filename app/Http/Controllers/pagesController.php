<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function item() {
      return view ('pages.addItem');
    }


  public function edit() {
      return view ('pages.editRecord');
  }

  public function dSales(){
      return view('pages.displaySales');
  }
}
