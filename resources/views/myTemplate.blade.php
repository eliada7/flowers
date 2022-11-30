<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="/flowers">Flower List</a>
            </li>
            <li>
                <a href="/flowers/create">New Flower</a>
            </li>
        </ul>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>
