<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel Pagination Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
<body>

<a href="home" class="btn btn-dark px-5 " role="button" >Home</a>
  
<h1>All Companies</h1>

<a href="Dcompany" class="btn btn-primary float-right mx-5 "  role="button" >Add Company from here</a>

@if (session()->has('status'))
    {{session('status')}}
    @endif


<div class="container mt-5">
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Logo</th>
                        <th scope="col">website</th>
                        <th scope="col"></th>
                        <th scope="col"></th> <br>
                        
                    </tr>
                </thead>
   
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <th scope="row">{{ $company->id }}</th>
                        <td>{{ $company->Name }}</td>
                        <td>{{ $company->email }}</td>
                        <td><img src="{{ asset('storage/app/public/' . $company->logo) }}" width="100px;" height="100px;" alt=""></td>
                        <td>{{ $company->website }}</td>
                        <td><a class="btn btn-warning" href="{{url('/company/edit',$company->id)}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="{{url('/company/delete',$company->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
</table>

<div>
    {{$companies->links('pagination::bootstrap-4')}}
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>