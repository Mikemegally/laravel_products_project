<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>product show</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <h3>
        product show
    </h3>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
    <p class="alert alert-primary">
        ID:{{$product->id}}
        <br>
        Name:{{$product->name}}
        <br>
        Stock:{{$product->stock}}
        <br>
        Price:{{$product->price}}
    </p>
    <a class="btn btn-danger" href="{{url('product/delete/'.$product->id)}}">Delete</a>
    <a class="btn btn-success" href="{{url('product/edit/'.$product->id)}}">Edit</a>
    <a class="btn btn-warning" href="{{url('products')}}">all products</a>

</div>
</body>
</html>
