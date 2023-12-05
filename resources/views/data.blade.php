@extends('layouts.template')

@section('content')
    <main>
        <div class="container mt-3 d-flex flex-column justify-content-center align-item-center" style="height: 400px;">
            <div class="text-center">
                <h2>Item List</h2>
            </div>
            <div class="p-2 text-white">
                <table class="table table-dark table-striped">
                    <tr class="text-center">
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jenis Varian</th>
                        <th>Qty</th>
                        <th>Harga Jual</th>
                        <th>Total Harga</th>
                        <th>Potongan Harga</th>
                        <th>Total yang harus diBayar</th>
                        <th>Edit</th>
                    </tr>
                    @foreach ($datas as $data)
                        <tr class="text-center">
                            <td>{{ $data['kodeBarang'] }}</td>
                            <td>{{ $data['namaBarang'] }}</td>
                            <td>{{ $data['jenisVarian'] }}</td>
                            <td>{{ $data['qty'] }}</td>
                            <td>{{ $data['hargaJual'] }}</td>
                            <td>{{ $data['totalBelanja'] }}</td>
                            <td>{{ $data['diskon'] }}</td>
                            <td>{{ $data['total'] }}</td>
                            <td><a href="/edit/{{$data['id']}}">Edit</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div>
                <a href="/"
                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Back to
                    input page</a>
            </div>
        </div>
    </main>
@endsection
