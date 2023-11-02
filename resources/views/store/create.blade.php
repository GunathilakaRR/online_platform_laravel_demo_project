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

    <link rel="stylesheet" href="/css/create.css">

</head>

<body>

    {{-- navigaionbar section --}}
    <nav class="navbar navbar-expand-lg " >
        <a class="navbar-brand" href="{{ route('store.index') }}">Men's Fashion Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('store.index') }}">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('store.create') }}">Add Items</a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="wallpaper">
        <img src="/images/wallpaper2.jpg" alt="">
    </div>


    <div class="container">
        <div class="form-con">
            <form action="{{ route('store.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Clothe Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter clothe name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" name="description"
                        placeholder="Enter clothe description">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="number" class="form-control" name="quantity" placeholder="Enter clothe quantity">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Enter clothe price">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</body>

</html>
