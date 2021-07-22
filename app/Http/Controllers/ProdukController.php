<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::latest()->get();
        return view('produk.index', compact('produks'));
    }

    public function create(Produk $produk)
    {
        return view('produk.create', compact('produk'));
    }

    public function store(Request $request)
    {
        $number = Produk::count();
        if($number > 0)
        {
            $number = Produk::max('kode_produk');
            $strnum = substr($number, 3, 3);
            $strnum = $strnum + 1;
            if (strlen($strnum) == 4) {
                $kode = 'P' . $strnum;
            } else if (strlen($strnum) == 3) {
                $kode = 'P' . "0" . $strnum;
            } else if (strlen($strnum) == 2) {
                $kode = 'P' . "00" . $strnum;
            } else if (strlen($strnum) == 1) {
                $kode = 'P' . "000" . $strnum;
            }
        } else {
            $kode = 'P' . "001";
        }

        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
        ]);
        
        $attr = $request->all();
        $attr['kode_produk'] = $kode;
        Produk::create($attr);
        

        return redirect()->route('produks.index');
    }

    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
        ]);

        $attr = $request->all();
        $produk->update($attr);

      
        return redirect()->route('produks.index');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
       
        return redirect()->route('produks.index');
    }
}
