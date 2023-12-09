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

    {{-- style: display: flex; flex-direction: column; (IN NORMAL CSS STYLING) == d-flex flex-column (IN BOOTSTRAP) --}}
    <div class="d-flex flex-column p-5 align-items-center mt-5">
        <h2 class="text-center">Welcome To Adidas Page</h2>
        <img src="{{ asset('assets/logo.webp')}}" alt="Adidas" width="700" height="500">
        <a href="/index" class="btn btn-secondary">Go Back To Index Page</a>
    </div>

    
</body>
</html>