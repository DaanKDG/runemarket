@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h2 class="pb-3" style='font-weight: bold;'>CREATE ACCOUNT</h2>
    <a href="{{ Route('admin.quests')}}" class="btn btn-dark btn-lg">Quests</a>
    <a href="{{ Route('admin.accounts')}}" class="ml-2 btn btn-dark btn-lg">Accounts</a>
</div>
<div class="container">
    @include('inc.messages')
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(['method'=> 'POST', 'action'=>'AdminController@store']) !!}

            {{Form::label('title', 'Title')}}
            {{Form::text('title', '',['class' => 'form-control mb-2', 'placeholder' => 'The account title', 'maxlength' => '40'])}}

            {{Form::label('information', 'Description')}}
            {{Form::textarea('information', '',['class' => 'form-control mb-2', 'placeholder' => 'Describe the account', 'rows' => '4', 'maxlength' => '200'])}}
            
            {{Form::label('skill_image', 'Skills image')}}
            {{Form::text('skill_image', '',['class' => 'form-control mb-2', 'placeholder' => 'https://i.imgur.com/example.jpg', 'maxlength' => '100'])}}

            {{Form::label('image_two', 'Optional image')}}
            {{Form::text('image_two', '',['class' => 'form-control mb-2', 'placeholder' => 'https://i.imgur.com/example.jpg', 'maxlength' => '100'])}}

            {{Form::label('image_three', 'Optional image')}}
            {{Form::text('image_three', '',['class' => 'form-control mb-2', 'placeholder' => 'https://i.imgur.com/example.jpg', 'maxlength' => '100'])}}

            {{Form::label('combat_level', 'Combat level')}}
            {{Form::number('combat_level', '',['class' => 'form-control mb-2', 'placeholder' => '121', 'min' => '1', 'max' => '999'])}}
            
            {{Form::label('quest_points', 'Quest Points')}}
            {{Form::number('quest_points', '',['class' => 'form-control mb-2', 'placeholder' => '195', 'min' => '1', 'max' => '999'])}}
            
            {{Form::label('price', 'Price (in $)')}}
            {{Form::number('price', '',['class' => 'form-control mb-2', 'placeholder' => '20', 'min' => '1', 'max' => '999'])}}

            {{Form::label('skill', 'Skills',['style' => 'display:block;', 'class' => 'mt-2'])}}

            <div class="skill-container mb-3">
                @foreach ($skills as $skill)
                    <div class="skill-element" style='width: 175px; padding: 5px 0px; display:inline-block;'>
                        {{Form::number('skill[' . $skill->skill_name . ']', '1',['class' => 'form-control skill-input mr-1 text-center', 'style' => 'display:inline-block;', 'placeholder' => '', 'min' => '1', 'max' => '9999'])}}
                        <img style='display: inline-block; width: 20px; height: 20px;' class="mr-1" src="{{ asset('images/skills/' . $skill->skill_name . '-icon.png') }}" alt="skill-image">
                        {{Form::label($skill->skill_name, $skill->skill_name)}}
                    </div>
                @endforeach
            </div>
        
            {{Form::button('Submit', ['type' =>'submit', 'style' => 'display:block;', 'class' => ' btn btn-outline-success mb-3'])}} 
            {!! Form::close() !!} 
        </div>
    </div>
</div>
@endsection