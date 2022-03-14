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

<div class="container mt-4">
<form action="{{route('jobs.update',$job->id)}}" method ="post" >
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="job">Job title:</label>
    <input type="text" class="form-control" name="job" value="{{$job->job}}">
    @error('job')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror 
  </div>
  <div class="form-group">
    <label for="experience">Experience:</label>
    <input type="text" class="form-control" name="experience" value="{{$job->experience}}">
    @error('experience')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror 
  </div>
  <div class="form-group">
    <label for="skills">Skills:</label>
    <input type="text" class="form-control" name="skills" value="{{$job->skills}}">
    @error('skills')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror 
  </div>
  <div class="form-group">
    <label for="lastdate">Last Date:</label>
    <input type="text" class="form-control" name="lastdate" value="{{$job->lastdate}}">
    @error('lastdate')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror 
  </div>
  <div class="form-group">
    <label for="submission">Job Submission:</label>
    <input type="text" class="form-control" name="submission" value="{{$job->submission}}">
    @error('submission')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror 
  </div>
  <div class="form-group">
    <label for="salary">Salary:</label>
    <input type="text" class="form-control" name="salary" value="{{$job->salary}}">
    @error('salary')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror 
  </div>
      <input type="submit" class="btn btn-primary mt-5" value="Update">
  </form>
  
</div>

</body>
</html>
