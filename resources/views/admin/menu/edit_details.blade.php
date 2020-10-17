<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>


 <body>
 <h2 style="text-align:center;">List </h2>
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

		<form  action="{{action('UserController@update', $id)}}"  name="editForm" method="post">
			{{ csrf_field() }}
              <div class="form-group">
                 <label>Group Title</label>
                <input type="text" name="title" class="form-control" value ="{{ $data ->title }}" placeholder="Enter Your Group Title">
                    @if($errors->has('title'))
                            <span class="text-danger">
                                {{$errors->first('title')}}
                            </span>
                    @endif  
		      	</div>

                <div class="fprm-group">
                   <label for="sel1">Select type:</label>
                      <select name="select" class="form-control" id="select">
                        <option value="admin" {{ $data->select == 'admin' ? 'selected=selected':'' }}>Admin</option>
                        <option value="author" {{ $data->select == 'author' ? 'selected=selected':'' }}>Author</option>
                          <option value="customer" {{ $data->select == 'customer' ? 'selected=selected':'' }} >User</option>

                    </select>
                </div>
                <label>Type</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="check[]" value="blog" {{in_array("blog",$data->check)? "checked": ""}}>Blogs
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="check[]" value="product" {{in_array("product",$data->check)? "checked": ""}}>Products
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="check[]" value="unit" {{in_array("unit",$data->check)? "checked": ""}}>Unit
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="check[]" value="category" {{in_array("category",$data->check)? "checked": ""}}>Category
                    </label>
                </div>
           
			<div class="form-group">
			<input type="submit"  class="btn  btn-primary" value ="Save">
       <td> <a class="btn btn-danger" href="{{ url('/') }}">Back</a></td>
          
		</form>
	     </div>

         <script type="text/javascript">
         </script>

        </div>
        </div>
    </body>
</html>
