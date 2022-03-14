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
<form action="{{route('teachers.store')}}" method ="post" >
    @csrf
  <div class="form-group">
    <label for="firstname">First name:</label>
    <input type="text" class="form-control" name="firstname" placeholder="Enter First name">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name:</label>
    <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
  </div>
  <div class="form-group">
    <label for="contact">Contact No:</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter Contact No.">
  </div>
  <div class="form-group">
    <label for="email">Email ID:</label>
    <input type="text" class="form-control" name="email" placeholder="Enter email id">
  </div>
  <div class="form-group">
    <label for="subject">Subject Name:</label>
    <input type="text" class="form-control" name="subject" placeholder="Enter subject name">
  </div>
      <input type="submit" class="btn btn-primary mt-5" value="Submit">
  </form>
  
</div>

</body>
</html>
