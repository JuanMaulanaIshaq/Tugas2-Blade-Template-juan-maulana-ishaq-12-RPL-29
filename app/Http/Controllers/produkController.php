<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class produkController extends Controller
{
    public function index()
    {
        $getProduk = Produk::all();
        return view ('tampilan.produk', compact('getProduk'));
    }

    public function destroy()
    {
        $getProduk = Produk::find($id);
        $getProduk ->delete();

        return redirect() -back(); 
    }
    public function create()
    {
        return view('tampilan.createproduk');
    }
}
