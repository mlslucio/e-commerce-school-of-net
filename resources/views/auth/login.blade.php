
@extends('store.store')

   @section('content')

                <div class="alert-info"> {{ Session::get('msgCadastro') }} </div>


               <div class="row">
                   <div class="col-sm-5 col-lg-offset-3">
                        <form method="POST" action="{{url('/auth/login')}}">
                            {!! csrf_field() !!}
                            <h2 class="form-signin-heading">Please sign in</h2>
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </form>
                       <h3><a class="pull-left" href="{{route('auth.register')}}">Registrar-se</a></h3>
                       <h3><a class="pull-right" href="{{route('auth.recuperar.senha')}}">Recuperar senha</a></h3><br/><br/>
                   </div>
               </div>

   @stop
    <script src="{{url()}}{{elixir('js/all.js')}}"></script>













