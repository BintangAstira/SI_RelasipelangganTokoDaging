<?php

namespace App\Http\Controllers;

use App\Models\Daging;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DagingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $daging = Daging::all();
        return view('data.dDaging', compact('daging'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('daging.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'id_daging' => 'required',
            'id_pegawai' => 'required',
            'kode_daging' => 'required',
            'harga' => 'required',
            'merk' => 'required',
            'total' => 'required',
            'tanggal' => 'required',
        ]);

        $daging = new Daging;
        $daging->id_daging = $request->id_daging;
        $daging->id_pegawai = $request->id_pegawai;
        $daging->kode_daging = $request->kode_daging;
        $daging->harga = $request->harga;
        $daging->merk = $request->merk;
        $daging->total = $request->total;
        $daging->tanggal = $request->tanggal;
        $daging->save();
        return redirect()->route('daging.index')->with('success','daging has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daging $daging)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $daging = Daging::find($id);
        return view('daging.edit', ['daging' => $daging]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daging $daging)
    {
        //
        $validatedData = $request->validate([
            'id_daging' => 'required',
            'id_pegawai' => 'required',
            'kode_daging' => 'required',
            'harga' => 'required',
            'merk' => 'required',
            'total' => 'required',
            'tanggal' => 'required',
        ]);

            $daging->update($validatedData);

        return redirect()->route('daging.index')->with('success', 'daging updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daging $daging)
    {
        //
        $daging->delete();

        return redirect()->route('daging.index')->with('success', 'daging deleted successfully');
    }

    public function exportpdf()
    { 
        $daging = Daging::all();
        $pdf = Pdf::loadView('daging.pdf', compact('daging'));
        return $pdf->stream('data_daging.pdf');
    }
}
