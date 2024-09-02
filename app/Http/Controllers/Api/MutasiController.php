<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mutasi;
use App\Models\Barang;
use App\Models\User;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mutasis = Mutasi::with(['barang', 'user'])->get();
        return response()->json($mutasis);
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
            'barang_id' => 'required|exists:barangs,id',
            'user_id' => 'required|exists:users,id',
            'tanggal' => 'required|date',
            'jenis_mutasi' => 'required|string',
            'jumlah' => 'required|integer',
        ]);

        $mutasi = Mutasi::create($request->all());

        return response()->json($mutasi, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Mutasi $mutasi
     * @return \Illuminate\Http\Response
     */
    public function show(Mutasi $mutasi)
    {
        $mutasi->load(['barang', 'user']);
        return response()->json($mutasi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Mutasi $mutasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mutasi $mutasi)
    {
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'user_id' => 'required|exists:users,id',
            'tanggal' => 'required|date',
            'jenis_mutasi' => 'required|string',
            'jumlah' => 'required|integer',
        ]);

        $mutasi->update($request->all());

        return response()->json($mutasi);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Mutasi $mutasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mutasi $mutasi)
    {
        $mutasi->delete();
        return response()->json(['message' => 'Mutasi deleted successfully']);
    }

    /**
     * Display the history of mutasi for a specific barang.
     *
     * @param \App\Models\Barang $barang
     * @return \Illuminate\Http\Response
     */
    public function historyForBarang(Barang $barang)
    {
        $mutasis = $barang->mutasi;
        return response()->json($mutasis);
    }

    /**
     * Display the history of mutasi for a specific user.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function historyForUser(User $user)
    {
        $mutasis = $user->mutasi;
        return response()->json($mutasis);
    }
}
