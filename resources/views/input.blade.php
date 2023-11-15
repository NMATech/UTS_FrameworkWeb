@extends('layouts.template')

@section('main')
    <main>
        <div class="container mt-3">
            <div class="text-center">
                <h2>Add New Item</h2>
            </div>
            <div class="form bg-dark p-2 text-white rounded rounded-4">
                <form action="/view" method="post" class="p-2">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                    <div class="mb-3">
                        <label for="kodeBarang">Kode Barang:</label>
                        <br>
                        <input type="text" name="kodeBarang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="namaBarang">Nama Barang:</label>
                        <br>
                        <input type="text" name="namaBarang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jenisVarian">Jenis Varian:</label>
                        <br>
                        <input type="text" name="jenisVarian" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="qty">Qty:</label>
                        <br>
                        <input type="text" name="qty" class="form-control">
                        <div class="form-text text-white">Inputkan Banyaknya Barang yang diBeli</div>
                    </div>
                    <div class="mb-3">
                        <label for="hargaJual">Harga Jual:</label>
                        <br>
                        <input type="number" name="hargaJual" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center align-item-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection