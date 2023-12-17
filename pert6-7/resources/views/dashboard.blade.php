<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>

</head>

<body>


    <div class="text-center mt-5">
        <h4 class="text-center">Welcome to BNCC Toko Buku</h4>

        <a href="/add-buku" class="btn btn-primary">Add Buku</a>
    </div>


    @if (session('success'))
        <div class="alert alert-success text-center d-flex align-items-center justify-content-center gap-2">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="d-flex flex-column">
        @foreach ($bukus as $buku)
            <div class="col-4 mb-3 mt-5">
                <div class="card" style="width: 18rem;">
                    @if ($buku->image)
                        <img class="card-img-top" src="{{ asset('storage/images/' . $buku->image) }}"
                            alt="Card image cap" style="width: 18rem; height: 15rem;">
                    @else
                        <img class="card-img-top" src="{{ asset('assets/buku.webp') }}" alt="Card image cap"
                            style="width: 18rem; height: 15rem;">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title text-truncate"> {{ $buku->title }}</h5>
                        <p class="card-text text-secondary" style="font-size: 14px; font-style:italic;">Author:
                            {{ $buku->author }}</p>
                        <div class="d-flex justify-content-around">
                            <a href="/detail-buku/{{ $buku->id }}" class="btn btn-primary btn-sm">Details</a>
                            <a href="/edit-buku/{{ $buku->id }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="/delete-buku/{{ $buku->id }}" method="POST"
                                id="deleteForm{{ $buku->id }}">
                                @csrf
                                @method('delete')
                                <button type="button" onclick="confirmDelete({{ $buku->id }})"
                                    class="btn btn-danger btn-sm"> Delete
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>

<script>
    function confirmDelete(bukuId) {
        var confirmation = confirm("Do you really wish to delete this book?");
        if (confirmation) {
            document.getElementById('deleteForm' + bukuId).submit();
        } else {
            return false;
        }
    }
</script>

</html>
