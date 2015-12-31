
@extends('layout.master')

@section('title','products')

@section('navbar')
    @parent
@endsection
 @section('content')




    <h1> images of {{$product->name}} </h1>

    <br>

     <table class="table">
         <th>id</th>
         <th>image</th>
         <th>extension</th>
         <th colspan="4">action</th>


         @foreach($product->images as $image)

             <tr>
                 <td>{{$image->id}}</td>
                 <td> <img style="width:10%;" src="{{url('uploads/'.$image->id.'.'.$image->extension)}}"> </td>
                 <td>{{$image->extension}}</td>

                <td><a href="{{route('products.images.create',['id'=>$product->id])}}"> New image </a>"</td>
                 <td> <a href="{{route('products.edit',['id'=>$image->product->id])}}">edit</a> </td>
                 <td> <a href="{{route('products.images.destroy',['id'=>$image->id])}}">Delete</a> </td>
             </tr>

         @endforeach
     </table>
    <a href="{{route('product')}}"> voltar </a>
 @endsection