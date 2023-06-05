<?php

namespace App\Http\Controllers;

use App\Models\PenukaranPoin;
use Illuminate\Http\Request;

class PenukaranPoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $penukaranpoin = PenukaranPoin::all();
        return view('data.dPenukaranPoin', compact('penukaranpoin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('penukaranpoin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'id_penukaranpoin' => 'required',
            'id_poin' => 'required',
            'id_pelanggan' => 'required',
            'id_konsumen' => 'required',
            'Jumlah_Transaksi' => 'required',
            'Total_Poin' => 'required',
            'Hadiah' => 'required',
        ]);

        $penukaranpoin = new PenukaranPoin;
        $penukaranpoin->id_penukaranpoin = $request->id_penukaranpoin;
        $penukaranpoin->id_poin = $request->id_poin;
        $penukaranpoin->id_pelanggan = $request->id_pelanggan;
        $penukaranpoin->id_konsumen = $request->id_konsumen;
        $penukaranpoin->Jumlah_Transaksi = $request->Jumlah_Transaksi;
        $penukaranpoin->Total_Poin = $request->Total_Poin;
        $penukaranpoin->Hadiah = $request->Hadiah;
        $penukaranpoin->save();
        
        return redirect()->route('penukaranpoin.index')->with('success','penukaranpoin has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PenukaranPoin $penukaranPoin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $penukaranpoin = PenukaranPoin::find($id);
        return view('penukaranpoin.edit', ['penukaranpoin' => $penukaranpoin]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PenukaranPoin $penukaranPoin)
    {
        //
        $validatedData = $request->validate([
            'id_penukaranpoin' => 'required',
            'id_poin' => 'required',
            'id_pelanggan' => 'required',
            'id_konsumen' => 'required',
            'Jumlah_Transaksi' => 'required',
            'Total_Poin' => 'required',
            'Hadiah' => 'required',
        ]);

            $penukaranPoin->update($validatedData);

        return redirect()->route('penukaranpoin.index')->with('success', 'penukaranpoin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PenukaranPoin $penukaranPoin)
    {
        //
        $penukaranPoin->delete();

        return redirect()->route('penukaranpoin.index')->with('success', 'Penukaran Poin deleted successfully');
    }
}
