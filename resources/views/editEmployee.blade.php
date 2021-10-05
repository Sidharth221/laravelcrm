<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel Pagination Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>

    <body>
    <form action=""  method = "POST" >
    @csrf 
    @method('PUT') 

    <div class="mb-3">
    <label for="FirstName" class="form-label">FirstName</label>
    <input type="string" class="form-control"  name = "FirstName" value = "{{$employee->FirstName}}">
  </div>

  <div class="mb-3">
    <label for="LastName" class="form-label">Last Name</label>
    <input type="string" class="form-control" name = "LastName" value = "{{$employee->LastName}}">
    
  </div>
  
    <div class="mb-3">
    <label for="Company" class="form-label">Company</label>
    <input type="text" class="form-control" name="cmp" value = "{{$employee->company}}">
  

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "email" value = "{{$employee->email}}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  </div>
  
  <div class="mb-3">
  <label for="phone" class="form-label">Phone Number</label>
  <input type="integer" class="form-control" name="phone" value = "{{$employee->phone}}">


</div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </body>
    </html>