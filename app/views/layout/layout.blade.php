<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a href="{{ action('GamesController@index') }}" class="navbar-brand">Games</a>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>