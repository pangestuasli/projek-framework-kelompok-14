<?php

namespace App\Http\Controllers;

use App\Models\JenisDokumen;
use Illuminate\Http\Request;

class JenisDokumenController extends Controller
{
    public function index()
    {
        $jenisDokumen = JenisDokumen::orderBy('created_at', 'desc')->get();
        return view('jenis_dokumen.index', compact('jenisDokumen'));
    }

    public function create()
    {
        return view('jenis_dokumen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:jenis_dokumen,nama',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:aktif,tidak_aktif'
        ]);

        JenisDokumen::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status
        ]);

        return redirect()->route('jenis_dokumen.index')->with('success', 'Jenis dokumen berhasil ditambahkan');
    }

    public function show($id)
    {
        $jenisDokumen = JenisDokumen::findOrFail($id);
        return view('jenis_dokumen.show', compact('jenisDokumen'));
    }

    public function edit($id)
    {
        $jenisDokumen = JenisDokumen::findOrFail($id);
        return view('jenis_dokumen.edit', compact('jenisDokumen'));
    }

    public function update(Request $request, $id)
    {
        $jenisDokumen = JenisDokumen::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255|unique:jenis_dokumen,nama,' . $id,
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:aktif,tidak_aktif'
        ]);

        $jenisDokumen->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status
        ]);

        return redirect()->route('jenis_dokumen.index')->with('success', 'Jenis dokumen berhasil diperbarui');
    }

    public function destroy($id)
    {
        $jenisDokumen = JenisDokumen::findOrFail($id);
        $jenisDokumen->delete();

        return redirect()->route('jenis_dokumen.index')->with('success', 'Jenis dokumen berhasil dihapus');
    }
}
