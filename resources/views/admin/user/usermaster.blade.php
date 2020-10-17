<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
        <body>
         <h2 style="text-align:center;">Register </h2>
           <div class="container">
            <div class="row">
             <div class="col-md-3">
             
              <form class="" action="{{URL::to('/store')}}" method="post" autocomplete="off">
                {{ csrf_field() }}
                  <div class="form-group">
                       <label for="sel1">User Group:</label>
                         <select name="select" class="form-control" id="sel1">
                           <option value="">--Select--</option>
                            @foreach ($list ?? [] as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach

                          </select>
                           </select>
                           <br>
                           </div>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name"  placeholder="Name" class=" form-control">
                                @if($errors->has('name'))
                                <span class="text-danger">
                                {{$errors->first('name')}}
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone"  placeholder="Phone Number" class=" form-control">
                                @if($errors->has('phone'))
                                <span class="text-danger">
                                    {{$errors->first('phone')}}
                                </span>
                                     @endif
                             </div>



                              <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email"  placeholder="Enter E-mail" class=" form-control">
                                @if($errors->has('email'))
                                <span class="text-danger">
                                    {{$errors->first('email')}}
                                </span>
                                     @endif
                             </div>





                  
                             <div class="form-group">
                                 <label>Password</label>
                                     <input type="password" name="password"  placeholder="Password" class="form-control">
                                 @if($errors->has('password'))
                                 <span class="text-danger">
                                      {{$errors->first('password')}}
                                  </span>
                                      @endif            
                              </div>

                              <div class="form-group">
                                  <label>Address</label>
                                     <input type="text" name="address"  placeholder="Address" class="form-control">
                                   @if($errors->has('address'))
                                   <span class="text-danger">
                                       {{$errors->first('address')}}
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
        </html>
        