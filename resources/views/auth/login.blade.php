<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
</head>

<body>
    <section class="ftco-section">
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <strong>Sukses!</strong> Akun anda berhasil dibuat.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>Oops!</strong> Email atau password salah.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="col-md-6 py-5">
                            <img src="{{ asset('img/smiling-woman-by-white-curtain_53876-155288.jpg') }}"  alt="smiling" class="img-fluid">
                        </div>
                        <div class="col-md-6 login-wrap p-4 p-md-5">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="mb-1">Login</h3>
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                </p>
                            </div>
                            <form action="{{ route('login.authenticate') }}" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                    <label class="form-check-label" for="rememberPasswordCheck">
                                        Remember password
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign In</button>
                                    <br>
                                    <a href="{{ route('register') }}">Register Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</html>
