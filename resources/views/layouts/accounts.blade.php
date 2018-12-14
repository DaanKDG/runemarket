@extends('layouts.app')

@section('content')
<div class="">
        <div class="menu">
            <div class="container">
                @include('layouts.nav')
            </div>
        </div>
        <div class="jumbotron text-center quest-image" style='margin-top: 67px; height: 20vh;'>
            <h2 style='font-weight: bold;'>BUY OSRS ACCOUNTS</h2>
        </div>
      
    </div>
    <div class="container">
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
    </div>
@endsection