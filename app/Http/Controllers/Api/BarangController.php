<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        return response()->json($barangs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string',
            'kode' => 'required|string|unique:barangs,kode',
            'kategori' => 'required|string',
            'lokasi' => 'required|string',
        ]);

        $barang = Barang::create($request->all());

        return response()->json($barang, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Barang $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return response()->json($barang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Barang $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required|string',
            'kode' => 'required|string|unique:barangs,kode,' . $barang->id,
            'kategori' => 'required|string',
            'lokasi' => 'required|string',
        ]);

        $barang->update($request->all());

        return response()->json($barang);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Barang $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return response()->json(['message' => 'Barang deleted successfully']);
    }
}
