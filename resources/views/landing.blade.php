<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ecommer - One Stop Shopping</title>


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
<!-- Page Preloder -->
 <div id="preloder">
    <div class="loader"></div>
    </div>

    <!-- Navigation-->
   <!-- Header Section Begin -->
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
                    <li>
                        <a href="#">Categories</a>
                        <ul class="sub-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item" href="{{ route('landing',['category' => $category->name]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ Route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="img/icons/delivery.png" alt="">
                        <p>Free shipping on orders over $30 in USA</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="img/icons/voucher.png" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                    <img src="img/icons/sales.png" alt="">
                    <p>30% off on dresses. Use code: 30OFF</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End-->
    <!-- Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($sliders as $slider)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->iteration - 1 }}" class="{{ $loop->first ? 'active' : '' }}"
                    aria-current="{{ $loop->first ? 'true' : '' }}" aria-label="Slide 1"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($sliders as $slider)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="3000">
                    <img src="{{ asset('storage/slider/' . $slider->image) }}"  class="d-block w-100" alt="{{ $slider->image }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider->title }}</h5>
                        <p>{{ $slider->caption }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
     <!-- Features Section Begin -->
     <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="{{ asset('img/f-delivery.png') }}" alt="delivery">
                            <h4>Free shipping</h4>
                            <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                                esuada aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="{{ asset('img/coin.png') }}" alt="coins">
                            <h4>100% Money back </h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="{{ asset('img/chat.png') }}" alt="chat">
                            <h4>Online support 24/7</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Features Box -->
      <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="{{ asset('img/young-japanese-woman-portrait-sitting-chair_23-2148870794.jpg') }}" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Party</span>
                                        <h2>Jewelry</h2>
                                        <span class="trend-alert">Trend Allert</span>
                                        <a href="#" class="primary-btn">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="{{ asset('img/portrait-handsome-confident-stylish-hipster-lambersexual-modelman-dressed-black-jacket-jeans-fashion-male-posing-studio-near-grey-wall_158538-24002.jpg') }}" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Trend</span>
                                        <h2>Footwear</h2>
                                        <span class="trend-alert">Bold & Black</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item large-box">
                            <img src="{{ asset('img/fast-fashion-vs-slow-sustainable-fashion_23-2149133973.jpg') }}" alt="">
                            <div class="box-text">
                                <span class="trend-year">2019 Party</span>
                                <h2>Collection</h2>
                                <div class="trend-alert">Trend Allert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <form action="{{ route('landing') }}" method="GET">
                @csrf
                <div class="row g-3 my-5">
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Min" name="min" value="{{ old('min') }}">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Max" name="max" value={{ old('max') }}>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary">Terapkan</button>
                    </div>
                </div>
            </form>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @forelse ($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            @if ($product['sale_price'] != 0)
                                <!-- Sale badge-->
                                <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            @endif

                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('storage/product/' . $product->image) }}" alt="{{ $product->name }}" />

                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a href="{{ route('product.show', ['id' => $product->id]) }}" style="text-decoration: none" class="text-dark">
                                        <small class="text-strong">{{ $product->category->name }}</small>
                                        <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    </a>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        @for ($i = 0; $i < $product->rating; $i++)
                                            <div class="bi-star-fill"></div>
                                        @endfor
                                    </div>
                                    <!-- Product price-->
                                    @if ($product['sale_price'] != 0)
                                        <span class="text-muted text-decoration-line-through">Rp.{{ number_format($product->price, 0) }}</span>
                                        Rp.{{ number_format($product->sale_price, 0) }}
                                    @else
                                        Rp.{{ number_format($product->price, 0) }}
                                    @endif
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-secondary w-100 text-center" role="alert">
                        <h4>Produk belum tersedia</h4>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
     <!-- Lookbok Section Begin -->
     <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>2019 <br />#lookbook</h2>
                        </div>
                        <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada
                            aliquet libero viverra cursus. Aliquam erat volutpat. Morbi id dictum quam, ut commodo
                            lorem. In at nisi nec arcu porttitor aliquet vitae at dui. Sed sollicitudin nulla non leo
                            viverra scelerisque. Phasellus facilisis lobortis metus, sit amet viverra lectus finibus ac.
                            Aenean non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend,
                            sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum
                            metus nec scelerisque. s</p>
                        <a href="#" class="primary-btn look-btn">See More</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="{{ asset('img/4441730.jpg') }}" alt="">
                        <div class="pic-text">fashion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Logo Section Begin -->
    <div class="logo-section spad">
        <div class="logo-items owl-carousel">
            <div class="logo-item">
                <img src="{{ asset('img/Logo_Roughneck_Hitam_1200x675.png') }}" alt="Roughneck">
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/QWNDXlQxzJ.jpg') }}" alt="Eiger">
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/loker-erigo.jpg') }}" alt="Erigo">
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/63-633302_uniqlo-logo-white-png-transparent-png.png') }}" alt="Uniqlo">
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/adidas.jpg') }}" alt="Adidas">
            </div>
        </div>
    </div>
    <!-- Logo Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
        <div class="container">
            <div class="newslatter-form">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="Your email address">
                            <button type="submit">Subscribe to our newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>About us</h4>
                            <ul>
                                <li>About Us</li>
                                <li>Community</li>
                                <li>Jobs</li>
                                <li>Shipping</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Customer Care</h4>
                            <ul>
                                <li>Search</li>
                                <li>Privacy Policy</li>
                                <li>2019 Lookbook</li>
                                <li>Shipping & Delivery</li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Our Services</h4>
                            <ul>
                                <li>Free Shipping</li>
                                <li>Free Returnes</li>
                                <li>Our Franchising</li>
                                <li>Terms and conditions</li>
                                <li>Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li>Payment methods</li>
                                <li>Times and shipping costs</li>
                                <li>Product Returns</li>
                                <li>Shipping methods</li>
                                <li>Conformity of the products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp ">
			<div class="container text-center">
				<div class="social-links  ">
					<a href="https://www.instagram.com/kyyrzky20/" class="instagram"><i class="fa fa-instagram"></i><span>Instagram</span></a>
					<a href="https://www.facebook.com/RizkiPranata20/" class="facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
					<a href="https://twitter.com/ikypranata20" class="twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                    <a href="https://www.linkedin.com/in/risky-pranata-423805222/" class="linkedin"><i class="fa fa-linkedin"></i><span>Linked</span></a>
                    <a href="https://github.com/ikykun12" class="github"><i class="fa fa-github"></i><span>Github</span></a>
				</div>
			</div>
        <div class="container text-center pt-5">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Risky is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://www.linkedin.com/in/risky-pranata-423805222/" target="_blank">Linked</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
		</div>
    </footer>
    <!-- Footer Section End -->

     <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Add Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
