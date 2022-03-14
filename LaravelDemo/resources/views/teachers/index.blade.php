<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <form action="{{route('teachers.create')}}" method ="get">
      <input type="submit" class="btn btn-primary mt-5" value="Add Teacher">
  </form>
  
</div>
 
<div class="container mt-5">
  <table class="table">
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Contact</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @if(!empty($teachers))
            @foreach($teachers as $teacher)
              <tr>
                <td>{{$teacher['firstname']}}</td>
                <td>{{$teacher['lastname']}}</td>
                <td>{{$teacher['contact']}}</td>
                <td>{{$teacher['email']}}</td>
                <td>{{$teacher['subject']}}</td>
                <td><a href="{{route('teachers.edit',$teacher['id'])}}" class="btn btn-primary">Edit</a><a href="{{route('teachers.delete',$teacher['id'])}}" class="btn btn-danger ml-1">Delete</a></td>
              </tr>
            @endforeach 
          @endif
          
      </tbody>
  </table>
</div>

</body>
</html>
