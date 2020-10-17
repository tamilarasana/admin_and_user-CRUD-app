@extends('layouts.app')

@section('content')
<body>
         <h2 style="text-align:center;">Products </h2>
           <div class="container">
            <div class="row">
             <div class="col-md-3">
             
              <form class="" action="" method="post" autocomplete="off">
                {{ csrf_field() }}
                 

                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="p-name"  placeholder="Name" class=" form-control">
                                @if($errors->has('p-name'))
                                <span class="text-danger">
                                {{$errors->first('p-name')}}
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Product Details</label>
                                <input type="text" name="p-details"  placeholder="Phone Number" class=" form-control">
                                @if($errors->has('p-detail'))
                                <span class="text-danger">
                                    {{$errors->first('p-details')}}
                                </span>
                                     @endif
                             </div>           
                           
                               <div class="form-group">
                                   <tr><input type="submit" name="button" class="btn btn-success"   value="OK" />
                                   <td><a class="btn btn-danger" href="home">Cancel</a></td>
                                  
                               </div>
                          </form>
                    </div>
                    </div>
            </body>
@endsection
