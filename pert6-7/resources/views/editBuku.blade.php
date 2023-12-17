<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h2 class="text-center mt-5">Add New Books</h2>

    <form action="/update-buku/{{$bukus->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="d-flex flex-column align-items-center pt-3 gap-3">
            <div class="form-group col-4">
                <label class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter book title" name="title" value="{{$bukus->title}}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-4">
                <label class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Enter book description" name="description" value="{{$bukus->description}}">
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-4">
                <label class="form-label">Author</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" placeholder="Enter book author" name="author" value="{{$bukus->author}}">
                @error('author')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label class="form-label">Stocks</label>
                <input type="text" class="form-control @error('stocks') is-invalid @enderror" placeholder="Enter book stocks" name="stocks" value="{{$bukus->stocks}}">
                @error('stocks')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label class="form-label">Release Date</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date">
                @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label class="form-label">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</body>

</html>
