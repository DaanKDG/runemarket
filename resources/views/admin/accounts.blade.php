@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h2 class="pb-3" style='font-weight:bold;'>ACCOUNT PANEL</h2>
    <a href="{{ Route('admin.quests')}}" class="btn btn-dark btn-lg">Quests</a>
    <a href="{{ Route('admin.accounts')}}" class="ml-2 btn btn-dark btn-lg">Accounts</a>
</div>

<div class="container">
    <a href="{{ Route('admin.create')}}" class="btn btn-outline-dark">New account</a>
    <div class="mt-3 mb-3 message">
       @include('inc.messages')
    </div>
    <hr>
    <h2 style='font-weight: bold;'>ACCOUNTS</h2>

    <div class="row pt-2">
        <div class="col-md-8">
                <table class="table table-striped" style=''>
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($accounts as $account)
                          <tr>
                          <td>{{$account->title}}</td>
                          <td>${{$account->price}}</td>
                            <td>
                                {{-- {{ Route('admin.edit', $account->id)}} --}}
                              <a href="#" class="btn btn-primary"> Edit</a> 
                              {!! Form::open(['action' => ['AdminController@destroyAccount', $account->id],'method' => 'POST', 'style' => 'display:inline;', 'class'=> 'ml-2']) !!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::button('Delete', ['type' =>'submit', 'style' => 'display:inline-block;', 'class' => ' btn btn-danger'])}}
                              {!! Form::close() !!} 
                            
                            </td>
                          </tr
                          @endforeach
                        </tbody>
                      </table>
        </div>
</div>
    
    
</div>
@endsection