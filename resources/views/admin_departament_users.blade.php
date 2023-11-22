<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Employees</title>
  <style>
    body {
        margin: 20px; 
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #f2f2f2; 
    }

    th, td {
        border: 1px solid #dddddd; 
        padding: 8px;
        text-align: left;
        font-size: 16px; 
    }

    th {
        background-color: #cccccc; 
    }
</style>
</head>
<body>
  

<form >
  <h3 style="text-align:center;font-size:28px;">Employees' data</h3>
<div class="row">
    <div class="col-md-12">
      <div class="card">
      
        
        <div class="card-body ">
          <div class="table-responsive">
          <table class="table table-bordered table-dark">
                <thead>
                  <tr>
                    <th scope="col">Firstname &nbsp;</th>
                    <th scope="col ">Lastname &nbsp;</th>
                    <th scope="col">Email &nbsp;</th>
                    <th scope="col">Birthday &nbsp;</th>
                    <th scope="col">Address &nbsp;</th>
                    <th scope="col">Profile picture&nbsp;</th>
                    <th scope="col">Password&nbsp;</th>
                    <th scope="col">Edit the data</th>
                   
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                  <tr>
                   
                    <td>{{$user->name}} &nbsp;</td>
                    <td>{{$user->lastName}}&nbsp;</td>
                    <td>{{$user->email}}&nbsp;</td>
                    <td>{{$user->birthday}}&nbsp;</td>
                    <td>{{$user->address}}&nbsp;</td>
                    <td>{{$user->profile_picture}}&nbsp;</td>
                    <td>{{$user->password}}&nbsp;</td>
                    <td><button class="btn btn-rounded  " ><a href="{{ route('editUsers',['id'=>$user->id]  ) }}">Edit </a></button>
                    <button class="btn btn-rounded  "><a href="{{ route('deleteUsers',['id'=>$user->id]  ) }}">Delete </a></button>
                    <button class="btn btn-rounded  "><a href="{{ route('form' ) }}">Add </a></button></td>
                  
                  </tr>
               
                  @endforeach  
                </tbody>
              </table>


           
            
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>