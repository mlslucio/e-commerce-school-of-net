
@extends('layout.master')

@section('title','products')

@section('navbar')
    @parent
@endsection
 @section('content')

    <h1> Products </h1>


    <br>
    <a href="{{route('products.create')}}"> New Product </a>"
     <table class="table">
         <th>id</th>
         <th>name</th>
         <th>description</th>
         <th>price</th>
         <th>fetuared</th>
         <th>recommend</th>
         <th>category</th>


         <th colspan="4">action</th>

         @foreach($product as $prod)

             <tr>
                 <td>{{$prod->id}}</td>
                 <td>{{$prod->name}}</td>
                 <td>{{$prod->description}}</td>
                 <td>{{$prod->price}}</td>

                 @if($prod->featured == 1)
                    <td>{{'Yes'}}</td>
                @else
                     <td>{{'No'}}</td>
                 @endif

                 @if($prod->recommend == 1)
                    <td>{{'Yes'}}</td>
                 @else
                     <td>{{'No'}}</td>
                 @endif

                 <td>{{$prod->category->name}}</td>

                 <td> <a href="{{route('products.images',['id'=>$prod->id])}}">Images</a> </td>
                 <td> <a href="{{route('products.edit',['id'=>$prod->id])}}">edit</a> </td>
                 <td> <a href="{{route('products.destroy',['id'=>$prod->id])}}">Delete</a> </td>

             </tr>
         @endforeach
     </table>
    {!!$product->render()!!}
 @endsection