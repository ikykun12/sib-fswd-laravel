<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Item - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
   <!-- Bootstrap icons-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
   <!-- Core theme CSS (includes Bootstrap)-->
   <link href="{{ asset('css/landing.css') }}" rel="stylesheet" />
   <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
   <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
   <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
   <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
   <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
   <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="{{ route('landing') }}"><img src="{{ asset('img/log-1.png') }}" width="200px" alt="Logo Ecoomer"></a>
                </div>
                <div class="header-right">
                    <a href="#">
                        <img src="{{ asset('img/bag.png') }}" alt="bag">
                        <span>2</span>
                    </a>
                </div>
                <div class="user-access">
                    <form class="d-flex">
                       <div>
                        <a href="{{ route('login') }}" class="btn btn-outline-light ms-1">
                            <i class="bi-person-fill me-1"></i>
                            Login
                        </a>
                       </div>
                    </form>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li>
                            <a class="active" href="{{ route('landing') }}">Home</a>
                        </li>
                        <li><a href="{{ Route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/product/' . $product->image) }}" alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-498</div>
                    <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">Rp.{{ number_format($product->price, 0) }}</span>
                        <span>Rp.{{ number_format($product->sale_price, 0) }}</span>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius
                        blanditiis delectus ipsam minima ea iste laborum vero?</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($related as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('storage/product/' . $product->image) }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    <!-- Product price-->
                                    Rp.{{ number_format($product->sale_price, 0) }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
