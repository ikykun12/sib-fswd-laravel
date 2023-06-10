@extends('layouts.main')

@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">Approve</h1>

        <a class="btn btn-primary mb-2" href="{{ route('product.create') }}" role="button">Create New</a>

        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
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
                                        @if ($product->approve)
                                            <i class="fa-solid fa-2xl fa-check"></i>
                                        @else
                                             <i class="fa-regular fa-2xl fa-circle-xmark"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Are you sure? ');" action="{{ route('product.approve', $product->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input class="d-none" type="text" name="status" value="0">
                                            <button type="submit" class="btn btn-sm btn-danger">Tidak Setuju</button>
                                        </form>

                                        <form onsubmit="return confirm('Are you sure? ');" action="{{ route('product.approve', $product->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input class="d-none" type="text" name="status" value="1">
                                            <button type="submit" class="btn btn-sm btn-danger">Setuju</button>
                                        </form>
                                    </td>
                                    <td>
                                        <span>
                                            <p>Stock</p>
                                            <h5>{{ $product->stock }}</h5>
                                         </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
