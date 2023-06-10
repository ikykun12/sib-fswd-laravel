@extends('layouts.main')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Product</h1>

            <a class="btn btn-primary mb-2" href="{{ route('product.create') }}" role="button">Create New</a>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Nama</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Brands</th>
                                <th>Image</th>
                                <th>Approve</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>Rp. {{ number_format($product->price, 0, 2) }}</td>
                                    <td>Rp. {{ number_format($product->sale_price, 0, 2) }}</td>
                                    <td>{{ $product->brands }}</td>

                                     <td>
                                        @if ($product->image == null)
                                            <span class="badge bg-primary">No Image</span>
                                        @else
                                            <img src="{{ asset('storage/product/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 50px">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($product->approve)
                                            <i class="fa-solid fa-2xl fa-check"></i>
                                        @else
                                             <i class="fa-regular fa-2xl fa-circle-xmark"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <span>
                                            <p>Stock</p>
                                            <h5>{{ $product->stock }}</h5>
                                         </span>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Are you sure? ');" action="{{ route('product.destroy', $product->id) }}" method="POST">
                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
