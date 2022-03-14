<!DOCTYPE html>
<html lang="en">
<head>
  <title>Client Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<a href="{{route('clients.create')}}" class="btn btn-primary mt-5">Add Client</a>
</div>
 
<div class="container mt-5">
  <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Status</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
          @if(!empty($clients))
            @foreach($clients as $client)
              <tr>
                <td>{{$client['name']}}</td>
                <td>{{$client['status']}}</td>
                <td>{{$client['date']}}</td>
                <td><a href="{{route('clients.edit',$client['id'])}}" class="btn btn-primary">Edit</a><a href="{{route('clients.delete',$client['id'])}}" class="btn btn-xs btn-danger ml-1" onclick="myFunction()">Delete</a></td>
              </tr>
            @endforeach 
          @endif
          
      </tbody>
  </table>
</div>

</body>
<script>
function myFunction() {
  confirm("Are you sure you want to delete this data entry ?");
}
</script>
</html>
