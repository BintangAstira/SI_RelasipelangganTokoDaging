<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $supplier = Supplier::all();
        return view('data.dSupplier', compact('supplier'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'Nama_Supplier' => 'required',
            'No_Telp' => 'required',
            'Perusahaan' => 'required',
            'Alamat' => 'required',
            
        ]);

        $supllier = new Supplier;
        $supllier->Nama_Supplier = $request->Nama_Supplier;
        $supllier->No_Telp = $request->No_Telp;
        $supllier->Perusahaan = $request->Perusahaan;
        $supllier->Alamat = $request->Alamat;
        $supllier->save();
        return redirect()->route('supplier.index')->with('success','supllier has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $supplier = Supplier::find($id);
        return view('supplier.edit', ['supplier' => $supplier]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
        $validatedData = $request->validate([
            'Nama_Supplier' => 'required',
            'No_Telp' => 'required',
            'Perusahaan' => 'required',
            'Alamat' => 'required',
        ]);

            $supplier->update($validatedData);

        return redirect()->route('supplier.index')->with('success', 'supplier updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
         $supplier->delete();

        return redirect()->route('supplier.index')->with('success', 'Distributor deleted successfully');
    }

    public function exportpdf()
    { 
        $supplier = Supplier::all();
        $pdf = Pdf::loadView('supplier.pdf', compact('supplier'));
        return $pdf->stream('data_supplier.pdf');
    }
}
