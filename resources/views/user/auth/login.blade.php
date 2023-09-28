<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
</head>
<body>   
    
    <div class="login-form">  
    <h3 class="text-center text-light bg-primary p-3 w-50" style="margin-left:30%">User login</h3>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
        @endif
        <div class="card-body mt-3" style="margin-left:40%">
        <form action="{{ route('login.post') }}" method="POST">
             @csrf
              

            <input type="text" class="form-control w-50" name="username" placeholder="Enter your Username"><br>
            @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span><br>
            @endif
            <input type="password" class="form-control w-50" name="password" placeholder="Enter your password"><br>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span><br>
            @endif
            <input type="submit" value="login now" class="btn btn-primary form-control w-50"> </br>
            <input type="checkbox" id="remember">
            <label for="remember"> remember me?</label>
            <p>don't have any account? <a href="{{route('register')}}">register now</a></p>
            
        </form>
        </div>

        </div> 
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>