<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/css/stock.css">

    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
    @include('components.navbar')

    <div class="box">
        <h1>Available Stock</h1>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Dress </th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($stores as $store)
                    <tr>

                        <td>{{ $store->clothe_name }}</td>
                        <td>{{ $store->clothe_desc }}</td>
                        <td>
                            @if ($store->clothe_quantity < 5)
                                <span class="badge bg-danger">{{ $store->clothe_quantity }}</span>
                            @elseif (  $store->clothe_quantity > 10)
                                <span class="badge bg-success">{{ $store->clothe_quantity }}</span>
                            @else
                                <span class="badge bg-primary">{{ $store->clothe_quantity }}</span>
                            @endif
                        </td>
                        <td>Rs.{{ $store->clothe_price }}</td>
                        <td><img class="stock-image" src={{ asset('uploads/stores/' . $store->clothe_img) }}
                                alt="" class="card-img-top"></td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>



</body>

</html>
