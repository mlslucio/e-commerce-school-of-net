<h3> Categories </h3>

    <ul>
        @foreach($data as $k)
            <li>{{$k->name}}</li>
            <li>{{$k->description}}</li>
            <br/>
        @endforeach

    </ul>


