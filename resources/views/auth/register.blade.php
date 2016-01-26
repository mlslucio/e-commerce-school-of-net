
    @extends('store.store')

         @section('content')
                <br/>
                <form  method="POST" action="{{route('auth.register.save')}}">
                    {!! csrf_field() !!}

                    <!--<div>
                        Name
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                    </div>-->

                    <div>
                        Email
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div>
                        Password
                        <input class="form-control" type="password" name="password">
                    </div>

                    <div>
                       <!-- Confirm Password
                        <input class="form-control" type="password" name="password_confirmation">-->
                    </div>

                    <div><br/>
                        <button class="btn btn-info " type="submit">Register</button>
                    </div>
                </form>
            </div> <br/>

            <script src="{{url()}}{{elixir('js/all.js')}}"></script>
         @stop
