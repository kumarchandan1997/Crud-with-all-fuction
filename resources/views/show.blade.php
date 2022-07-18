<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Show!</title>
  </head>
  <body>
   <div class="container my-5">
    <button class="btn btn-primary"><a href="/" class="text-light">Back</a></button>
   <table class="table">
  <thead>
    <tr>
    <th scope="col">SNO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Mobile</th>
      <th scope="col">Country</th>
      <th scope="col">State</th>
      <th scope="col">Address</th>
      <th scope="col">DOB</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
   
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->password}}</td>
      <td>{{$customer->mobile}}</td>
      <td>{{$customer->country}}</td>
      <td>{{$customer->state}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->dob}}</td>
      <td>
        <img src="{{asset('storage/image/'.$customer->image ) }}" width="70px" height="70px" alt="image">
      </td>
    </tr>
    
    
  </tbody>
</table>
   </div>
    
  </body>
</html>