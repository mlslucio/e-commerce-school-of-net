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

            </div>
        </div>
    </nav>

@show

<div class="container">

    @yield('content')
</div>
</body>
</html>