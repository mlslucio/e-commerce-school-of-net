
@extends('layout.master')

@section('title','categories')

@section('navbar')
    @parent
@endsection
 @section('content')
    <h1>Create Category</h1>

    @if($errors->any())
        <ul class="alert">

            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach

        </ul>
    @endif

    {!! Form::open(['url'=>'categories']) !!}
        <div class="form-group">

        {!! Form::label('name','Name') !!}
            {!! Form :: text('name',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descripton','Description') !!}
            {!! Form::textarea('description', null,['class'=>'form-control'])!!}

        </div>

        <div class="form-group">
            {!! Form::submit('Add Category', ['class'=>'btn btn-primary form-control']) !!}
        </div>


     {!! Form::close() !!}

 @endsection