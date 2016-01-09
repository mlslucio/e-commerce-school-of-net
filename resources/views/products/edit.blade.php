
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
        <label for="featured">Featured</label>
        <input type="hidden" name="featured" value="0" class="form-control"/>
        @if($product->featured == 1)
            <input type="checkbox" name="featured" class="form-control"  checked />
        @else
            <input type="checkbox" name="featured" class="form-control" />

        @endif

    </div>

    <div class="form-group">
        <label for="recmmend">Recommend</label>
        <input type="hidden" name="recommend" value="0" class="form-control" />
        @if($product->recommend == 1)
                <input type="checkbox" name="recommend" class="form-control"  checked />

            @else

                <input type="checkbox" class="form-control" name="recommend"  />

            @endif

    </div>

    {!! Form::select('category_id', $categories, $product->category->id, ['class'=>'form-control']) !!}

    <div class="form-group">
        <label for="tag">tags</label>
        <textarea class="form-control" rows="6" cols="4" name="tag" id="tag">{!! $tagFormatada !!}</textarea>


    </div>

    <button class="btn-success">Save</button>

    {!! Form::close() !!}

@endsection