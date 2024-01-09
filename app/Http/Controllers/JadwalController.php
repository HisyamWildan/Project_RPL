<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Jadwal;
use App\Models\Lokasi;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        $lokasi = Lokasi::all();
        return view('admin.jadwal.daftarjadwal', compact('jadwal','lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lokasi = Lokasi::all();
        return view('admin.jadwal.create', compact('lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_lokasi' => 'required',
            'biaya' => 'required',
            'kuota' => 'required',
        ]);

        Jadwal::create($validated);
        return redirect('/jadwal')->with('success', 'Jadwal berhasil ditambahkan');
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
        $jadwal = Jadwal::find($id);
        $lokasi = Lokasi::all();
        return view('admin.jadwal.edit', compact('jadwal','lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jadwal = Jadwal::find($id);

        $validateddata = $request->validate([
            'id_lokasi' => 'required',
            'biaya' => 'required',
            'kuota' => 'required',
        ]);

        $jadwal->update($validateddata);
        return redirect('/jadwal')->with('success', 'Jadwal berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect('/jadwal')->with('success', 'Jadwal berhasil dihapus');
    }
}
