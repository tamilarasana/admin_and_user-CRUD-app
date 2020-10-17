@extends('layouts.app')

@section('content')
<body>
         <h2 style="text-align:center;">Register </h2>
           <div class="container">
            <div class="row">
             <div class="col-md-3">
             
              <form class="" action="{{URL::to('/store')}}" method="post" autocomplete="off">
                {{ csrf_field() }}
                 

                            <div class="form-group">
                                <label>Blog Name</label>
                                <input type="text" name="b-name"  placeholder="Name" class=" form-control">
                                @if($errors->has('b-name'))
                                <span class="text-danger">
                                {{$errors->first('b-name')}}
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Blog Details</label>
                                <input type="text" name="b-details"  placeholder="Phone Number" class=" form-control">
                                @if($errors->has('b-detail'))
                                <span class="text-danger">
                                    {{$errors->first('b-details')}}
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
