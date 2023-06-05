<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;

class KritikSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kritiksaran = KritikSaran::all();
        return view('data.dKritikSaran', compact('kritiksaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('/kritikdansaran/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'id_sarankritik' => 'required',
            'id_pelanggan' => 'required',
            'id_konsumen' => 'required',
            'kritik' => 'required',
            'saran' => 'required',
            'tanggal' => 'required',
            'Email' => 'required',

        ]);

        $kritiksaran = new KritikSaran;
        $kritiksaran->id_sarankritik = $request->id_sarankritik;
        $kritiksaran-> id_pelanggan= $request->id_pelanggan;
        $kritiksaran->id_konsumen = $request->id_konsumen;
        $kritiksaran->kritik = $request->kritik;
        $kritiksaran->saran = $request->saran;
        $kritiksaran->tanggal = $request->tanggal;
        $kritiksaran->Email = $request->Email;
        
        $kritiksaran->save();
        return redirect()->route('/kritikdansaran/index')->with('success','kritiksaran has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(KritikSaran $kritikdansaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $kritiksaran = KritikSaran::find($id);
        return view('/kritikdansaran/edit', ['kritiksaran' => $kritiksaran]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KritikSaran $kritiksaran)
    {
        //
        $validatedData = $request->validate([
            'id_kritiksaran' => 'required',
            'id_pelanggan' => 'required',
            'id_konsumen' => 'required',
            'kritik' => 'required',
            'saran' => 'required',
            'tanggal' => 'required',
            'Email' => 'required',
        ]);

            $kritiksaran->update($validatedData);

        return redirect()->route('/kritikdansaran/index')->with('success', 'daging updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KritikSaran $kritiksaran)
    {
        //
        $kritiksaran->delete();

        return redirect()->route('/kritikdansaran/index')->with('success', 'daging deleted successfully');
    }
}
