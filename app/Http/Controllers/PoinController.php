<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use Illuminate\Http\Request;

class PoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $poin = Poin::all();
        return view('data.dPoin', compact('poin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('poin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'id_pelanggan' => 'required',
            'id_konsumen' => 'required',
            'Jumlah_Transaksi' => 'required',
            'Total_Poin' => 'required',
            
        ]);

        $poin = new Poin;
        $poin->id_pelanggan = $request->id_pelanggan;
        $poin->id_konsumen = $request->id_konsumen;
        $poin->Jumlah_Transaksi = $request->Jumlah_Transaksi;
        $poin->Total_Poin = $request->Total_Poin;
        $poin->save();
        return redirect()->route('poin.index')->with('success','poin$poin has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Poin $poin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
        public function edit($id)
    {
        //
        $poin = Poin::find($id);
        return view('poin.edit', ['poin' => $poin]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poin $poin)
    {
        //
        $validatedData = $request->validate([
            'id_pelanggan' => 'required',
            'id_konsumen' => 'required',
            'Jumlah_Transaksi' => 'required',
            'Total_Poin' => 'required',
        ]);

            $poin->update($validatedData);

        return redirect()->route('poin.index')->with('success', 'pin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poin $poin)
    {
        //
        $poin->delete();

        return redirect()->route('poin.index')->with('success', 'Poin deleted successfully');
    }
}
