<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <div class="d-flex flex-column align-items-center mt-5">
        @if ($buku->image)
            <img class="card-img-top" src="{{ asset('storage/images/' . $buku->image) }}" alt="Card image cap"
                style="width: 18rem; height: 15rem;">
        @else
            <img class="card-img-top" src="{{ asset('assets/buku.webp') }}" alt="Card image cap"
                style="width: 18rem; height: 15rem;">
        @endif

        <h2 class="mt-3">Title: {{ $buku->title }}</h2>
        <p>Description: {{ $buku->description }}</p>
        <p>Author: {{ $buku->author }}</p>
        <p>Stocks: {{ $buku->stocks }}</p>
        <p>Release Date: {{ $buku->date }}</p>

        <a href="/dashboard" class="btn btn-secondary">Back To Dashboard</a>
    </div>

</body>

</html>
