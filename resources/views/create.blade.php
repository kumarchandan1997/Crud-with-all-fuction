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









{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission with jQuery AJAX</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <form id="userForm" enctype="multipart/form-data">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group col-md-6">
          <label for="mobile">Mobile</label>
          <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile">
        </div>
        <div class="form-group col-md-6">
          <label for="country">Country</label>
          <input type="text" name="country" id="country" class="form-control" placeholder="Country">
        </div>
        <div class="form-group col-md-6">
          <label for="state">State</label>
          <input type="text" name="state" id="state" class="form-control" placeholder="State">
        </div>
        <div class="form-group col-md-6">
          <label for="dob">DOB</label>
          <input type="date" name="dob" id="dob" class="form-control">
        </div>
        <div class="form-group col-md-6">
          <label for="image">Image</label>
          <input type="file" name="image" id="image" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" placeholder="Address">
      </div>
      <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
      </div>
    </form>
    <div id="validation-errors"></div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>
</html>




<script>
  $(document).ready(function() {
    $('#userForm').on('submit', function(event) {
      event.preventDefault();
  
      var formData = new FormData(this);
  
      $.ajax({
        url: '/your-server-endpoint', // Change this URL to your server endpoint
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          if (response.success) {
            alert('Form submitted successfully');
            $('#userForm')[0].reset(); // Reset the form on success
            $('#validation-errors').html('');
          }
        },
        error: function(xhr) {
          if (xhr.status === 422) {
            var errors = xhr.responseJSON.errors;
            var errorHtml = '<div class="alert alert-danger"><ul>';
            $.each(errors, function(key, value) {
              errorHtml += '<li>' + value[0] + '</li>';
            });
            errorHtml += '</ul></div>';
            $('#validation-errors').html(errorHtml);
          }
        }
      });
    });
  });
  </script> --}}
  