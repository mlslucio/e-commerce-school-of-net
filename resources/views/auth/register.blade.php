
    @extends('store.store')

         @section('content')
                <br/>
                <form  method="POST" action="{{route('auth.register.save')}}">
                    {!! csrf_field() !!}

                        Name
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">


                    <div>
                        Email
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div>
                        Password
                        <input class="form-control" type="password" name="password">
                    </div>

                    <div>
                        uf
                        <input class="form-control" type="text" name="uf">
                    </div>

                    <div>
                        Cidade
                        <input class="form-control" type="text" name="cidade">
                    </div>

                    <div>
                        Bairro
                        <input class="form-control" type="text" name="bairro">
                    </div>

                    <div>
                        Rua
                        <input class="form-control" type="text" name="rua">
                    </div>

                    <div>
                        Numero
                        <input class="form-control" type="text" name="numero">
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
