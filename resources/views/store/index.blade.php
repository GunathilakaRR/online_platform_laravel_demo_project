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


    <section id="header">
        <div class="container-fluid">

          <!-- navbar -->

          @include('components.navbar')




            <div class="row slogan">
              <div class="col-lg-6">
                <h1>BLOSSOM</h1>
                <a href="{{ route('register') }}" class="btn btn-light btn-lg"><i class="fa-solid fa-user-plus"></i> Register</a>
                <a href="{{ route('login') }}" class="btn btn-dark btn-lg"><i class="fa-solid fa-user"></i>  Login</a>
              </div>

              <div class="col-lg-6">
                  <img src="./images/wallpaper.png" alt="" width="500px">
              </div>
            </div>

        </div>
      </section>

      <div class="card-container">
        @foreach ($stores as $store)
            <div class="card-img">
                <img src={{asset('uploads/stores/'.$store->clothe_img)}}
                    alt="" class="card-img-top">
                <div class="card-content">
                    <h3>{{str($store->clothe_name)->upper() }}</h3>
                    <p>Rs.{{ $store->clothe_price }}/=</p>
                </div>
            </div>
        @endforeach
    </div>



      <!-- feature -->
      {{-- <section id="features">
        <div class="row">
          <div class="feature-box col-lg-4">
            <img src="./images/item1.jpg" alt="" width="300px">
            <p>CASUAL WEAR</p>
          </div>

          <div class="feature-box col-lg-4">
            <img src="./images/item2.jpg" alt="" width="300px">
            <p>OFFICE WEAR</p>
          </div>

          <div class="feature-box col-lg-4">
            <img src="./images/item3.jpg" alt="" width="300px">
            <p>MINI WEAR</p>
          </div>

          <div class="feature-box col-lg-4">
            <img src="./images/item4.jpg" alt="" width="300px">
            <p> OFFICE WEAR</p>
          </div>

          <div class="feature-box col-lg-4">
            <img src="./images/item5.jpg" alt="" width="300px">
            <p>PARTY WEAR</p>
          </div>

          <div class="feature-box col-lg-4">
            <img src="./images/item6.jpg" alt="" width="300px">
            <p>CASUAL WEAR</p>
          </div>
        </div>
      </section> --}}


      <!-- Testimonials -->
        <section id="testimonials">
          <h3>We pride ourselves on providing high-quality clothing at affordable prices. <br>
            Our team of fashion experts is constantly updating our inventory to bring you the latest trends and styles.
          </h3>
          <div class="row row-testimonial">
            <div class="col-lg-6">
              <img class="testimonial-img" src="./images/otara.jfif" alt="" >
              <em>Otara Gunewardene</em>
            </div>
            <div class="col-lg-6">
              <img class="testimonial-img" src="./images/ashcharya.jfif" alt="" >
              <em>Ashcharya Peiris Jayakody</em>
            </div>
          </div>
        </section>


      <!-- press -->
      <!-- <section id="press">
        <img src="./images/brandix.png" alt="" width="200px">
        <img src="./images/brandix.png" alt="" width="200px">
        <img src="./images/brandix.png" alt="" width="200px">
      </section> -->



      <!-- card section -->
      <section id="card">

        <div class="row">
          <div class="card-column col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header">
                <h2>Island wide delivery</h2>
              </div>
              <div class="card-body">
                <h3>We deliver your packages to your door step</h3>
                <p>Our delivery agent will contact you prior to delivery to inform about the delivery time if it is a Cash on Delivery (COD) payment. Delivery for all items is free island wide if the order value exceeds LKR 3,500 if not there will be a delivery charge of LKR 500 applied</p>
              </div>
            </div>
          </div>


          <div class="card-column col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header">
                <h2>Payment methods</h2>
              </div>
              <div class="card-body">
                <h3>You can pay via Debit/Credit or Cash on delivery</h3>
                <p>We ensure that your financial information will not be used, sent or sold to third parties for any kind of purpose not related to BLOSSOM Clothing and its own business area and interest.</p>
              </div>
            </div>
          </div>


          <div class="card-column col-lg-4 col-md-12">
            <div class="card">
              <div class="card-header">
                <h2>7 day exchange</h2>
              </div>
              <div class="card-body">
                <h3>Exchange your item if it doesn't fit you</h3>
                <p>If for any reason you are not satisfied with the products that you have purchased, we will be happy to exchange it according to our easy exchange policy.  Please note that the exchange policy is for the orders placed through our web site.</p>
              </div>
            </div>
          </div>


        </div>
      </section>



      <!-- description -->
      <section id="description">
          <h1>Don’t stress about the dress, we’ll dress you to impress</h1>
          <a href="#features"><button type="button" class="btn btn-dark btn-lg"><i class="fa-solid fa-cart-shopping"></i> Shop Now</button></a>
      </section>


      <!-- footer -->
      <footer id="footer">
          <i class="icon fa-brands fa-facebook-f"></i>
          <i class="icon fa-brands fa-twitter"></i>
          <i class="icon fa-brands fa-instagram"></i>
          <i class="icon fa-solid fa-envelope"></i>
          <p><i class="fa-regular fa-copyright"></i> Copyright 2022 BLOSSOM</p>
      </footer>









    {{-- card section --}}
    {{-- <section>
        <div class="container"> --}}
            {{-- <a href="{{ route('store.create') }}" class="btn btn-primary">Add item</a> --}}

            {{-- <div class="card-container">
                @foreach ($stores as $store)
                    <div class="card">
                        <img src={{asset('uploads/stores/'.$store->clothe_img)}}
                            alt="" class="card-img-top">
                        <div class="card-content">
                            <h3>{{ $store->clothe_name }}</h3>
                            <p>{{ $store->clothe_desc }}</p>
                            <p>{{ $store->clothe_price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section> --}}

    {{-- customer feedback section --}}

    {{-- <div class="feedback">


        <h1>Delighted Customers With Feedbacks</h1>
        <div class="feedback-container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum odio esse veritatis quia sapiente
                harum officia itaque similique neque. Nulla nam fugit quisquam aut nobis autem molestias
                voluptatibus voluptatum?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum odio esse veritatis quia sapiente
                harum officia itaque similique neque. Nulla nam fugit quisquam aut nobis autem molestias
                voluptatibus voluptatum?</p>

        </div> --}}



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
