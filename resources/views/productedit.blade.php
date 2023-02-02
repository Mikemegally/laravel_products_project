<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>product edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3>product update</h3>
    <form action="{{url('product/update/'.$product->id)}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">product name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name}}">

            <div id="name" class="form-text">
                @error('name')
                    <p class="text text-danger">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">stock</label>
            <input type="text" class="form-control" id="stock" name="stock" value="{{ $product->stock}}">
            <div id="stock" class="form-text">
                @error('stock')
                    <p class="text text-danger">{{$message}}</p>
                @enderror

            </div>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">product price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price}}">
            <div id="price" class="form-text">
                @error('price')
                    <p class="text text-danger">{{$message}}</p>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-warning" href="{{url('products')}}">all products</a>
        <a href="{{url('products/'.$product->id)}}">view this product</a>

    </form>
</div>
</body>
</html>
