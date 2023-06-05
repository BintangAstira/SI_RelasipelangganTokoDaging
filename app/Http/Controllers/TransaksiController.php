<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $transaksi = Transaksi::all();
        return view('data.dTransaksiPenjualan', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('transaksipenjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'id_transaksip' => 'required',
            'id_riwayattransaksi' => 'required',
            'id_daging' => 'required',
            'Jumlah_Transaksi' => 'required',
            'tanggal' => 'required',
        ]);

        $transaksi = new Transaksi;
        $transaksi->id_transaksip = $request->id_transaksip;
        $transaksi->id_riwayattransaksi = $request->id_riwayattransaksi;
        $transaksi->id_daging = $request->id_daging;
        $transaksi->Jumlah_Transaksi = $request->Jumlah_Transaksi;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->save();
        return redirect()->route('transaksi.index')->with('success','transaksi has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_transaksip)
    {
        //
        $transaksi = Transaksi::find($id_transaksip);
        return view('transaksipenjualan.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
        $validatedData = $request->validate([
            'id_transaksip' => 'required',
            'id_riwayattransaksi' => 'required',
            'id_daging' => 'required',
            'Jumlah_Transaksi' => 'required',
            'tanggal' => 'required',
        ]);
        $transaksi->update($validatedData);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'transaksi deleted successfully');
    }
}
