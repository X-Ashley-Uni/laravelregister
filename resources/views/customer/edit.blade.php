<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT CUSTOMER</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script> -->

</head>
<body>
    <h1>Edit Customer</h1>
    <form action="/updateCustomer" method="post">
@csrf
    <h1>Add Customer</h1>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
        <input type="hidden" class="form-control" id="Id" name="lastName" value ="{{$customer->id}}" placeholder="Last Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="lastName" value ="{{$customer->lastName}}" placeholder="Last Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="firstName" value ="{{$customer->firstName}}" placeholder="First Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" name="email" value ="{{$customer->email}}" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Contact Number</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="contactNumber" value ="{{$customer->contactNumber}}" placeholder="Philippine number 11 digit">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="address" value ="{{$customer->address}}" placeholder="Address">
        </div>
    </div>

  
    <div class="form-group row">
        <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">EDIT</button>
        </div>
    </div>
</body>
</html>