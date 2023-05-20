@extends('layouts.main')

@section('container')
     <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h1>Halaman Tampilan User</h1>
                        <br><br>
                        <div class="text-center">
                            <img src="{{ asset('storage/' . $user->avatar) }}" class="rounded" style="width: 200px">
                        </div>
                        <hr>

                        <table>
                            <tr class="font-weight-bold">
                                <td style="width: 100px">Name</td>
                                <td style="width: 20px">:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                              <tr>
                                <td>Role</td>
                                <td>:</td>
                                <td>{{ $user->role }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>:</td>
                                <td>{{ $user->phone }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td>{{ $user->address }}</td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td>
                                    <span id="password-display" style="display: none;">{{ $user->password }}</span>
                                    <input type="password" id="password-input" value="{{ $user->password }}" disabled>
                                    <button type="button" id="toggle-password-button"
                                        onclick="togglePasswordVisibility()">Tampilkan</button>
                                </td>
                            </tr>
                          

                        </table>
                        <a href="{{ route('users.index') }}" class="text-dark"><button class="btn btn-primary" type="submit" name="submit">Back To Users</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
