<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body>

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light px-5">
        <a class="navbar-brand d-flex align-items-center gap-3" href="#">
            <img src=" {{ asset('assets/logo.webp') }} " width="80" height="60" class="d-inline-block align-top"
                alt="">
            Adidas Store
        </a>

        <div class="d-flex gap-3">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Product</a>
        </div>

        <div class="">
            <button class="btn btn-primary">Login</button>
        </div>
    </nav>

    {{-- text-align: center (IN NORMAL CSS STYLING); == text-center (IN BOOTSTRAP) --}}
    {{-- display: flex (IN NORMAL CSS STYLING); == d-flex(IN BOOTSTRAP) --}}

    <h3 class="text-center mt-5">Product Lists</h3>

    <div class="d-flex justify-content-around mt-5">
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src=" {{ asset('assets/1.jpeg') }} " alt="Card image cap" height="300">
            <div class="card-body text-center">
                <h5 class="card-title">Nike Shoes</h5>
                <p class="card-text">This is the best shoes to ever be manufactured.</p>
                <a href="/nike" class="btn btn-primary">Go To Nike Store</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src=" {{ asset('assets/2.jpeg') }} " alt="Card image cap" height="300">
            <div class="card-body text-center">
                <h5 class="card-title">Adidas Shoes</h5>
                <p class="card-text">This is the best shoes to ever be manufactured.</p>
                <a href="/adidas-shoes" class="btn btn-primary">Go To Adidas Store</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src=" {{ asset('assets/3.jpeg') }} " alt="Card image cap" height="300">
            <div class="card-body text-center">
                <h5 class="card-title">Nike Shoes Special</h5>
                <p class="card-text">This is the best shoes to ever be manufactured.</p>
                <a href="/nike" class="btn btn-primary">Go To Nike Store</a>
            </div>
        </div>
    </div>

    <footer class="bg-body-tertiary text-center text-lg-start mt-5 ">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-body" href="https://www.google.com">Laravel BE-H Pertemuan 4</a>
        </div>
    </footer>





</body>

</html>
