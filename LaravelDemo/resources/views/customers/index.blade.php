<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <a href="{{route('customers.create')}}" class="btn btn-primary mt-5">Add Customer</a>
</div>
 
<div class="container mt-5">
  <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Product</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @if(!empty($customers))
            @foreach($customers as $customer)
              <tr>
                <td>{{$customer['name']}}</td>
                <td>{{$customer['product']}}</td>
                <td>{{$customer['price']}}</td>
                <td><a href="{{route('customers.edit',$customer['id'])}}" class="btn btn-primary">Edit</a><a href="{{route('customers.delete',$customer['id'])}}" class="btn btn-danger ml-1">Delete</a></td>
              </tr>
            @endforeach 
          @endif
          
      </tbody>
  </table>
</div>

</body>
</html>
