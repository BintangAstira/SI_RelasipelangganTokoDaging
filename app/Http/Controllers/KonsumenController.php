<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $konsumen = Konsumen::all();
        return view('data.dKonsumen', compact('konsumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('konsumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            
        ]);

        $konsumen = new Konsumen;
        $konsumen->nama = $request->nama;
        $konsumen->no_telp = $request->no_telp;
        $konsumen->alamat = $request->alamat;
        $konsumen->save();
        return redirect()->route('konsumen.index')->with('success','Konsumen has been created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Konsumen $konsumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $konsumen = Konsumen::find($id);
        return view('konsumen.edit', ['konsumen' => $konsumen]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Konsumen $konsumen)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            
            // Add validation for other fields
        ]);

        $konsumen->update($validatedData);

        return redirect()->route('konsumen.index')->with('success', 'konsumen updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konsumen $konsumen)
    {
        //
        $konsumen->delete();

        return redirect()->route('konsumen.index')->with('success', 'Konsumen deleted successfully');
    }


    public function exportpdf()
    { 
        $konsumen = Konsumen::all();
        $pdf = Pdf::loadView('konsumen.pdf', compact('konsumen'));
        return $pdf->stream('data_konsumen.pdf');
    }
}
