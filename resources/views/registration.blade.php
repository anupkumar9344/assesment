<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User registration</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div id="registration">
        <h3 class="text-center text-white pt-5">Registration form</h3>
        <div class="container">
            <div id="registration-row" class="row justify-content-center align-items-center">
                <div id="registration-column" class="col-md-6">
                    <div id="registration-box" class="col-md-12">
                        <form id="registration-form" class="form" action="{{url('registeration')}}" method="post">
                            @csrf
                            <h3 class="text-center tc mt-2">Registration</h3>
                            <div class="form-group">
                                <label for="username" class="tc">Enter Name</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="username" class="tc">Enter email</label><br>
                                <input type="email" name="email" id="name" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="username" class="tc">Phone</label><br>
                                <input type="number" name="phone" id="name" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="username" class="tc">Enter Address</label><br>
                                <input type="address" name="address" id="name" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="password" class="tc">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <center>
                                <div class="form-group mt-4">
                                    <input type="submit" name="submit" class="btn btnc btn-md" value="submit">
                                </div>
                            </center>
                            <div id="register-link" class="text-center mt-4">
                                <a href="login" class="tc">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
