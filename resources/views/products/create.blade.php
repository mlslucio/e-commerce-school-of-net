
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

    {!! Form::open(['route'=>'products.storage']) !!}
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
        <input class="form-inline" type="checkbox" name="featured" id="featured"/>
        </div>


        <div class="form-group">
        <label for="featured">Recommend</label>
        <input class="form-inline" type="checkbox" name="recommend" id="recommend"/>
        </div>

        {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}

        <div class="form-group">
            <label for="tag">tags</label>
            <textarea class="form-control" type="checkbox" name="tag" id="tag"></textarea>
        </div>

        <button class="btn-success">Add</button>

     {!! Form::close() !!}

 @endsection