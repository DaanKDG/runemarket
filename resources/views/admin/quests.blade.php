@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h2 class="pb-3" style='font-weight:bold;'>ADMIN PANEL</h2>
        <a href="{{ Route('admin.quests')}}" class="btn btn-dark btn-lg">Quests</a>
        <a href="{{ Route('admin.accounts')}}" class="ml-2 btn btn-dark btn-lg">Accounts</a>
    </div>
    <div class="container mb-2">
        <div class="mt-3 mb-3 message">
            @include('inc.messages')
        </div>
        <a class="btn btn-primary" href="{{ Route('quests.update')}}"> Update API</a>
    </div>
    <admin-quests> </admin-quests>

@endsection