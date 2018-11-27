@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h2>ADMIN PANEL</h2>
</div>
<div class="container">
    <div class="row" >
        <div class="col-md-7">
            <form class="form-inline mb-3">
                <input class="form-control mr-sm-2" style='width:55%;' type="search" placeholder="Search" aria-label="Search">
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
            @foreach($questList as $questIndex => $item)
                <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>No price set</td>
                <td><a href="{{ route("admin.quest.edit", ["id" => $item->id]) }}" class=" btn btn-outline-dark"> Edit</a></td>
                </tr>
            @endforeach  
            </tbody>
            </table>
            {{$questList->links() }}
        </div>
        @if(isset($quest))
        <div class="col-md-4">
            <h2 class="text-center">EDIT PANEL</h2>
            <p class="text-center"> {{$quest->name}}</p>
<form>
  <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <div class="input-group-text">Quest name</div>
            </div>
            <input type="text" class="form-control" value="{{$quest->name}}" placeholder="">
        </div>
        <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">Quest price</div>
        </div>
    <input type="text" class="form-control" value="{{$quest->price}}" placeholder="">
    <div class="input-group-prepend">
          <div class="input-group-text">M</div>
        </div>
    </div>
  </div>
<button class="btn btn-outline-dark float-right"> Update</button>
</div>

</form>
        </div>
        @endif
  
    </div>
</div>
@endsection