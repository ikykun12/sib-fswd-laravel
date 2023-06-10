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
                                <a class="dropdown-item" href="#!">{{ $category->name }}</a>
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
<!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Contact us<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="{{ asset('img/add.jpg') }}" alt="add">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Contact Section Begin -->
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Last Name">
                            </div>
                            <div class="col-lg-12">
                                <input type="email" placeholder="E-mail">
                                <input type="text" placeholder="Subject">
                                <textarea placeholder="Message"></textarea>
                            </div>
                            <div class="col-lg-12 text-right">
                                <button type="submit">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="contact-widget">
                        <div class="cw-item">
                            <h5>Location</h5>
                            <ul>
                                <li>Indonesia</li>
                                <li>Palembang City</li>
                            </ul>
                        </div>
                        <div class="cw-item">
                            <h5>Phone</h5>
                            <ul>
                                <li>(+62)89506700244</li>
                                <li>(+62)89506700244</li>
                            </ul>
                        </div>
                        <div class="cw-item">
                            <h5>E-mail</h5>
                            <ul>
                                <li>pranatarizky858@gmail.com</li>
                                <li>www.ecommer.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <div class="row">
                    <div class="col-lg-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d996.0665332635075!2d104.75037667560672!3d-3.0230372600786146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9e77d0879109%3A0x438160bba8e411c5!2sRizki%20I!5e0!3m2!1sid!2sid!4v1686201354361!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            height="560" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->
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
</body>
</html>
