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
    <h3 class="text-center mt-5">Add New Books</h3>

    <div class="d-flex flex-column align-items-center">
        <form action="/store-buku" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Book Title</label>
                <input type="text" placeholder="Enter Book Title" name="title" class="form-control rounded-top @error('title') is-invalid @enderror" autofocus />
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Book Description</label>
                <input type="text" placeholder="Enter Book Desc" name="description" class="form-control rounded-top @error('description') is-invalid @enderror" autofocus />
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Author</label>
                <input type="text" placeholder="Enter Book Author" name="author" class="form-control rounded-top @error('author') is-invalid @enderror" autofocus />
                @error('author')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Stocks</label>
                <input type="text" placeholder="Enter Book Stocks" name="stocks" class="form-control rounded-top @error('stocks') is-invalid @enderror" autofocus />
                @error('stocks')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Release Date</label>
                <input type="date" placeholder="Enter Book Title" name="date" class="form-control rounded-top @error('date') is-invalid @enderror" autofocus />
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Image *Optional</label>
                <input type="file" placeholder="Enter Book Title" name="image" class="form-control rounded-top @error('image') is-invalid @enderror" autofocus />
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
