<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Google OAuth with Laravel Socialite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1>Hello World</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <h1>Login With Google OAuth and Socialite</h1>
                <div class="card mt-5">
                    <div class="card-body">
                        @auth
                        <h4>Name: {{ auth('web')->user()->name }}</h4>
                        <h4>Email: {{ auth('web')->user()->email }}</h4>
                        <hr>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-danger">Logout</button>
                        </form>
                        @else
                        <a class="btn btn-danger" href="{{ route('redirect') }}">Login with Google</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>