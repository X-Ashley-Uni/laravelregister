<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script> -->

</head>
<body>
    
<form action= "/login/process" method="post">
@csrf

  <div class="form-outline mb-4">
    <input type="email" class="form-control" name="email" />
    @error('name')
    <p>Error! ENTER CORRECT EMAIL</p>
    @enderror
    <label class="form-label" for="form2Example1">Email address</label>
  </div>


  <div class="form-outline mb-4">
    <input type="password" class="form-control" name="password" />
    @error('name')
    <p>Error! WRONG PASSWORD</p>
    @enderror
    <label class="form-label" for="form2Example2">Password</label>
  </div>


  <div class="row mb-4">
    <div class="col d-flex justify-content-center">

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>


  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

</form>

</body>
</html>
