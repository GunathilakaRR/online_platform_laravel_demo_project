<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>

    {{-- <link rel="stylesheet" href="/css/create.css"> --}}

    <style>
        *{
            background-color: #FDE5EC;
            margin: 0px;
            padding: 0px;
        }
        .container-bn{
            width: 100%;
            padding: 0 100px;
            margin-right: 0px;
            margin-left: 0px;
        }
        .form-control{
            background-color: #fcd6db;
        }
        .btn{
            border: 1px solid black;
            background-color: black;
            color: white;
        }
        .btn:hover{
            border: 1px solid black;
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>

    {{-- navigaionbar section --}}
    @include('components.navbar')




    <div class="container-bn">

        <a class="btn mt-5" href="{{ route('store.stock') }}">Dashboard</a>
        <div class="form-con">
            <form action="{{ route('store.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mt-5">
                    <label for=" exampleInputEmail1 ">Clothe Name</label>
                    <input type="text" class="form-control mt-1" name="name" placeholder="Enter clothe name">
                </div>

                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control mt-1" name="description"
                        placeholder="Enter clothe description">
                </div>

                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="number" class="form-control mt-1" name="quantity" placeholder="Enter clothe quantity">
                </div>

                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" class="form-control mt-1" name="price" placeholder="Enter clothe price">
                </div>

                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control mt-1" name="image" placeholder="Enter clothe image">
                </div>


                <button type="submit" class="btn y mt-3">Submit</button>
            </form>
        </div>

    </div>
</body>

</html>
