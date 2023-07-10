<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function detail()
    {
        $products = Produk::all();
        return view('toko/admin', compact('products'));
    }
}

