<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job  Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<a href="{{route('jobs.create')}}" class="btn btn-primary mt-5">Add Job</a>
</div>
 
<div class="container mt-5">
  <table class="table">
      <thead>
        <tr>
          <th>Job title</th>
          <th>Experience</th>
          <th>Skills</th>
          <th>Last date</th>
          <th>Submission</th>
          <th>Salary</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @if(!empty($jobs))
            @foreach($jobs as $job)
              <tr>
                <td>{{$job['job']}}</td>
                <td>{{$job['experience']}}</td>
                <td>{{$job['skills']}}</td>
                <td>{{$job['lastdate']}}</td>
                <td>{{$job['submission']}}</td>
                <td>{{$job['salary']}}</td>
                <td><a href="{{route('jobs.edit',$job['id'])}}" class="btn btn-primary">Edit</a><a href="{{route('jobs.delete',$job['id'])}}" class="btn btn-xs btn-danger ml-1" onclick="myFunction()">Delete</a></td>
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
