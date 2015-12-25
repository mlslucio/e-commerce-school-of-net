
@extends('layout.master')

@section('title','categories')

@section('navbar')
    @parent
@endsection
 @section('content')

    <h1> Categories </h1>

    <br>
    <a href="{{route('categories.create')}}"> New Category </a>"
     <table class="table">
         <th>id</th>
         <th>name</th>
         <th>description</th>
         <th>action</th>

         @foreach($categories as $category)
         <tr>
             <td>{{$category->id}}</td>
             <td>{{$category->name}}</td>
             <td>{{$category->description}}</td>
             <td> <a href="{{route('categories.edit',['id'=>$category->id])}} }}">edit</a> </td>
             <td> <a href="{{route('categories.destroy',['id'=>$category->id])}} }}">Delete</a> </td>

         </tr>
        @endforeach
     </table>
     {!!$categories->render()!!}
 @endsection