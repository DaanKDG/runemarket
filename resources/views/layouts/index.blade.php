@extends('layouts.app')

@section('content')
    <div class="wrapper">

        <div class="menu">
            <div class="container">
                @include('layouts.nav')
            </div>
        </div>
        <div class="center">
            <h1>best <span style="color:#6BBF59;">price</span> and <span style="color: #6BBF59;">quality</span> for any
                OSRS services</h1>
            <div class="buttons">
            <a  href="{{ Route('minigames.index') }}" class="button mr-2">SERVICES</a>
            <a href="{{ Route('accounts.index') }}" class="button ml-5">ACCOUNTS</a>

            </div>
        </div>

    </div>

    <div class=" icon-grid">

        <div class="container" style="">
            <div class="row pt-5 pb-5" style="text-align: center; color: black;">
                <div class="col">
                    <img src="{{ asset('images/bank.svg') }}" alt="" style="width: 70px; height: 70px;">
                    <p>Cheapest price</p>
                </div>
                <div class="col">
                    <img src="{{ asset('images/medal.svg') }}" alt="" style="width: 70px; height: 70px;">
                    <p>Best quality</p></div>
                <div class="col"><img src="{{ asset('images/flash.svg') }}" alt="" style="width: 70px; height: 70px;">
                    <p>High speed</p></div>
                <div class="col">
                    <img src="{{ asset('images/conversation.svg') }}" alt="" style="width: 70px; height: 70px;">
                    <p>Customer support</p></div>
                <div class="col">
                    <img src="{{ asset('images/shield.svg') }}" alt="" style="width: 70px; height: 70px;">
                    <p>Secure</p></div>

            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5" style=''>
        <h2 class="pb-5" style="font-weight: bold; text-align:center;">FEATURED OFFERS</h2>

        <p class="text-center">Under maintenance</p>
        {{-- <div class="row" style="text-align:center;">
            <div class="col-lg-4">
                <div class="card" style=" text-align: center;">
                    <img class="card-img-top" style='height: 150px;' src="{{ asset('images/osrs_acc.jpg') }}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Account - <span
                                style='color:#09814A; font-size: 0.9em; font-weight: bold;'>$119</span></h5>
                        <p class="card-text">60-87-1 - 80 Range - 90 Magic - Avas - God Cape - Unholy Book - Pure</p>
                        <a href="#" class="featured-btn" style="">DETAILS</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style=" text-align: center;">
                    <img class="card-img-top" style='height: 150px;' src="{{ asset('images/torso.jpg') }}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Fighter Torso - <span
                                style='color:#09814A; font-size: 0.9em; font-weight: bold;'>10M 07</span></h5>
                        <p class="card-text">The fighter torso, or Penance torso, is a piece of armour that requires 40
                            Defence to wear. </p>
                        <a href="#" class="featured-btn">DETAILS</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style=" text-align: center;">
                    <img class="card-img-top" style='height: 150px;' src="{{ asset('images/stake.jpg') }}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Max Main Rental - <span
                                style='color:#09814A; font-size: 0.9em; font-weight: bold;'>6M/H 07</span></h5>
                        <p class="card-text">Want to stake but no maxed account? Rent one of our max mains and try your
                            luck at the arena!</p>
                        <a href="#" class="featured-btn">DETAILS</a>
                    </div>
                </div>
            </div> --}}


        </div>

    </div>
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark pt-3"
            style="background-color: #09814A; color: white !important;">


        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">RUNEMARKET</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color:white !important;">
                    <p>RuneMarket.net guarantee to beat all other major websites prices, if you found a major website
                        with cheaper price of any service we offer - contact us and we will make our price even lower to
                        beat it!</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Services</a>
                    </p>
                    <p>
                        <a href="#!">Accounts</a>
                    </p>
                    <p>
                        <a href="#!">OSRS Gold</a>
                    </p>
                    <p>
                        <a href="#!">Rental</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Terms of Service</a>
                    </p>
                    <p>
                        <a href="#!">Privacy Policy</a>
                    </p>
                    <p>
                        <a href="#!">FAQ</a>
                    </p>
                    <p>
                        <a href="#!">Contact</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> Runemarket</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@runemarket.net</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 00 000 000 00</p>
                    <p>
                        <i class="fa fa-print mr-3"></i> + 00 000 000 00</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="#"> Runemarket.net</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <script>
        // $(window).bind('scroll', function () {
        //     if ($(window).scrollTop() > 500) {
        //         $('div.menu').addClass('fixed');
        //     } else {
        //         $('div.menu').removeClass('fixed');
        //     }
        // });
    </script>
@endsection
