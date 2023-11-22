@extends('layouts.template')

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form action="/view" method="POST" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="kodeBarang">Kode Barang</label>
                      <input type="text" class="form-control" name="kodeBarang" placeholder="Kode Barang">
                    </div>
                    <div class="form-group">
                      <label for="namaBarang">Nama Barang</label>
                      <input type="text" class="form-control" name="namaBarang" placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                      <label for="jenisVarian">Jenis Varian</label>
                      <input type="text" class="form-control" name="jenisVarian" placeholder="Jenis Varian">
                    </div>
                    <div class="form-group">
                      <label for="qty">Qty</label>
                      <input type="number" class="form-control" name="qty" placeholder="Qty">
                    </div>
                    <div class="form-group">
                      <label for="hargaJual">harga Jual</label>
                      <input type="number" class="form-control" name="hargaJual" placeholder="Harga Jual">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
@endsection