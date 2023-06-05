@extends('layouts.main')

@section('container')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">Approve</h1>

        <a class="btn btn-primary mb-2" href="{{ route('slider.create') }}" role="button">Create New</a>

        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Image</th>
                                <th>Approve</th>
                                <th>Tidak Setuju</th>
                                <th>Setuju</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->caption }}</td>
                                    <td>
                                        <img src="{{ asset('storage/slider/' . $slider->image) }}" class="img-fluid" style="max-width: 100px;" alt="{{ $slider->image }}">
                                    </td>
                                    <td>
                                        @if ($slider->approve)
                                            <i class="fa-solid fa-2xl fa-check"></i>
                                        @else
                                            <i class="fa-regular fa-2xl fa-circle-xmark"></i>
                                        @endif
                                    </td>
                                    <td>
                                       <form onsubmit="return confirm('Are you sure? ');" action="{{ route('slider.approve', ['id' => $slider->id]) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input class="d-none" type="text" name="status" value="0">
                                            <button type="submit" class="btn btn-sm btn-danger">Tidak Setuju</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Are you sure? ');" action="{{ route('slider.approve', ['id' => $slider->id]) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input class="d-none" type="text" name="status" value="1">
                                            <button type="submit" class="btn btn-sm btn-danger">Setuju</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Are you sure? ');" action="{{ route('slider.destroy', ['id' => $slider->id]) }}" method="POST">
                                            <a href="{{ route('slider.edit', ['id' => $slider->id]) }}" class="btn btn-sm btn-warning">Edit</a>
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
    </div>
</main>

@endsection
