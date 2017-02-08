<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- https://coolors.co/3c3744-070707-fffcf2-ccc5b9-735290 -->
    <style>
        html{
            height: 100%;
        }
        body{
            background: #CCC5B9;
            min-height: 100%;
        }
        nav{
            background: #735290;
            color: #CCC5B9;
        }
        nav a{
            color: #CCC5B9;
        }
        article.container{
            -ms-align-items: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            height: 90vh;
        }
        .correct{
            -ms-align-items: center;
            align-items: center;
            background: #FFFCF2;
            display: flex;
            height: 20%;
            margin: auto;
            width: 90%;
        }
        .correct button{
            flex-grow: 1;
            padding: 2em;
            margin: 0 1em;
        }
        .flashcard{
            -ms-align-items: center;
            align-items: center;
            background: #FFFCF2;
            border-radius: 2em;
            cursor: pointer;
            display: flex;
            height: 60%;
            margin: auto;
            transition: transform 2s linear;
            width: 90%;
        }
        .front, .back{
            margin: auto;
        }
        .back{
            display: none;
            transform: rotateX(180deg);
        }
        .flipped{
            transform: rotateX(180deg);
        }
        .raised{
            box-shadow: 0 0 8px 0 grey;
        }
    </style>
</head>
<body>
    <nav class="nav navbar navbar-fixed-top raised">
        <div class="container">
            <ul class="nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href=#>A Link</a></li>
                <li class="nav-item"><a class="nav-link" href=#>Log out</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>
