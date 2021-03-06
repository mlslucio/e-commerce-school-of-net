
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

            {!! Form::hidden ('featured',0,['class'=>'form-control']) !!}
            {!! Form::checkbox ('featured',true,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            <label for="featured">Recommend</label>

            {!! Form::hidden ('recommend',0,['class'=>'form-control']) !!}
            {!! Form::checkbox ('recommend',true,['class'=>'form-control']) !!}
        </div>

        {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}


        <div class="form-group">
            <label for="tag">tags</label>
            <textarea class="form-control" rows="5" cols="5" type="checkbox" name="tag" id="tag"></textarea>
        </div>

        <button  type="submit" class="btn-success">Add</button>

     {!! Form::close() !!}

 @endsection