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

            <div  class="container">
                <br/>
                <br/>
                <form  method="POST" action="{{route('auth.register.save')}}">
                    {!! csrf_field() !!}

                    <div>
                        Name
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                    </div>

                    <div>
                        Email
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div>
                        Password
                        <input class="form-control" type="password" name="password">
                    </div>

                    <div>
                        Confirm Password
                        <input class="form-control" type="password" name="password_confirmation">
                    </div>

                    <div><br/>
                        <button class="btn btn-info " type="submit">Register</button>
                    </div>
                </form>
            </div>

            <script src="{{url()}}{{elixir('js/all.js')}}"></script>

        </body>