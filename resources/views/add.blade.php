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
    
    <div class="row mt-4">
        <div class="col-1"></div>
        <div class="col-8">
            <form action="/add" method="post">
                @csrf
    <span class="text-center">Add price</span>
    <div class="mb-3">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
        @error("price")
            <div class="mt-3">
                <span class="alert alert-danger" role="alert">{{ $message }}</span>
            </div>
        @enderror

    </div>

    <div class="mb-3">
        <label for="price_type">Price type</label>
    <select class="form-control" id="exampleFormControlSelect1" name="price_type">
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
        <input type="text" class="form-control" id="Content" name="content" placeholder="Content">
        @error("content")
            <div class="mt-3">
                <span class="alert alert-danger" role="alert">{{ $message }}</span>
            </div>
        @enderror
    </div>
    <a href="/" class="btn btn-secondary">Quay lại</a>

    <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </div>
</form>
</body>
</html>