<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>products list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>
<body>
    <div class="container">
        <h3>
            products list
        </h3>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
        <table class="table table-success table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">product name</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="{{url('products/'.$product->id)}}">view</a>
                </td>
                <td>
                    <a class="text text-danger" href="{{url('product/delete/'.$product->id)}}">delete</a>
                </td>
                <td>
                    <a class="text text-success" href="{{url('product/edit/'.$product->id)}}">edit</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
