<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>


 <body>
 <h2 style="text-align:center;">Edit Your Details </h2>
<div class="container">
<div class ="row">
  <div class="col-md-12">
    <br />
    <h3>Edit Your Details</h3>
    <br/>


        @if(Session::has('success'))
                <div class ="alert alert-success">
                    <p>{{Session::get('success')}}</p>
                </div>
                @endif

              <form  action="{{action('UsergroupController@update', $id ?? '')}}"  name="editForm" method="post">
                             {{ csrf_field() }}
                  <div class="form-group">
                       <label>Group Name</label>
                         <select name="select" class="form-control" id="sel1">
                           <option value="">--Select--</option>
                            @foreach ($list ?? [] as $item)
                                <option value="{{ $item['id'] }}" {{$data->select==$item['select']?"selected=selected":''}}>{{ $item['select'] }}</option>
                            @endforeach

                          </select>
                 
                <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name"  placeholder="Name" value ="{{ $data->name }}"  class=" form-control">
                               
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone"  placeholder="Phone Number"  value ="{{ $data ->phone }}" class=" form-control">
                                
                             </div>

                              <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{$data -> email}}" placeholder="Enter E-mail" class=" form-control">
                               
                             </div>
                  
                             

                              <div class="form-group">
                                  <label>Address</label>
                                     <input type="text" name="address"  placeholder="Address"  value ="{{ $data ->address }}" class="form-control">
                                   
                                 
                              </div>
               
                                <div class="form-group">
                                  <input type="submit"  class="btn  btn-primary" value ="Update">
                                  <td> <a class="btn btn-danger" href="{{ url('/home') }}">Back</a></td>
                                  
                               </div>
          
    </form>
       </div>

         <script type="text/javascript">
         </script>

        </div>
        </div>
    </body>
</html>
