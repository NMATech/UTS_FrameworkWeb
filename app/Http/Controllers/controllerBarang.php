<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class controllerBarang extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("input");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = new Barang();

        $kodeBarang = $request->input('kodeBarang');
        $namaBarang = $request->input('namaBarang');
        $jenisVarian = $request->input('jenisVarian');
        $qty = $request->input('qty');
        $hargaJual = $request->input('hargaJual');

        return view('data', [
            'data' => $barang->getData($kodeBarang, $namaBarang, $jenisVarian, $qty, $hargaJual),
            'totalPembelanjaan' => $barang->setPembelanjaan($qty, $hargaJual),
            'diskon' => $barang->getDiskon(),
            'total' => $barang->getTotal()
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}