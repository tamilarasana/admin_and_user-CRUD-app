
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <body>
          <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                 

                       <ul class="nav navbar-nav navbar-right">
                       <a href="group" class="btn btn-info btn-lg">
                           <span class="glyphicon glyphicon-plus-sign"></span> ADD
                         </a>
                       </ul>
                   </div>
           </nav>
                   
     <h2 style="text-align:center;">List </h2>
      <div class="table-responsive">
        <table class="table table-striped table-hover table-condensed">
          <thead>
            <tr>
              <th><strong>Title</strong></th>
              <th><strong>Type</strong></th>
              <th><strong>Permission Module</strong></th>
              <th><strong>Action</strong></th>
           </tr>
        </thead>
          <tbody>        
            @foreach($list ?? []  as $key=> $datas)
              <tr>
                  <td>{{$datas['title']}}</td>
                  <td>{{$datas['select']}}</td>
                  <td>{{is_array($datas['check']) ? implode(',',$datas['check']):''}}</td>
                     <td>
                      <a href="{{action('UserController@edit',$datas['id'])}}"><button class="btn btn-success">Edit</button></a>
                      
                      <a href="{{action('UserController@destroy', $datas['id'])}}"><button class="btn btn-danger">Delete</button></a>
                      </td>
              </tr>
            @endforeach
        </tbody>
      </table>
     <td>      <a class="btn btn-danger" href="#">Back</a>
</td>
  </body>

</html>