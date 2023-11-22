<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departament;
use App\Models\User;
use Database\Factories\DepartamentFactory;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class DepartamentController extends Controller
{
    public function index()
    {
     
        $departments = Departament::with('children', 'users')->get();
         
        
       // $departments = Departament::find(1)->users;
      //  die(($departments));
        return view('departaments_tree', compact('departments'));
        
    }



    public function departmentUsers($department_id){
        $department = Departament::with('users')->find($department_id);
        return view('admin_departament_users')->with('users', $department->users()->paginate(10));
        die($department);
      
        
    }

    public function addEmployees(Request $request){
        $users=new User();
        $users->name=$request->input('name');
        $users->name=$request->input('email');
        $users->name=$request->input('lastName');
        $users->name=$request->input('birthday');
        $users->name=$request->input('address');
        $users->save();
        return back()->with('success','You have added the data successfully');
        
        
        
        
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
   


    public function editDepartments(Request $request  ){
        $departments = Departament::find($request->id);
    
       return view('editDepart',compact('departments'));
       }
    
    
       public function save_depart(Request $request)
    {   
        
       $departments= new Departament();
        $departments = Departament::find($request['id']);
        
        // return $post['name'];
        $departments->name = $request['departi'];
      
        $departments->save();
    
       return back();
    }
    

    public function deleteDepartment(Request $request  ){
    $departments= Departament::find($request->id);

  $departments->delete();
  return back();
   }


   //
    public function user(Request $request,$id){
        $userId = Auth::id();
    
      
        $userData = User::where('id', $userId)->first();
        return view('user1',compact('userData'));
    }
    

    //
    public function dashboard(Request $request){
        $userId = Auth::id();
    
      
        $userData = User::where('id', $userId)->first();
        return view('user1',compact('userData'));
    }
}