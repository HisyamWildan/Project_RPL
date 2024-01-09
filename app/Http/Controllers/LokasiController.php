<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lokasi;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokasi = Lokasi::all();
        return view('admin.lokasi.daftarlokasi', compact('lokasi'));
        
    }

    /**
     * Show the form for creating a new resource.
     */     
    public function create()
    {
        return view('admin.lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lokasi' => 'required | string | max:255',
            'alamat' => 'required | string',
            'jenis_olahraga' => 'required | string',
            'tanggal' => 'required | date',
            'waktu' => 'required',
        ]);

        Lokasi::create($validated);
        return redirect('/lokasi')->with('success', 'Lokasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lokasi = Lokasi::find($id);
        return view('admin.lokasi.edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lokasi = Lokasi::find($id);

        $validated = $request->validate([
            'nama_lokasi' => 'required | string | max:255',
            'alamat' => 'required | string',
            'jenis_olahraga' => 'required | string',
            'tanggal' => 'required | date',
            'waktu' => 'required',
        ]);

        $lokasi->update($validated);
        return redirect('/lokasi')->with('success', 'Lokasi berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $lokasi = Lokasi::find($id);
        $lokasi->delete();
        return redirect('/lokasi')->with('success', 'Lokasi berhasil dihapus');
    }
}
