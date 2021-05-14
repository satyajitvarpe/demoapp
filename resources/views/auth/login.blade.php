<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <!-- navigation satrat here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand r" href="#">
                <H2>USER LOGIN</H2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navigation end here -->

    <!-- form start here -->

    <div class="container my-5 ">
        <div class="row">
            <div class="col-md-5 mx-auto border border-2 rounded">
                <h1 class="text-center text-danger"> Login</h1>
                <hr>
                <div class="result">
                    <div class="alert text-success text-center">
                        @if (Session::has('reg_suc'))
                        {{ Session::get('reg_suc') }}
                        @endif
                    </div>
                </div>


                <form action="{{ route('auth/check')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-danger">Email address</label>
                        <input type="email" class="form-control " name="email" placeholder="Enter the email address"
                            id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
                        <span class="text-danger"> @error ('email') {{$message}} @enderror</span>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-danger">Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password"
                            id="exampleInputPassword1" value="{{old('password')}}">
                        <span class="text-danger"> @error ('password') {{$message}} @enderror</span>

                    </div>


                    <div class="d-grid gap-2 col-6 mx-auto my-4">
                        <button class="btn btn-danger" type="submit">Login</button>

                    </div>



                    <div class=" text-center mb-2">
                        <a href="register" class="text-danger">Create An New Account Now!</a>
                    </div>
                    <div class="result">
                        <div class="alert text-danger text-center">
                            @if (Session::has('passfail'))
                            {{ Session::get('passfail') }}
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- form end here -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>


</body>

</html>