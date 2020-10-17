@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <!-- Brand/logo -->
                      <ul class="nav navbar-nav navbar-right">
                       <a href="user" class="btn btn-info btn-lg">
                           <span class="glyphicon glyphicon-plus-sign"></span> ADD
                         </a>
                       </ul>
</nav>

               <h2 style="text-align:center;">User Group Conttroller </h2>

          

                      
                   
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


             @if( Auth::user()->id != $datas['id'] )
            
                 <td>
               
                <a href="{{action('UsergroupController@edituser',$datas['id'] )}}"><button class="btn btn-success">Edit</button></a>
                
                <a href="{{action('UsergroupController@delete', $datas['id'])}}"><button class="btn btn-danger">Delete</button></a>
                </td>
             @endif
          </tr>
        @endforeach
        </tbody>
      </table>
      
  </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
