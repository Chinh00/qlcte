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
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Price</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row mt-4">
        <div class="col-1"></div>
        <div class="col-8">
            <form action="/add" method="post">
                @csrf
    <div class="mb-3">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="{{old('price')}}">
        @error("price")
            <div class="mt-3">
                <span class="alert alert-danger" role="alert">{{ $message }}</span>
            </div>
        @enderror

    </div>

    <div class="mb-3">
        <label for="price_type">Price type</label>
    <select class="form-control"  name="price_type">
      <option value="0">Khoản thu</option>
      <option value="1">Khoản chi</option>
    </select>
    @error("price_type")
            <div class="mt-3">
                <span class="alert alert-danger" role="alert">{{ $message }}</span>
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="Content">Content</label>
        <input type="text" class="form-control" id="Content" name="content" placeholder="Content" value="{{old('content')}}">
        @error("content")
            <div class="mt-3">
                <span class="alert alert-danger" role="alert">{{ $message }}</span>
            </div>
        @enderror
    </div>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

    <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </div>
</form>
      </div>
     
    </div>
  </div>
</div>
        </div>
        <div class="col-8">
            <form action="/search" method="get">
                <input type="date" name="date" class="form-input mb-3" placeholder="date">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
