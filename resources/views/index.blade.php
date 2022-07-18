<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <title>Show!</title>
  </head>
  <body>
    <div class="container">

    <div class="row m-2">
      <form action=""class="col-9 my-3" >
            <div class="form-group">
               <input type="search" name="search" class="form-control"placeholder="Search by name or email" value="{{$search}}"/>
            </div>
            <button class="btn btn-primary">Search</button>
            <a href="/">
              <button class="btn btn-primary">Reset</button>
            </a>
      </form>
      <div class="col-3">
      <button class="btn btn-primary my-5"><a href="/create" class="text-light">Add customer</a></button>
     </div>
            
      </div>

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
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody>
  @if(!empty($customer) && $customer->count())
  @foreach($customer as $customers)
    <tr>
      <th>{{$customers->id}}</th>
      <td>{{$customers->name}}</td>
      <td>{{$customers->email}}</td>
      <td>{{$customers->password}}</td>
      <td>{{$customers->mobile}}</td>
      <td>{{$customers->country}}</td>
      <td>{{$customers->state}}</td>
      <td>{{$customers->address}}</td>
      <td>{{$customers->dob}}</td>
      <td>
       <img src="{{ asset('storage/image/'.$customers->image) }}" width="70px" height="70px" alt="Image">
       </td>
      <td>
         <button class="btn btn-primary"><a href="{{ route('customer.edit',['id'=>$customers->id]) }}" class="text-light">Update</a></button>
       </td>
       <td>
                        <form method="POST" action="{{ route('customer.delete', $customers->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form>
                    </td>
    <td>
        <button class="btn btn-primary"><a href="{{ route('customer.show',['id'=>$customers->id]) }}" class="text-light">Show</a></button>
    </td>
    </tr>
@endforeach  
@else
       <tr>
      <td colspan="10">There are no data.</td>
      </tr>
       @endif  
  </tbody>
  
</table>
    
  </body>
  
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
</html>