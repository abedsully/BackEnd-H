<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    @foreach ($bukus as $b)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/images/' . $b->image)}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$b->title}}</h5>
                <p class="card-text">Authors: {{$b->author}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach





</body>

</html>
