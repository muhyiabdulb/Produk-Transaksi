<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::latest()->get();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create(Transaksi $transaksi)
    {
        return view('transaksi.create', compact('transaksi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_transaksi' => 'required',
            'kode_produk' => 'required',
            'quantity' => 'required',
        ]);
        
        $attr = $request->all();
        Transaksi::create($attr);
        

        return redirect()->route('transaksi.index');
    }

    public function show(Transaksi $transaksi)
    {
        return view('transaksi.show', compact('transaksi'));
    }

    public function edit(Transaksi $transaksi)
    {
        return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'kode_transaksi' => 'required',
            'kode_produk' => 'required',
            'quantity' => 'required',
        ]);

        $attr = $request->all();
        $transaksi->update($attr);

      
        return redirect()->route('transaksi.index');
    }

    public function destroy(Transaksi $transaksi)
    {
  
        $transaksi->delete();
   
        return redirect()->route('transaksi.index');
    }
}
