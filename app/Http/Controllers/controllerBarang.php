<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelBarang;

class controllerBarang extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("data", [
            "datas" => modelBarang::all()
        ]);
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
        $barang = new modelBarang();

        $kodeBarang = $request->input('kodeBarang');
        $namaBarang = $request->input('namaBarang');
        $jenisVarian = $request->input('jenisVarian');
        $qty = $request->input('qty');
        $hargaJual = $request->input('hargaJual');
        $pembelanjaan = $qty * $hargaJual;

        if ($pembelanjaan >= 100000 && $pembelanjaan < 200000) {
            $diskon = $pembelanjaan * 0.1;
        } else if ($pembelanjaan >= 200000 && $pembelanjaan < 500000) {
            $diskon = $pembelanjaan * 0.2;
        } else if ($pembelanjaan >= 500000) {
            $diskon = $pembelanjaan * 0.5;
        }

        $total = $pembelanjaan - $diskon;

        modelBarang::create([
            'kodeBarang' => $kodeBarang,
            'namaBarang' => $namaBarang,
            'jenisVarian' => $jenisVarian,
            'hargaJual' => $hargaJual,
            'qty' => $qty,
            'totalBelanja' => $pembelanjaan,
            'diskon' => $diskon,
            'total' => $total,
        ]);

        echo "<script>alert('Data berhasil masuk!');</script>";

        return view('contoh');
    }

    public function viewEdit($id)
    {
        $barang = modelBarang::find($id);

        return view('editData', [
            'data' => $barang,
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
    public function edit(Request $request)
    {
        $barang = new Barang();

        $kodeBarang = $request->input('kodeBarang');
        $namaBarang = $request->input('namaBarang');
        $jenisVarian = $request->input('jenisVarian');
        $qty = $request->input('qty');
        $hargaJual = $request->input('hargaJual');

        return view('data', [
            'data' => $barang->getData($kodeBarang, $namaBarang, $jenisVarian, $qty, $hargaJual),
            'totalPembelanjaan' => $barang->setPembelanjaan(),
            'diskon' => $barang->getDiskon(),
            'total' => $barang->getTotal()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = modelBarang::find($id);

        $kodeBarang = $request->input('kodeBarang');
        $namaBarang = $request->input('namaBarang');
        $jenisVarian = $request->input('jenisVarian');
        $qty = $request->input('qty');
        $hargaJual = $request->input('hargaJual');

        $pembelanjaan = $qty * $hargaJual;

        if ($pembelanjaan >= 100000 && $pembelanjaan < 200000) {
            $diskon = $pembelanjaan * 0.1;
        } else if ($pembelanjaan >= 200000 && $pembelanjaan < 500000) {
            $diskon = $pembelanjaan * 0.2;
        } else if ($pembelanjaan >= 500000) {
            $diskon = $pembelanjaan * 0.5;
        }

        $total = $pembelanjaan - $diskon;

        $data->update([
            'kodeBarang' => $kodeBarang,
            'namaBarang' => $namaBarang,
            'jenisVarian' => $jenisVarian,
            'hargaJual' => $hargaJual,
            'qty' => $qty,
            'totalBelanja' => $pembelanjaan,
            'diskon' => $diskon,
            'total' => $total,
        ]);

        return view('data', [
            "datas" => modelBarang::all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}