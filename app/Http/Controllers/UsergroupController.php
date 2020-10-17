<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Request\URL;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Facades\DB;
use App\UserModel;
use App\GroupModel;
use Auth;

class UsergroupController extends Controller
{

	public function show(){  
        
        $datas=\DB::table('users')
      ->leftJoin('group_master','group_master.id', '=' ,'users.select')
      ->select(
                'users.id',
                'users.name',
                'users.phone',
                'users.email',
                'users.address',
                'group_master.title AS select'
            )->get();
      

	        return view('home',['list' => json_decode(json_encode($datas),true)]);
	    }


     public function store(Request $request){

          $this->validate($request, [
                'select'    => 'required',
                'name'      => 'required',
                'phone'     =>  'required',
                'email'     =>  'required',
                'password'  =>  'required',
                'address'   =>  'required'
            ],
            [
                'select.required'    =>     'Select Required',
                'name.required'      =>     'Name Required',
                'phone.required'     =>     'Phone Number  Required',
                'email.required'     =>     'E-mail  Required',
                'password.required'  =>     'Password Required',
                'address.required'   =>     'address Required'
           ]);
           
            $usermodel = new UserModel;


            $usermodel->select   = $request->select;
            $usermodel->name     = $request->name;
            $usermodel->phone    = $request->phone;
            $usermodel->email    = $request->email;
            $usermodel->password = bcrypt($request->password);
            $usermodel->address  = $request->address;


                if($usermodel->save()){

                    session('success', 'Data Added Successfully');

                 return redirect('home');
                }
        }


    

		 public function edituser($id){
            $groupName = GroupModel::get()->toArray();
            $data = UserModel::find($id);

            return view('admin.user.edit_user', ['list' => $groupName,'data'=>$data,'id' => $id]);
		 }


    

    public function delete($id){

        $data = UserModel::find($id);

        if($data != null ){
            if($data->delete()){
                return redirect('home')->with('success', 'Data deleted');
            }else{
                //delete fail
                return redirect('home')->with('failed', 'Data deletion failed');
            }
        }else{
            return redirect('home')->with('success', 'No data found');
        }
    } 

    public function update(Request $request, $id) {       
          
            $data             = UserModel::find($id);
            $data->select     = $request->get('select');
            $data->name       = $request->get('name');
            $data->phone      = $request->get('phone');
            $data->email      = $request->get('email');
            $data->address     = $request->get('address');
            
            $data->save();

            

            return redirect('home')->with('success', 'Data Updated');
    }




   /*public function logs(request $request)
     {

          $this->validate($request, [
                
                
                'phone'     =>  'required',
                'password'  =>  'required'
               
            ],
            [
               
                'phone.required'     =>     'Phone Number  Required',
                'password.required'  =>     'Password Required'
                
           ]);
           
        $phone=$request->input('phone');
        $password=$request->input('password');
        \DB::enableQueryLog();
        $_data = \DB::table("user_details")->where([
                                                        ['phone','=',$phone],
                                                        ['password','=',bcrypt($password)],
                                                    ])->get();

        $query = \DB::getQueryLog();
        print_r($query);

        dd($_data);
        exit();
        
        
        if(count($data))
        {
            return view('dash');

        }
        else
        {
            return redirect('logs')->with('success','Wrong Username or Password');
            /*echo "Wrong Username or Password";
        }
    }*/


}
