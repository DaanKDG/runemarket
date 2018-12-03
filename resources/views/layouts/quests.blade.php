@extends('layouts.app')

@section('content')
<div class="">
    <div class="menu">
        <div class="container">
            @include('layouts.nav')
        </div>
    </div>
    <div class="jumbotron text-center" style='margin-top: 67px; height: 20vh;'>
        <h2 style='font-weight: bold;'>QUEST SERVICES</h2>
    </div>
    <quests> </quests>
</div>
@endsection