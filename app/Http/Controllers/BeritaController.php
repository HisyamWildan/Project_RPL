<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;



class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.daftarberita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_berita' => 'required | string',
            'isi_berita' => 'required | string',
            'tanggal' => 'required | date',
        ]);

        Berita::create($validated);
        return redirect('/berita')->with('success', 'Berita berhasil ditambahkan');
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
        $berita = Berita::find($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul_berita' => 'required | string',
            'isi_berita' => 'required | string',
            'tanggal' => 'required | date',
        ]);

        Berita::where('id', $id)->update($validated);
        return redirect('/berita')->with('success', 'Berita berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Berita::destroy($id);
        return redirect('/berita')->with('success', 'Berita berhasil dihapus');
    }
}
