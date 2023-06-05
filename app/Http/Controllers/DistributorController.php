<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $distributor = Distributor::get();
        return view('data.dDistributor', compact('distributor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('distributor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'Nama_Dis' => 'required',
            'No_Telp' => 'required',
            'Jumlah_Stok' => 'required',
            'Email' => 'required',
            
        ]);

        $distributor = new Distributor;
        $distributor->Nama_Dis = $request->Nama_Dis;
        $distributor->No_Telp = $request->No_Telp;
        $distributor->Jumlah_Stok = $request->Jumlah_Stok;
        $distributor->Email = $request->Email;
        $distributor->save();
        return redirect()->route('distributor.index')->with('success','distributor has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Distributor $distributor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $distributor = Distributor::find($id);
        return view('distributor.edit', ['distributor' => $distributor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Distributor $distributor)
    {
        //
        $validatedData = $request->validate([
            'Nama_Dis' => 'required',
            'No_Telp' => 'required',
            'Jumlah_Stok' => 'required',
            'Email' => 'required',
            
            // Add validation for other fields
        ]);

        $distributor->update($validatedData);

        return redirect()->route('distributor.index')->with('success', 'Distributor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Distributor $distributor)
    {
        //
        $distributor->delete();

        return redirect()->route('distributor.index')->with('success', 'Distributor deleted successfully');
    }

    public function exportpdf()
    { 
        $distributor = Distributor::all();
        $pdf = Pdf::loadView('distributor.pdf', compact('distributor'));
        return $pdf->stream('data_distributor.pdf');
    }
}
