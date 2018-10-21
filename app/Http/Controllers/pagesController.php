<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function item() {
      return view ('pages.addItem');
    }
}
