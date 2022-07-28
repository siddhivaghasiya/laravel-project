<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Eucation Form</h2>

  <form action="{{route('education.education-update-form')}}" method="POST">
    
    @csrf

    <div class="form-group">
      <label >Title:</label>
      <input type="text" value="{{$obj->title}}" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>

    <div class="form-group">
      <label >Univercity:</label>
      <input type="text" value="{{$obj->univercity}}" class="form-control" id="univercity" placeholder="Enter univercity" name="univercity">
    </div>

    <div class="form-group">
      <label >Course:</label>
      <input type="text" value="{{$obj->course}}" class="form-control" id="course" placeholder="Enter course" name="course">
    </div>

    <div class="form-group">
      <label >Date:</label>
      <input type="date" value="{{$obj->date}}" class="form-control" id="date" placeholder="Enter date" name="date">
    </div>

    <div class="form-group">
      <label >Address:</label>
      <input type="text" value="{{$obj->address}}" class="form-control" id="adress" placeholder="Enter adress" 
      name="address">
    </div>

    <div class="form-group">
       <label >Status:</label>
       <select  class="form-control" value="" name="status">  
         <option value="">select ststus</option>
         <option value="1" @if($obj->status == 1) selected @endif >active</option>
         <option value="2" @if($obj->status == 2) selected @endif >inactive</option>
      </select>
    </div>
    
    
    <button type="submit" class="btn btn-default">Submit</button>

   

  </form>
</div>

</body>
</html>
