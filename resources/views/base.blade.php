<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger mb-3">
        <div class="container">
            <a href="" class="navbar-brand" style="font-size:23px;"><u class="bold"><strong>Coaching</strong></u></a>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link text-light">Home</a></li>

                @auth
                <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link text-light text-capitalize">
                    {{auth()->user()->name}}
                </a></li>
                @endauth

                @guest
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link text-light">login</a></li>
                <li class="nav-item"><a href="{{route('signup')}}" class="nav-link text-light">Signup</a></li>
                @endguest

                @auth
                <li class="nav-item"><a href="{{route('logout')}}" class="nav-link text-light">logout</a></li>
                @endauth

                <li class="nav-item"><a href="{{route('student.create')}}" class="btn btn-primary btn-sm my-1 text-light fw-bold">Apply For Join Us</a></li>

            </ul>
        </div>
    </nav>

    @section('data')
      @show()
    
    
</body>
</html>