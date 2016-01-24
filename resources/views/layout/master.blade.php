<html>
<head>
    <title> CodeCommerce - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
</head>
<body>
@section('navbar')

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <h4> CodeCommerce</h4>

            </div>

            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="{{route('product')}}">Proucts</a>

                </li>
                <li>
                    <a href="{{route('category')}}">Categories</a>
                </li>
                <li>
                    <a href="{{route('logout')}}">Sair</a>
                </li>

            </ul>

        </div>
    </nav>

@show

<div class="container">

    @yield('content')
</div>
</body>
</html>