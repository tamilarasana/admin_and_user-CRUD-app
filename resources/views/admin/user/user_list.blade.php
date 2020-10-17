
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

              <!--  <form class="navbar-form navbar-left" action="/search"  method="get">
                        <div class="form-group">
                          <input type="search" class="form-control" placeholder="Search" name="search">
                        </div>
                          <button type="submit" class="btn btn-success">Submit</button>

                          
                    </form>-->



                       <ul class="nav navbar-nav navbar-right">
                       <a href="user" class="btn btn-info btn-lg">
                           <span class="glyphicon glyphicon-plus-sign"></span> ADD
                         </a>
                       </ul>
                   </div>
           </nav>
                   

              <div class="container-fluid">
                 
                 @if(Session::has('success'))
                 <div class ="alert alert-success">
                  <button type ="button" close="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Notification</strong>{{Session::get('success')}}  
                 </div>
               </div>
               
                @endif


     <h2 style="text-align:center;">User Details </h2>
      <div class="table-responsive">
        <table class="table table-striped table-hover table-condensed">
          <thead>
            <tr>
              <th><strong>User Group</strong></th>
              <th><strong>Name</strong></th>
              <th><strong>Phone Number</strong></th>
              <th><strong>Email</strong></th>
              <th><strong>Address</strong></th>
              <th><strong>Action</strong></th>
           </tr>
        </thead>
          <tbody>        
            @foreach($list  as $key=> $datas)

            
          <tr>
      
            <td>{{$datas['select']}}</td>
            <td>{{$datas['name']}}</td>
            <td>{{$datas['phone']}}</td>
            <td>{{$datas['email']}}</td>
            <td>{{$datas['address']}}</td>
           

            
            <?php @if( Auth::user()->id == $datas['id'] )?>
            <

               <td>
               
                <a href="{{action('UsergroupController@edituser',$datas['id'] )}}"><button class="btn btn-success">Edit</button></a>
                
                <a href="{{action('UsergroupController@delete', $datas['id'])}}"><button class="btn btn-danger">Delete</button></a>
                </td>
              <?php  @endif ?>

          </tr>
        @endforeach
        </tbody>
      </table>
      <a class="btn btn-danger" href="{{ url('/dash') }}">Back</a>
  </body>

</html>


<!--['id' =>  $value->id ])}}














