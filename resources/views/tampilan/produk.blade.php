@extends('tampilan.data')
@section('content')
    <table border="1px" class="table">
        <tr>
            <td>id</td>
            <td>produk</td>
            <td>harga</td>
            <td>jumlah</td>
            <td>aksi</td>
        </tr>
        @foreach($getProduk as $produk)
        <tr>
            <td>{{ $produk->id }}</td>
            <td>{{ $produk->name }}</td>
            
            <td>{{ $produk->stock }}</td>
            <td>{{ $produk->price }}</td>

            <td><a href="produk/delete/{{$produk->id}}" class="btn btn-sm btn-flat btn-danger"> delete </a>
            <i></i>
            </td>
        </tr>
        @endforeach
</table>
@endsection 