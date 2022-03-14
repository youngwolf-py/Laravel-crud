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

<div class="container mt-4">
<form action="{{route('customers.store')}}" method ="post" >
    @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name">
    @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror 
  </div>
  <div class="form-group">
    <label for="product">Product:</label>
    <input type="text" class="form-control" name="product" placeholder="Enter Product Name">
    @error('product')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror 
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control" name="price" placeholder="Enter Product Price">
    @error('price')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror 
  </div>
      <input type="submit" class="btn btn-primary mt-5" value="Submit">
  </form>
</div>

</body>
</html>
