<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Request\URL;
use Illuminate\Http\Facades\DB;
use App\UserModel;
use App\GroupModel;
use Auth;

class UserController extends Controller
{

   

public function storedata(Request $request){
              $this->validate($request, [
                    'title'       => 'required',
                    'select'      => 'required',
                    'check'       =>  'required'
                    
                ],
                [
                    'title.required'     =>     'Title Required',
                    'select.required'    =>     'Select Any One Required',
                    'check.required'     =>     'Check Box Empty  Required'
                    
               ]);           
            $datas = new GroupModel();
            $datas->title  = $request->title;
            $datas->select = $request->select;
            $datas->check  =$request->check;

            if($datas->save())
            {
                return redirect('show')->with('success', 'Successfully Added');
            }
        }

        public function getdata(){ 
         
            $datas = GroupModel::get();
            return view('usermaster',['list' => $datas]);
        }


         public function show() {
        
            
            $data['list'] = GroupModel::get()->toArray();

            return view('admin.menu.showmenu',$data);
        }

   

        public function edit($id){

                $data = GroupModel::find($id);


                return view('admin.menu.edit_details', compact('data','id'));
            }


        public function update(Request $request, $id) {       
             
              
                $data            = GroupModel::find($id);
                $data->title     = $request->get('title');
                $data->select    = $request->get('select');
                $data->check     = $request->check;
                $data->save();
                return redirect('show')->with('success', 'Data Updated');
            }
      
        public function destroy($id){

                $data = GroupModel::find($id);
                $data->delete();
                return redirect('show')->with('success', 'Data deleted');

        }  

    


}














