<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Break</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/app.css')}}">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-text bg-body-secondary " data-bs-theme="dark" style="background-color: #1f1010!important;">
            <div class="container">
                <!-- <a class="navbar-brand" href="/">Coffee Break</a> -->
                <x-Logo url='/' logoTitle='Coffee Break' />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    @auth
                    <span class="badge bg-primary p-2 mx-2">{{auth()->user()->name}}</span>

                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>

                    @else
                    <a href="/signin" class="btn btn-primary">Sign In</a>
                    <a href="/login" class="btn btn-primary">Login</a>
                    @endauth
                </div>
            </div>
        </nav>
    </div>


    @yield('content')

    <footer class="footer container mt-4">
        <nav class="navbar navbar-expand-lg navbar-text bg-body-secondary justify-content-center" data-bs-theme="dark" style="background-color: #1f1010!important;">
            <p class="text-white">Lorem ipsum dolor sit amet,</p>
        </nav>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <x-Toast />


</body>

</html>