<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<a href="{{route('products.create')}}" class="btn btn-primary mt-5">+ Add Product</a>
</div>
 
<div class="container mt-5">
  <table class="table table-striped">
      <thead>
        <tr>
          <th>Title</th>
          <th>Date</th>
          <th>Status</th>
          <th>Description</th>
          <th>Action</th>
          <th>More</th>
        </tr>
      </thead>
      <tbody>
          @if(!empty($products))
            @foreach($products as $product)
              <tr>
                <td>{{$product['title']}}</td>
                <td>{{$product['date']}}</td>
                <td>{{$product['status']}}</td>
                <td>{{$product['description']}}</td>
                <td><a href="{{route('products.edit',$product['id'])}}" class="btn btn-info">Edit</a><a href="{{route('products.delete',$product['id'])}}" class="btn btn-danger ml-1" onclick="confirm('Are You Sure You Want To Delete?')" data-toggle="tooltip" data-placement="top">Delete</a></td>
                <td><a href="{{route('variants.index',$product['id'])}}" class="btn btn-success">Variants</a></td>
              </tr>
            @endforeach 
          @endif
          
      </tbody>
  </table>
</div>

</body>
</html>
