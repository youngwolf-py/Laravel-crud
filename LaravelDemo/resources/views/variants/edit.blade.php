<!DOCTYPE html>
<html lang="en">
<head>
  <title>Variant form</title>
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
<form action="{{route('variants.update', $variant->id)}}" method ="post">
      @csrf
      @method('PUT')
      <div class="form-group">
    <label for="title">Title :</label>
    <input type="text" class="form-control" name="title" value={{$variant->title}}>
    @error('title')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="model">Model :</label>
    <input type="text" class="form-control" name="model" value={{$variant->model}}>
    @error('date')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
  <label for="cost">Cost :</label>
    <input type="text" class="form-control" name="cost" value={{$variant->cost}}>
    @error('cost')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
  <label for="price">Price :</label>
    <input type="text" class="form-control" name="price" value={{$variant->price}}>
    @error('price')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
  <label for="status">Availability:</label>
      <select class="form-control" id="status" name="status" value={{$variant->status}}> 
        <option>In Stock</option>
        <option>Out of Stock</option>
        <option>Coming soon</option>
      </select>
    @error('status')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
  <label for="description">Description :</label>
    <input type="text" class="form-control" name="description" value={{$variant->description}}>
    @error('description')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
  </div>
    <input type="submit" class="btn btn-primary mt-5" value="Submit">
  </form>

</div>

</body>
</html>