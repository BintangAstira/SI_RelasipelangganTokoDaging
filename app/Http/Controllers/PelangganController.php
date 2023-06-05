<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pelanggan = Pelanggan::all();
        return view('data.dPelanggan', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            
        ]);

        $pelanggan = new Pelanggan;
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_telp = $request->no_telp;
        $pelanggan->save();
        return redirect()->route('pelanggan.index')->with('success','pelanggan has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.edit', ['pelanggan' => $pelanggan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

            $pelanggan->update($validatedData);

        return redirect()->route('pelanggan.index')->with('success', 'pelanggan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        //
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan deleted successfully');
    }
    public function exportpdf()
    { 
        $pelanggan = Pelanggan::all();
        $pdf = Pdf::loadView('pelanggan.pdf', compact('pelanggan'));
        return $pdf->stream('data_pelanggan.pdf');
    }
}
