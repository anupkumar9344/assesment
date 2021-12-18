<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</head>

<body>
    <x-admin_header />
    <div class="container">
        <div class="row mt-2">
            <div class="col-6">
                <h4>Users</h4>
            </div>
            <div class="col-6">
                <span style="float: right;"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal1">
                        Add New
                    </button></span>
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="add" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="tc">Name</label><br>
                                        <input type="name" name="name" id="username" class="form-control">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="email" class="tc">Email</label><br>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="phone" class="tc">Phone</label><br>
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="address" class="tc">Address</label><br>
                                        <input type="text" name="address" id="address" class="form-control">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="password" class="tc">Password</label><br>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btnc">Save changes</button>
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <table class="table border table-striped">
                <thead class="btnc">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user['id'] }}</th>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['phone'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['address'] }}</td>
                            <td><button type="button" class="btn btnc" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <a class="btnc tc" href="#">edit</a>
                                </button></td>
                            <div class="modal fade " id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/edit" method="post">
                                                @csrf
                                                {{ method_field('PUT') }}
                                                <div class="form-group">
                                                    <label for="name" class="tc">Name</label><br>
                                                    <input type="name" name="name" id="name"
                                                        value="{{ $user['name'] }}" class="form-control">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label for="email" class="tc">Email</label><br>
                                                    <input type="text" name="email" id="email" value="{{ $user['email'] }}" class="form-control">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label for="phone" class="tc">Phone</label><br>
                                                    <input type="text" name="phone" id="phone" value="{{ $user['phone'] }}" class="form-control">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label for="address" class="tc">Address</label><br>
                                                    <input type="text" name="address" id="address" value="{{ $user['address'] }}"
                                                        class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btnc"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <td><a class="btn btnc" href="{{ 'delete/' . $user['id'] }}">delete</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <script src="./assets/css/bootstrap.js"></script>

</body>

</html>
