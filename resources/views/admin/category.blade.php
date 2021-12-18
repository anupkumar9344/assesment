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
                <h4>Category</h4>
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
                                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="category" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="tc">Name</label><br>
                                        <input type="name" name="cat_name" id="username" class="form-control">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="dis" class="tc">Discription</label><br>
                                        {{-- <input type="text" name="" id="" class="form-control"> --}}
                                        <textarea type="text" name="cat_discription" id="" rows="3"
                                            class="form-control"></textarea>
                                    </div>

                                    <div class="form-group mt-2">
                                        <label for="price" class="tc">Image</label><br>
                                        <input type="file" name="cat_image" id="" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btnc">Add</button>
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
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Details</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $cat)

                        <tr>
                            <th scope="row">{{ $cat['id'] }}</th>
                            <td><img style="border-radius: 50px;" width="30" height="30"
                                    src="{{asset('uploads/category/'.$cat->cat_image)}}" alt="">
                            </td>
                            <td>{{ $cat['cat_name'] }}</td>
                            <td>{{ $cat['cat_discription'] }}</td>
                            <td><button type="button" class="btn btnc" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    edit
                                </button></td>
                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <label for="name" class="tc">Name</label><br>
                                                    <input type="name" name="name" id="username" class="form-control">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label for="dis" class="tc">Discription</label><br>
                                                    {{-- <input type="text" name="" id="" class="form-control"> --}}
                                                    <textarea type="text" name="" id="" rows="3"
                                                        class="form-control"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btnc"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btnc">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <td><a class="btn btnc" href="{{ 'delete/' . $cat['id'] }}">delete</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
