
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
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


<h3 class="text-center text-light bg-primary p-3 w-50 mt-3" style="margin-left:30%">Add New Product</h3>
<div  style="margin-left:30%" class="w-50">

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name" required><br>

        <input type="number" name="price" class="form-control" id="price" step="0.01" placeholder="Enter Product Price" required><br>

        <select name="category_id" class="form-control" id="category_id" required>
            <option>Select One Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><br>

        <button type="submit" class="form-control btn btn-primary" >Add New Product</button>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>