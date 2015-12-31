
@extends('layout.master')

@section('title','images')

@section('navbar')
    @parent
@endsection
 @section('content')
    <h1>Upload image</h1>

    @if($errors->any())
        <ul class="alert">

            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach

        </ul>
    @endif

    {!! Form::open(array('url'=>'admin/products/images/upload/'.$product->id, 'method'=>'POST', 'files'=>true)) !!}


        {!! Form::file('photo') !!}



        {!! Form::submit('upload image') !!}
    {!! Form::close() !!}

 @endsection