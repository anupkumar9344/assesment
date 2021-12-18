<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>

<body>
    <nav style="background-color: rgb(14, 50, 83); color:white;" class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-white fw-700" href="#">Dashboard</a>
            <button class="navbar-toggler m-3 text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-white" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active text-white m-2 fw-500" aria-current="page" href="dashbord">Home</a>
                    <a class="nav-link text-white m-2 fw-500" href="users">Users</a>
                    <a class="nav-link text-white m-2 fw-500" href="category">Category</a>
                    <a class="nav-link text-white m-2 fw-500" href="products">Products</a>
                    @if (Auth::user())
                        <a class="nav-link text-white m-2 fw-500" href="{{url('logout')}}">Logout</a>
                    @else
                        <a class="nav-link text-white m-2 fw-500" href="login">Login</a>

                    @endif

                </div>
            </div>
        </div>
    </nav>
</body>

</html>
