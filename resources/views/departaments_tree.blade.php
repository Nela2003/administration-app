<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('admin_dashboard/styles.css') }}">
  <title>Admin Dashboard</title>
</head>
<body>
    <video autoplay muted loop id="video-bg">
        <source src="{{ asset('videos/vecteezy_binary-code-with-numbers-moving-downward-on-screen_2015336.mp4') }}" type="video/mp4">
          
        </video>
        
        
  <div class="container">
    @include('navbar')
    @include('side-panel')
    <img src="{{ asset('Nela.png') }}" style="height:250px;width:100%">
    <div class="department-container">
    <h2 style="text-align:center">Departments</h2>
    <div class="arrow-up"> </div>
    <div>
    <ul class="department-tree">
        @foreach($departments as $department)
        @if($department->parent_id==0)
        <li class="department">
          <div class="department-container">
            <a href="{{ route('departmentUsers', ['department_id' => $department->id]) }}">{{ $department->name }}</a>
            <div class="arrow-up1"> </div>
          </div>
            <div class="buttons">
                <a href="{{ route('depart') }}">&nbsp;&nbsp;Add</a>
              <a href="{{ route('deleteDepartment',['id'=> $department->id]) }}">Delete</a>
              <a href="{{ route('edit',['id'=>$department->id]) }}">Edit</a>
            </div>
            @if(count($department->children) > 0) 
            <ul class="children">
                @foreach($department->children as $depart)
                <li class="department">
                  <div class="department-container"> 
                    <a href="{{ route('departmentUsers', ['department_id' => $depart->id]) }}">{{ $depart->name }}</a>
                    <div class="arrow-up2"> </div>
                  </div>
                    <div class="buttons">
                        <a href="{{ route('depart') }}">&nbsp;&nbsp;Add</a>
                        <a href="{{ route('deleteDepartment',['id'=> $depart->id]) }}">Delete</a>
                        <a href="{{ route('edit',['id'=>$depart->id]) }}">Edit</a>
                    </div>
                    @if(count($depart->children) > 0)
                    <ul class="sub-children">
                        @foreach($depart->children as $child)
                          <li class="department">
                              <a href="{{ route('departmentUsers', ['department_id' => $child->id]) }}">{{ $child->name }}</a>
                            <div class="buttons">
                              <a href="{{ route('depart') }}">&nbsp;&nbsp;Add</a>
                              <a href="{{ route('deleteDepartment',['id'=> $child->id]) }}">Delete</a>
                              <a href="{{ route('edit',['id'=>$child->id]) }}">Edit</a>
                            </div>
                          </li>
                          @endforeach
                        </ul>
                    @endif
                  </li>
                  @endforeach
                </ul>
            @endif
          </li>
          @endif
      @endforeach
    </ul>
  </div>
</body>
</html>
@include('footer')
