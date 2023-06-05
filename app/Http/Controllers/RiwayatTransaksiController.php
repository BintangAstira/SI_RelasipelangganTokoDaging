<?php

namespace App\Http\Controllers;

use App\Models\RiwayatTransaksi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RiwayatTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $riwayattransaksi = RiwayatTransaksi::all();
        return view('data.dRiwayatTransaksi', compact('riwayattransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('riwayattransaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'id_riwayattransaksi' => 'required',
            'id_pelanggan' => 'required',
            'id_konsumen' => 'required',
            'jumlah_barang' => 'required',
            'tanggal_transaksi' => 'required',
            'total' => 'required',
            'Metode_bayar' => 'required',
        ]);

        $riwayattransaksi = new RiwayatTransaksi;
        $riwayattransaksi-> id_riwayattransaksi = $request->id_riwayattransaksi;
        $riwayattransaksi->id_pelanggan = $request->id_pelanggan;
        $riwayattransaksi->id_konsumen = $request->id_konsumen;
        $riwayattransaksi->jumlah_barang = $request->jumlah_barang;
        $riwayattransaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $riwayattransaksi->total = $request->total;
        $riwayattransaksi->Metode_bayar = $request->Metode_bayar;
        $riwayattransaksi->save();
        return redirect()->route('riwayattransaksi.index')->with('success','riwayattransaksi has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(RiwayatTransaksi $riwayatTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $riwayattransaksi = RiwayatTransaksi::find($id);
        return view('riwayattransaksi.edit', ['riwayattransaksi' => $riwayattransaksi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RiwayatTransaksi $riwayattransaksi)
    {
        //
        $validatedData = $request->validate([
            'id_riwayattransaksi' => 'required',
            'id_pelanggan' => 'required',
            'id_konsumen' => 'required',
            'jumlah_barang' => 'required',
            'tanggal_transaksi' => 'required',
            'total' => 'required',
            'Metode_bayar' => 'required',
        ]);
        $riwayattransaksi->update($validatedData);

        return redirect()->route('riwayattransaksi.index')->with('success', 'pin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RiwayatTransaksi $riwayattransaksi)
    {
        //
        $riwayattransaksi->delete();

        return redirect()->route('riwayattransaksi.index')->with('success', 'Poin deleted successfully');
    }

    public function exportpdf()
    { 
        $riwayattransaksi = RiwayatTransaksi::all();
        $pdf = Pdf::loadView('riwayattransaksi.pdf', compact('riwayattransaksi'));
        return $pdf->stream('data_riwayattransaksi.pdf');
    }
}
