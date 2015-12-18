
@extends('layout.master')

@section('title','categories')

@section('navbar')
    @parent
@endsection
@section('content')
    <h1>Category {{$category->name}}</h1>

    @if($errors->any())
        <ul class="alert">

            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach

        </ul>
    @endif

    {!! Form::open(['route'=>['categories.update', $category->id], 'method' =>'put']) !!}
    <div class="form-group">

        {!! Form::label('name','Name') !!}
        {!! Form :: text('name',$category->name,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descripton','Description') !!}
        {!! Form::textarea('description', $category->description,['class'=>'form-control'])!!}

    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class'=>'btn btn-primary form-control']) !!}
    </div>


    {!! Form::close() !!}

@endsection