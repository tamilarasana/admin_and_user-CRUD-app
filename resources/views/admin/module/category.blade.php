@extends('layouts.app')

@section('content')
<body>
         <h2 style="text-align:center;">Catagory </h2>
           <div class="container">
            <div class="row">
             <div class="col-md-3">
             
              <form class="" action="{{URL::to('/store')}}" method="post" autocomplete="off">
                {{ csrf_field() }}
                 

                            <div class="form-group">
                                <label>Catagory Name</label>
                                <input type="text" name="c-name"  placeholder="Name" class=" form-control">
                                @if($errors->has('c-name'))
                                <span class="text-danger">
                                {{$errors->first('c-name')}}
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Catagory Details</label>
                                <input type="text" name="c-details"  placeholder="Phone Number" class=" form-control">
                                @if($errors->has('c-detail'))
                                <span class="text-danger">
                                    {{$errors->first('c-details')}}
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
