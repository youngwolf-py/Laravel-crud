<!DOCTYPE html>
<html lang="en">
<head>
  <title>Variant Site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<a href="{{route('variants.create', $product_id)}}" class="btn btn-primary mt-5">+ Add Variant</a>
</div>

 
<div class="container mt-5">
  <table class="table table-striped">
      <thead>
        <tr>
          <th>Title</th>
          <th>Model</th>
          <th>Cost</th>
          <th>Price</th>
          <th>Availability</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @if(!empty($variants))
            @foreach($variants as $variant)
              <tr>
                <td>{{$variant['title']}}</td>
                <td>{{$variant['model']}}</td>
                <td>{{$variant['cost']}}</td>
                <td>{{$variant['price']}}</td>
                <td>{{$variant['availability']}}</td>
                <td>{{$variant['description']}}</td>
                <td><a href="{{route('variants.edit',$variant['id'])}}" class="btn btn-info">Edit</a><a href="{{route('variants.delete',$variant['id'])}}" class="btn btn-xs btn-danger ml-1" onclick="myFunction()">Delete</a></td>
              </tr>
            @endforeach 
          @endif
          
      </tbody>
  </table>
  <div class="mb-4">
  <a href="{{route('products.index','product_id')}}" class="btn btn-primary mt-2">Back</a>
  </div>
</div>

</body>
<script>
function myFunction() {
  confirm("Are you sure you want to delete this data entry ?");
}
</script>
</html>
