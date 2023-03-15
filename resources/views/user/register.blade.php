<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTER</title>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
  



<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Register (^ o ^)</span>
  </div>
</nav>

<form action= "/store" method="post">
    @csrf
<div class="mb-3">
    <label for="name1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  @error('name')
  <p>Error! Name should be atleast 4 characters long</p>
  @enderror
  </div>
<div class="mb-3">
    <label for="email1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
  @error('email')
  <p>Email Already Exists!</p>
  @enderror
  </div>
  <div class="mb-3">
    <label for="password1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">

    </div>
  </div>
  <div class="mb-3">
    <label for="password1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation">

    </div>    
  <!--</div>  
    <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remeber Me</label>
  </div>-->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>