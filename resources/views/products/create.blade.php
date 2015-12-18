
@extends('layout.master')

@section('title','products')

@section('navbar')
    @parent
@endsection
 @section('content')
    <h1>Add Product</h1>

    @if($errors->any())
        <ul class="alert">

            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach

        </ul>
    @endif

    {!! Form::open(['url'=>'products']) !!}
        <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name"/>
        </div>

        <div class="form-group">
        <label for="description">Descripotion</label>
        <input class="form-control" type="text" name="description" id="description"/>

        </div>

        <div class="form-group">
        <label for="name">Price</label>
        <input class="form-control" type="text" name="price" id="price"/>
        </div>

        <div class="form-group">
        <label for="featured">Featured</label>
        <input class="form-inline" type="checkbox" value="1" name="featured" id="featured"/>
        </div>

        <div class="form-group">
        <label for="featured">Recommend</label>
        <input class="form-inline" type="checkbox" value="1" name="recommend" id="recommend"/>
        </div>

        <button class="btn-success">Add</button>

     {!! Form::close() !!}

 @endsection