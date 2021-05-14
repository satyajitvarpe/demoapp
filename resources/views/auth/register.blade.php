<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Register</title>
</head>

<body>
    <!-- navigation satrat here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand r" href="#">
                <H3>USER REGISTER</H3>
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



    <div class="container my-3 ">
        <div class="row">
            <div class="col-md-5 mx-auto border border-2 rounded ">
                <h1 class="text-center text-success"> Register</h1>
                <hr>
                <form action="{{ route('auth/create')}}" method="POST">
                    @csrf
                    <div class="alert text-danger text-center">
                        @if (Session::has('accuntfound'))
                        {{ Session::get('accuntfound') }}
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-success">Enter Full Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{old ('name')}}">
                        <span class="text-danger"> @error ('name') {{$message}} @enderror</span>


                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-success">Email Address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{old ('email')}}">
                        <span class=" text-danger"> @error ('email') {{$message}} @enderror</span>


                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-success">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                            value="{{old ('password')}}">
                        <span class=" text-danger"> @error ('password') {{$message}} @enderror</span>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-success">Enter The Branch</label>
                        <input type="text" class="form-control" name="branch" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{old ('name')}}">
                        <span class="text-danger"> @error ('branch') {{$message}} @enderror</span>


                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="RadioOptions" id="inlineRadio1"
                            value="Teacher">
                        <label class="form-check-label text-success" for="inlineRadio1">Teacher</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="RadioOptions" id="inlineRadio2"
                            value="student">
                        <label class="form-check-label text-success" for="inlineRadio2">Student</label>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto mt-3">
                        <button class="btn btn-success" type="submit">Register</button>

                    </div>
                    <div class=" text-center my-2">
                        <a href="login" class="text-success">Already Have An Account!</a>
                    </div>


                </form>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>


</body>

</html>