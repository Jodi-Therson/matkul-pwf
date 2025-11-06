<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
    {
        $produk = "Aqua 1lt";
        return view('produk.index', compact('produk'));
    }

    public function show1()
    {
        $produk = ["Aqua 1Lt", "Beer", "Ayam Geprek", "Buku Motivasi", "React"];
        return view("produk/show1", compact('produk'));
    }

    public function show2()
    {
        $produk = ["Aqua 1Lt", "Beer", "Ayam Geprek", "Buku Motivasi", "React"];
        return view("produk/show2", compact('produk'));
    }
}
