@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Stock</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive col-lg-8">
        <a href="/dashboard-stock/create" class="btn btn-primary mb-3">Create Product</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Link</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->namabarang }}</td>
                        <td>{{ $product->deskripsi }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>@currency($product->harga)</td>
                        <td>{{ $product->link }}</td>
                        <td>
                            <a href="" class="badge bg-primary">
                                <box-icon type='solid' name='bullseye'></box-icon>
                            </a>
                            <a href="/dashboard-stock/{{ $product->id }}/edit" class="badge bg-warning">
                                <box-icon name='pencil'></box-icon>
                            </a>
                            <form action="/dashboard-stock/{{ $product->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                    <box-icon name='trash'></box-icon>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
