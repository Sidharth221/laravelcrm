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
    <label for="Name" class="form-label">Name</label>
    <input type="string" class="form-control" id="exampleInputName1" name = "Name" value = "{{$company->Name}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "email" value="{{$company->email}}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  
    <div class="mb-3">
    <label for="website" class="form-label">Website</label>
    <input type="text" class="form-control" id="exampleInputWebsite1" name="website" value="{{$company->website}}">
  

  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </body>
    </html>