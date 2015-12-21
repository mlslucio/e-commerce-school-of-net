
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

    {!! Form::open(['route'=>['products.update', $product->id],'method'=>'put']) !!}
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" value="{{$product->name}}" type="text" name="name" id="name"/>
    </div>

    <div class="form-group">
        <label for="description">Descripotion</label>
        <input class="form-control" type="text" value="{{$product->description}}" name="description" id="description"/>

    </div>

    <div class="form-group">
        <label for="name">Price</label>
        <input class="form-control" type="text" value="{{$product->price}}"  name="price" id="price"/>
    </div>

    <div class="form-group">
        @if($product->featured == 1)
            <label for="featured">Featured</label>
            <input class="form-inline" type="checkbox" checked name="featured" id="featured"/>
        @else
            <label for="featured">Featured</label>
            <input class="form-inline" type="checkbox" name="featured" id="featured"/>
        @endif
    </div>

    <div class="form-group">
        @if($product->recommend == 1)
            <label for="featured">Recommend</label>
            <input class="form-inline" type="checkbox" checked name="recommend" id="recommend"/>
        @else
            <label for="featured">Recommend</label>
            <input class="form-inline" type="checkbox" name="recommend" id="recommend"/>

        @endif
    </div>

    <button class="btn-success">Save</button>

    {!! Form::close() !!}

@endsection