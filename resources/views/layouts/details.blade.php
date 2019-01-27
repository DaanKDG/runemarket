@extends('layouts.app')

@section('content')

<div class="">
    <div class="menu" style="position: relative !important;">
        <div class="container">
            @include('layouts.nav')
        </div>
    </div>
    {{-- <div class="jumbotron text-center quest-image" style=' border-radius:0 !important;  margin-top: 67px; height: 20vh;'>
        <h2 style='font-weight: bold; letter-spacing: 1px; font-size: 2.5em;'>{{$account->title}}</h2>
    </div>     --}}
    
    <AccountDetails v-bind:account="{{$account}}" v-bind:skills="{{json_encode($skills)}}"> </AccountDetails>
</div>
@endsection