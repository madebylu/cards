<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- https://coolors.co/3c3744-070707-fffcf2-ccc5b9-735290 -->
</head>
<body>
    <nav class="nav navbar navbar-fixed-top raised">
        <div class="container">
            <ul class="nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href='/'>Home</a></li>
                <li class="nav-item"><a class="nav-link" href='/sample'>Sample Card</a></li>
                @if(Auth::check())
                <li class="nav-item"><a class="nav-link" href="/dash">My Cards</a></li>
                <li class="nav-item"><a class="nav-link" href="/logout">Log out</a></li>
                @endif
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>
