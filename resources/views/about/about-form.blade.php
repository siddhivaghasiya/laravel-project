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
  <h2>About Form</h2>

  <form action="{{route('about.update-about-form')}}" method="POST">
    
    @csrf

    <div class="form-group">
      <label >Title:</label>
      <input type="text" value="{{$obj->title}}" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>

    <div class="form-group">
      <label >Address:</label>
      <input type="text" value="{{$obj->address}}" class="form-control" id="adress" placeholder="Enter adress" 
      name="address">
    </div>

    <div class="form-group">
      <label >Description:</label>
      <input type="text" value="{{$obj->description}}" class="form-control" id="description" placeholder="Enter description" name="description">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>

   

  </form>
</div>

</body>
</html>
