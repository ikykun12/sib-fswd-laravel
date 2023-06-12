
@extends('layouts.main')
@section('container')
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div class="lookbok-left">
                    <div class="section-title">
                        <h2>2023 <br />#Fashion</h2>
                    </div>
                    <p>Mode merupakan sebuah ekspresi estetika yang populer pada waktu, masa, tempat tertentu dan dalam konteks tertentu, terutama pada pakaian, alas kaki, gaya hidup, aksesori, riasan wajah, gaya rambut, dan proporsi tubuh.</p>
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

@endsection
