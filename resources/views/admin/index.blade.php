@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h2>ADMIN PANEL</h2>
</div>
<div class="container">
    <div class="row" >
        <div class="col-md-7">
            <form class="form-inline mb-3">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($quests as $questIndex => $quest)
                <tr>
                <th scope="row">{{$quest->id}}</th>
                <td>{{$quest->name}}</td>
                <td>No price set</td>
                <td><a class="btn btn-outline-dark mr-2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Edit</a><a class="btn btn-outline-dark"> Delete</a></td>
                </tr>
            @endforeach  
            </tbody>
            </table>
            {{$quests->links() }}
        </div>
        <div class="col-md-4 collapse" id="collapseExample">
             <p> Edit the quest </p>
        </div>
    </div>
</div>
@endsection