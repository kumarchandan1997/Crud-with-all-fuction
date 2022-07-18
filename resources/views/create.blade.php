<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Final crud!</title>
  </head>
  <body>
   <div class="container my-5">
    <h1 class="text-center" >{{$title}}</h1>
    <div> 
    <form action="{{$url}}"  method="post" enctype="multipart/form-data">
                @csrf
    
    
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" class="form-control"  placeholder="name" value="{{$customer->name}}">
      @error('name')
     <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control"  placeholder="Email" value="{{$customer->email}}">
      @error('email')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control"  placeholder="Password" value="{{$customer->password}}">
    @error('password')
    <span class="text-danger">{{ $message}}</span>
    @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Mobile</label>
      <input type="text" name="mobile" class="form-control"  placeholder="mobile" value="{{$customer->mobile}}">
    @error('mobile')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Country</label>
      <input type="text" name="country" class="form-control"  placeholder=" Country" value="{{$customer->country}}">
    @error('country')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">State</label>
      <input type="text" name="state" class="form-control"  placeholder="state" value="{{$customer->state}}">
    @error('state')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">DOB</label>
      <input type="date" name="dob" class="form-control"  placeholder="dob" value="{{$customer->dob}}">
    @error('state')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Image</label>
      <input type="file" name="image" class="form-control"  placeholder="image" value="{{$customer->image}}" >
    
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address" class="form-control"  placeholder="address" value="{{$customer->address}}">
  @error('address')
  <span class="text-danger">{{$message}}</span>
  @enderror
  </div>
  

  
  <div class="form-group col-md-12">
  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</div>
</form>
    </diV>
   </div>

    
  </body>
</html>