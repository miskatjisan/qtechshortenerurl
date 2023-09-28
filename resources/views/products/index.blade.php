<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light  bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">QtecShortenerUrl</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-light active" aria-current="page" href="{{route('home')}}">Shortener Url</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('products')}}"">Products</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="{{route('logout')}}" class="btn btn-dark text-light">Logout</a>
      </span>
    </div>
  </div>
</nav> 
<h3 class="text-center text-light bg-primary p-3 w-50 mt-3" style="margin-left:30%">Products</h3>
<a href="{{route('products.create')}}" class="btn btn-primary mt-3 p-3">+ Add New Product</a>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-primary text-center mt-3">
        <tr>
            <th>#Id</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
        <?php $i=1; ?>
        @foreach($products as $product)
        <tr>
            <td>{{$i++}}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name}}</td>
            <td>{{ $product->price}}</td>
        </tr>
        @endforeach
    </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>