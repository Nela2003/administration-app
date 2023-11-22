<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Departament;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function editUsers(Request $request  ){
        $users = User::find($request->id);
    
       return view('edit',compact('users'));
       }
    
    
       public function save_user(Request $request)
    {   
        
       
        $users = User::find($request['id']);
        $id_dep =  $users->department_id;
        // return $post['name'];
        $users->name = $request['name'];
         $users->save();
    
       return redirect(route('departmentUsers',$id_dep));
    }
    
    public function ad(){
        return redirect('kodi');
    }
    public function user1(Request $request){
        $userId = Auth::id();
    
      
        $userData = User::where('id', $userId)->first();
        die($userData);
        return view('panel',compact('userData'));
    }
    
    
    public function deleteUsers(Request $request  ){
        $users = User::find($request->id);
    
      $users->delete();
      return back();
       }
    
    
       public function form(){
        return view('insert');
       }
       public function insertUsers(Request $request)
    {   
        
       $users=new User();
       $users->name=$request->name;
       $users->email=$request->email;
       $users->password=$request->password;
       $users->save();
        
       return back();
    }
    
    
    
    public function depart(){
        return view('add_department');
        
    }
    public function add(Request $request)
    {   
        
       $department=new Departament();
       $department->name=$request->name;
      
       $department->save();
        
       return back();
    }
}