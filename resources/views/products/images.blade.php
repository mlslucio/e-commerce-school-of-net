
@extends('layout.master')

@section('title','products')

@section('navbar')
    @parent
@endsection
 @section('content')




    <h1> images of {{$product->name}} </h1>

    <br>

    <a href="{{ route('products.images.create',['id'=>$product->id]) }}" class="btn btn-default"> New image </a>
    <a href="{{route('product')}}" class="btn btn-default"> voltar </a>
     <table class="table">
         <th>id</th>
         <th>image</th>
         <th>extension</th>

         @foreach($product->images as $image)

             <tr>
                 <td>{{$image->id}}</td>
                 <td> <img style="width:10%; height: 40px;" src="{{url('uploads/'.$image->id.'.'.$image->extension)}}"> </td>
                 <td>{{$image->extension}}</td>
                 <td> <a href="{{route('products.images.destroy',['id'=>$image->id])}}">Delete</a> </td>
             </tr>

         @endforeach
     </table>

 @endsection