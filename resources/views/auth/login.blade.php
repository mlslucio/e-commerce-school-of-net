
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shop</title>


    <link href="{{url()}}{{elixir('css/all.css')}}" rel="stylesheet">



</head><!--/head-->


    <body>

    <div class="container">
        <div class="row">
            <div style="top: 150px;" class="col-sm-5 col-sm-offset-3">
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
            </div>
        </div>
    </div> <!-- /container -->

    <script src="{{url()}}{{elixir('js/all.js')}}"></script>


    </body>
</html>