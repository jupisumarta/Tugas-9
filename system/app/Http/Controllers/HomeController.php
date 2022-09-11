<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
    

    function showBeranda(){
        return view('admin.beranda');
    }

    function showProduk(){
        return view('produk');
    }

    function showKategori(){
        return view('admin.kategori');
    }

    function showUser(){
        return view('admin.user');
    }

    function showPelanggan(){
        return view('admin.pelanggan');
    }

    function showSupplier(){
        return view('admin.supplier');
    }

    function showCart(){
        return view('frontview.cart');
    }

    function showShop(){
        return view('frontview.shop');
    }

    function showShopproduk(){
        return view('frontview.shop-produk');
    }

    function test($produk, $hargaMin = 0, $hargaMax = 0){
    }
}