<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
  
    public function addmarkets (){

        return view('dashboard.admin.addmarkets');
    }
}
