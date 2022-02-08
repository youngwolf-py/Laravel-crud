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
<form action="{{route('customers.store')}}" method ="post" >
    @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="product">Product:</label>
    <input type="text" class="form-control" name="product" placeholder="Enter Product Name">
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control" name="price" placeholder="Enter Product Price">
  </div>
      <input type="submit" class="btn btn-primary mt-5" value="Submit">
  </form>
  
</div>

</body>
</html>
