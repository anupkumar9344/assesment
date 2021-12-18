<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{url('login')}}" method="post">
                            @csrf
                            <h3 class="text-center tc mt-2 mb-3">Login</h3>
                            <div class="form-group">
                                <label for="username" class="tc">Username(Email):</label><br>
                                <input type="email" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="password" class="tc">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <center>
                                <div class="form-group mt-4">
                                    <input type="submit" name="submit" class="btn btnc btn-md" value="submit">
                                </div>
                            </center>
                            <div id="register-link" class="text-center mt-4">
                                <a href="register" class="tc">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
