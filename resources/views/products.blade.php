<h3> Products </h3>


<ul>
    @foreach($data as $k)
        <li>{{$k->name}}</li>
        <li>{{$k->description}}</li>
        <li>{{$k->price}}</li>
        <br/>
    @endforeach

</ul>


