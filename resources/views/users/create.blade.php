@extends('layouts.main')

@section('container')
    {{-- CREATE USER --}}
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        
                        <h1>Buat User Baru</h1>
                        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Avatar</label>
                                <input type="file" class="form-control-file @error('avatar') is-invalid @enderror"
                                    name="avatar">

                                @error('avatar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" placeholder="Masukkan nama">

                           
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Masukkan email">

                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" value="{{ old('password') }}" placeholder="Masukkan password"
                                        id="password-input">

                                    <div class="input-group-append">
                                        <button id="password-visibility-button" type="button" class="btn btn-secondary"
                                            onclick="togglePasswordVisibility()">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>

                           
                                @error('password')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Role</label>
                                <select class="form-control @error('role') is-invalid @enderror" name="role">
                                    <option value="">Pilih Role</option>
                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin
                                    </option>
                                    <option value="staff" {{ old('role') == 'staff' ? 'selected' : '' }}>Staff
                                    </option>
                                </select>

                             
                                @error('role')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" placeholder="Masukkan nomor telepon">

                                @error('phone')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" name="address" rows="5"
                                    placeholder="Masukkan alamat lengkap">{{ old('address') }}</textarea>

                              
                                @error('address')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-md btn-secondary">Reset</button>
                        </form>
                        <br>
                       <a href="{{ route('users.index') }}" class="text-dark"><button class="btn btn-primary">Back To Users</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    
@endsection
