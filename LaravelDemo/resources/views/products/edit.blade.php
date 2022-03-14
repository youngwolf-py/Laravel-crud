<!DOCTYPE html>
<html lang="en">
<head>
  <title>Client form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
<style> body {background-color: lightblue;}</style>
<form action="{{route('products.update',$product->id)}}" method ="post">
      @csrf
      @method('PUT')
      <div class="form-group">
    <label for="title">Title :</label>
    <input type="text" class="form-control" name="title" value={{$product->title}}>
    @error('title')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="date">Date :</label>
    <input type="text" class="form-control" name="date" value={{$product->date}}>
    @error('date')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="status">Status :</label>
    <input type="text" class="form-control" name="status" value={{$product->status}}>
    @error('status')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
  <label for="description">Description :</label>
    <input type="text" class="form-control" name="description" value={{$product->description}} >
    @error('description')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
  </div>
      <input type="submit" class="btn btn-primary mt-2" value="Submit">
  </form>

</div>

</body>
</html>