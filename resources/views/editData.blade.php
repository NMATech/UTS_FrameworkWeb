@extends('layouts.template')

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Edit</h4>
                <p class="card-description">
                    Edit data barang {{ $data['kodeBarang'] }}
                </p>
                <form action="/update/{{ $data['id'] }}" method="POST" class="forms-sample">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="kodeBarang">Kode Barang</label>
                        <input type="text" class="form-control" name="kodeBarang" placeholder="Kode Barang"
                            value="{{ $data['kodeBarang'] }}">
                    </div>
                    <div class="form-group">
                        <label for="namaBarang">Nama Barang</label>
                        <input type="text" class="form-control" name="namaBarang" placeholder="Nama Barang"
                            value="{{ $data['namaBarang'] }}">
                    </div>
                    <div class="form-group">
                        <label for="jenisVarian">Jenis Varian</label>
                        <input type="text" class="form-control" name="jenisVarian" placeholder="Jenis Varian"
                            value="{{ $data['jenisVarian'] }}">
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="number" class="form-control" name="qty" placeholder="Qty"
                            value="{{ $data['qty'] }}">
                    </div>
                    <div class="form-group">
                        <label for="hargaJual">harga Jual</label>
                        <input type="number" class="form-control" name="hargaJual" placeholder="Harga Jual"
                            value="{{ $data['hargaJual'] }}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light"><a href="/admin">Cancel</a></button>
                </form>
            </div>
        </div>
    </div>
@endsection
