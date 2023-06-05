<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pegawai = Pegawai::all();
        return view('data.dPegawai', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'Nama_Pegawai' => 'required',
            'Alamat' => 'required',
            'No_Telp' => 'required',
            'Email' => 'required',
            
            
        ]);

        $pegawai = new Pegawai;
        $pegawai->Nama_Pegawai = $request->Nama_Pegawai;
        $pegawai->No_Telp = $request->No_Telp;
        $pegawai->Alamat = $request->Alamat;
        $pegawai->Email = $request->Email;
        $pegawai->save();
        return redirect()->route('pegawai.index')->with('success','pegawai has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', ['pegawai' => $pegawai]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
        $validatedData = $request->validate([
            'Nama_Pegawai' => 'required',
            'Alamat' => 'required',
            'No_Telp' => 'required',
            'Email' => 'required',
            
            // Add validation for other fields
        ]);

        $pegawai->update($validatedData);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        //
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'pegawai deleted successfully');
    }
}
