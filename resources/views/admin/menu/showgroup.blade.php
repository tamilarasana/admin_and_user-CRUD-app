<!DOCTYPE html>
<html>
 <head>
  <title>Your Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 </head>
 <body>
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
    
        @foreach($list  as $key=> $datas)
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
  <a class="btn btn-danger" href="{{ url('/usermaser') }}">Back</a>
  </body>
</html>