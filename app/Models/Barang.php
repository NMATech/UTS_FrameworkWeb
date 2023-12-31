<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    private static $pembelanjaan, $diskon, $totalBayar, $data, $qty, $hargaJual;

    public function getData($kodeBarang, $namaBarang, $jenisVarian, $qty, $hargaJual)
    {
        $data = [
            "kodeBarang" => $kodeBarang,
            "namaBarang" => $namaBarang,
            "jenisVarian" => $jenisVarian,
            "qty" => $qty,
            "hargaJual" => $hargaJual
        ];

        $this->qty = $qty;
        $this->hargaJual = $hargaJual;

        return $data;
    }

    public function Data()
    {
        return $this->data;
    }

    public function setPembelanjaan()
    {
        $this->pembelanjaan = $this->qty * $this->hargaJual;

        return $this->pembelanjaan;
    }

    public function getDiskon()
    {
        if ($this->pembelanjaan >= 100000 && $this->pembelanjaan < 200000) {
            $this->diskon = $this->pembelanjaan * 0.1;
        } else if ($this->pembelanjaan >= 200000 && $this->pembelanjaan < 500000) {
            $this->diskon = $this->pembelanjaan * 0.2;
        } else if ($this->pembelanjaan >= 500000) {
            $this->diskon = $this->pembelanjaan * 0.5;
        }

        return $this->diskon;
    }

    public function getTotal()
    {
        $this->totalBayar = $this->pembelanjaan - $this->diskon;

        return $this->totalBayar;
    }
}