@extends('layouts.app')

@section('content')
<body>
         <h2 style="text-align:center;">Units </h2>
           <div class="container">
            <div class="row">
             <div class="col-md-3">
             
              <form class="" action=" " method="post" autocomplete="off">
                {{ csrf_field() }}
                 

                            <div class="form-group">
                                <label>Units Name</label>
                                <input type="text" name="u-name"  placeholder="Name" class=" form-control">
                                @if($errors->has('u-name'))
                                <span class="text-danger">
                                {{$errors->first('u-name')}}
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Units Details</label>
                                <input type="text" name="u-details"  placeholder="Phone Number" class=" form-control">
                                @if($errors->has('u-detail'))
                                <span class="text-danger">
                                    {{$errors->first('u-details')}}
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
