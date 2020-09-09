<html>
    <head>
        <title>BracU Bot - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            BracU Bot - Messenger friend to provide you info
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
