@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h2 style='font-weight:bold;'>ADMIN PANEL</h2>
    </div>
    {{-- <admin-quests> </admin-quests> --}}
    <div class="container">
        <div class="buttons m-0">
        <a href="{{ Route('admin.quests')}}" class="btn btn-dark btn-lg">Quests</a>
        <a href="{{ Route('admin.accounts')}}" class="ml-2 btn btn-dark btn-lg">Accounts</a>
        </div>
    </div>
@endsection
