<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="row p-3">
    <div class="col">
            <a href="/" class="btn btn-primary">Home</a>

    </div>
    </div>
    <div class="row p-3">
        <div class="col">
            <a href="/add" class="btn btn-primary">Add</a>
        </div>
        <div class="col-8">
            <form action="/search" method="get">
                <input type="text" name="date" class="form-input mb-3" placeholder="date">
                @error("date")
            <div class="mt-3 mb-3">
                <span class="alert alert-danger" role="alert">{{ $message }}</span>
            </div>
        @enderror
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <td>Id</td>
            <td>Price</td>
            <td>Type</td>
            <td>Content</td>
            <td>Create time</td>
        </thead>

        @foreach($data as $key)
            <tr>
                <td>{{$key->id}}</td>
                <td>{{$key->price}}</td>
                <td>{{$key->type_price}}</td>
                <td>{{$key->content}}</td>
                <td>{{$key->created_at}}</td>
            </tr>
        @endforeach

    </table>
</body>
</html>
