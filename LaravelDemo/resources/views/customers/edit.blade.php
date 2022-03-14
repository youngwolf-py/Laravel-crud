<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<form action="{{route('customers.update',$customer->id)}}" method ="post" >
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{$customer->name}}">
  </div>
  <div class="form-group">
    <label for="product">Product:</label>
    <input type="text" class="form-control" name="product" placeholder="Enter Product Name" value="{{$customer->product}}">
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control" name="price" placeholder="Enter Product Price" value="{{$customer->price}}">
  </div>
      <input type="submit" class="btn btn-primary mt-5" value="Update">
  </form>
  
</div>

</body>
</html>
