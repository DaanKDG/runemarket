@extends('layouts.app')

@section('content')
<div class="">
    <div class="menu">
        <div class="container">
            @include('layouts.nav')
        </div>
    </div>
    <div class="jumbotron text-center quest-image" style='margin-top: 67px; height: 20vh;'>
        <h2 style='font-weight: bold;'>MINIGAME SERVICES</h2>
    </div>
    
</div>
<div class="container mt-5 mb-5" style=''>
    <div class="row" style="">
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" style='height: 150px;' src="{{ asset('images/void.jpg') }}"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style='text-align: center; font-weight: bold;'>Pest Control</h5>
                    <ul class="list-group list-group-flush mb-4" style="text-align: left;">
                        <li class="list-group-item" style="padding-left: 0;"> Novice - 33k/Point <span style='color: #09814A; font-weight: bold;' class="float-right"> 21.4M</span> </li>
                        <li class="list-group-item" style="padding-left: 0;"> Intermediate - 27K/Point <span style='color: #09814A; font-weight: bold;' class="float-right">17.5M</span> </li>
                        <li class="list-group-item" style="padding-left: 0;"> Veteran - 22k/Point <span style='color: #09814A; font-weight: bold;' class="float-right"> 14.3M</span> </li>
                    </ul>
                    <a href="#" class="featured-btn" style="">ORDER</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style=" height: 420px; text-align: center;">
                <img class="card-img-top" style='height: 150px;' src="{{ asset('images/torso.jpg') }}"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold;">Fighter Torso - <span
                            style='color:#09814A; font-size: 0.9em; font-weight: bold;'>10M</span></h5>
                    <hr>
                            <div class="card-text pb-3">
                                <p class="card-text">The fighter torso, or Penance torso, is a piece of armour that requires 40 Defence to wear. It is tied with the Bandos chestplate for having the highest strength bonus (+4) for the body equipment slot. </p>
                            </div>
                    <hr>
                    <div class="button pt-2">
                        <a href="#" class="featured-btn">ORDER</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style=" text-align: center;">
                <img class="card-img-top" style='height: 150px;' src="{{ asset('images/rune-defender.jpg') }}"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style='font-weight: bold;'>Warriors' Guild</h5>
                    <ul class="list-group list-group-flush mb-4" style="text-align: left;">
                        <li class="list-group-item" style="padding-left: 0;"> None to Rune <span style='color: #09814A; font-weight: bold;' class="float-right">10M</span> </li>
                        <li class="list-group-item" style="padding-left: 0;"> None to Dragon <span style='color: #09814A; font-weight: bold;' class="float-right">13.5M</span> </li>
                        <li class="list-group-item" style="padding-left: 0;"> Each additional defender <span style='color: #09814A; font-weight: bold;' class="float-right">2M</span> </li>
                    </ul>
                    <a href="#" class="featured-btn">ORDER</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron text-center quest-image" style='margin-top: 67px; height: 20vh;'>
        <h2 style='font-weight: bold;'>SKILLING SERVICES</h2>
</div>
@endsection