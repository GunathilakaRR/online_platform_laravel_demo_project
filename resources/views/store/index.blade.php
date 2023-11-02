<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>

    {{-- google fonts link --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;500&display=swap" rel="stylesheet">

    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/index.css">



</head>

<body>

    {{-- navigaionbar section --}}
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="{{ route('store.index') }}">Fashion Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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


    {{-- header section --}}

    <div class="header">
        <div class="container">
            <h1> FASHION <br> STORE </h1>
        </div>

        <img src="/images/wallpaper.jpg">
    </div>




    {{-- card section --}}
    <section>
        <div class="container">
            {{-- <a href="{{ route('store.create') }}" class="btn btn-primary">Add item</a> --}}

            <div class="card-container">
                @foreach ($stores as $store)
                    <div class="card">
                        <img src="https://cdn11.bigcommerce.com/s-rxzabllq/images/stencil/1280x1280/products/1504/12422/1HT_AQUA-Plain-100-Cotton-Tshirt-Online__30618.1643763653.jpg?c=2"
                            alt="" class="card-img-top">
                        <div class="card-content">
                            <h3>{{ $store->clothe_name }}</h3>
                            <p>{{ $store->clothe_desc }}</p>
                            <p>{{ $store->clothe_quantity }}</p>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section>

    {{-- customer feedback section --}}

    <div class="feedback">


        <h1>Delighted Customers With Feedbacks</h1>
        <div class="feedback-container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum odio esse veritatis quia sapiente
                harum officia itaque similique neque. Nulla nam fugit quisquam aut nobis autem molestias
                voluptatibus voluptatum?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum odio esse veritatis quia sapiente
                harum officia itaque similique neque. Nulla nam fugit quisquam aut nobis autem molestias
                voluptatibus voluptatum?</p>

        </div>



    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
