
@foreach($departments as $department)
  
         
              
                
<ul class="children">
  <li><a href="{{ route('departmentUsers', ['department_id' => $department->id]) }}"> {{$department->name }}</a></li> 
  <li> <a href="{{ route('depart')}}">Add </a></li>
  <button class="btn btn-rounded  " ><a href="{{ route('deleteDepartment',['id'=>$department->id]  ) }}">Delete</a></button>
  <a href="{{ route('editDepartments',['id'=>$department->id]  ) }}">Edit </a></button>

 @if(count($department->children) > 0)
 @include('departaments_tree_children', ['departments' => $department->children])
 @endif

</ul>


@endforeach

