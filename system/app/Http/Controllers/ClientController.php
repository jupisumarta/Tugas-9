<?php

namespace App\Http\Controllers;
use App\Models\Produk;


class ClientController extends Controller {
    function showShop()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.shop', $data);
    }

    function showDetail(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('frontview.detail', $data);
    }
    
    // function showProduct()
    // {
    //     return view('frontview.product');
    // }

    function showShopproduk(Produk $produk)
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.shop-produk', $data);
    }

    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        // $data['harga_min'] = $harga_min = request('harga_min');
        // $data['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        // $data['list_produk'] = Produk::whereIn('stok', "%$nama%")->get();
        // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
        // $data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
        // $data['list_produk'] = Produk::whereNull('stok')->get();
        // $data['list_produk'] = Produk::whereNotNull('stok')->get();
        // $data['list_produk'] = Produk::whereDate('created_at', ['2022-09-06', '2022-09-01'])->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');


        return view('frontview.shop-produk', $data);
    }
}