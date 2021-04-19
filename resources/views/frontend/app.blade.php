<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>

    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
  </head>
  <body>
    {{-- Top Nav --}}
    <div class="bg-secondary text-white">
        <div class="container">
            Birendra Memorial College, Dharan 1
        </div>
    </div>
    {{-- Navbar --}}
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="/">LOGO</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
                  <a class="nav-link" href="#">About us</a>
                  <a class="nav-link" href="#">Rooms</a>
                  <a class="nav-link" href="#">Contact us</a>
                  <a class="nav-link" href="/login">Login</a>
                </div>
              </div>
            </div>
          </nav>
    </div>
    {{-- Slide --}}
    @yield('slide')
    {{-- Main --}}

    @yield('content')
    {{-- Footer --}}

    <div class="bg-secondary py-5">
        <div class="container text-white">
            <div class="row">
                <div class="col-md-4">
                    <h3>About us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ullam quam ipsam quidem numquam! Voluptas eligendi eaque repellat fugiat illo nobis, laborum non officiis provident velit, repudiandae sequi ab? Quos?</p>
                </div>

                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>Birendra Memorial, Dharan-1</li>
                        <li>Tel: 025525163</li>
                        <li>Website: roomrent.com</li>
                    </ul>

                    <form action="" method="post">
                        @csrf
                        <input type="email" name="email" id="" placeholder="Email">
                        <button type="submit" class="btn btn-sm btn-primary">Subscribe</button>
                    </form>
                </div>

                <div class="col-md-4">
                    <h3>Social Links</h3>
                    <ul>
                        <li><a class="text-white" href="">YouTube Channel</a></li>
                        <li><a class="text-white" href="">Facebook</a></li>
                        <li><a class="text-white" href="">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>