<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductTable extends Controller
{
    public function index(){
        return view('produit');
    }
}
