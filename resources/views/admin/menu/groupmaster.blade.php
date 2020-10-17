<!DOCTYPE html>
<html lang="en">
<head>
  <title>Group Master</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2>Group Master</h2>
  
   <form class="" action="{{URL::to('/storedata')}}" method="post" autocomplete="off">
     {{ csrf_field() }}
      <div class="form-group">
       <label>Group Title</label>
       <input type="text" name="title"  placeholder="Group  Title" class="form-control">
       <br>
      <label for="sel1">Select type:</label>
      <select name="select" class="form-control" id="sel1">
         <option>--Select--</option>
        <option value="admin">Admin</option>
        <option value="author">Author</option>
        <option value="customer">Customer</option>
        
      </select>
      <br>

    </div>   

  <h2>Access Permission for Module </h2>
    <div class="form-check-inline">
      <label class="form-check-lable" for="check1">
        <input type="checkbox"  class="form-check-input" id="check" name="check[]" value="blog">Blog</label>
      </div>
      <br>

      <div class="form-check-inline">
      <label class="form-check-lable" for="check1">
        <input type="checkbox"  class="form-check-input" id="check" name="check[]" value="product">Products</label>
      </div>
      <br>
<div class="form-check-inline">
      <label class="form-check-lable" for="check1">
        <input type="checkbox"  class="form-check-input" id="check" name="check[]" value="unit">
      Units</label>
      </div>
      <br>

      <div class="form-check-inline">
      <label class="form-check-lable" for="check1">
        <input type="checkbox"  class="form-check-input" id="check" name="check[]" value="category">
      Category</label>
      <br>
      </div>

       <div class="form-group">
         <tr><input type="submit" name="button" class="btn btn-success" value="Submit" />
            <td><a class="btn btn-danger" href="show">Cancel</a></td></tr>
                    </div>

  </form>
</div>

</body>
</html>
