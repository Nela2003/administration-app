<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap">
  <link rel="stylesheet" href="{{ asset('employee_dashboard/styles.css')}}" >
    
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }
    .quotation{
    font-family: 'Dancing Script', cursive; 
    font-size: 24px;
    font-weight: bold;
    color: #333;
    text-align: center;
    margin: 50px 0;
    font-size:40px;}

    header {
      background-color: black;;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    main {
      display: flex;
      margin: 20px;
      margin:0 auto;
    }

    aside {
      width: 200px;
      background-color: #f4f4f4;
      /* padding: 20px; */
      border-right: 1px solid #ccc;
      height:400px;
      margin:0 auto;
      margin-right:auto;
    }

    section {
      flex: 1;
      padding: 20px;
    }

    nav {
      margin-top: 20px;
    }

    nav a {
      display: block;
      text-decoration: none;
      color: #333;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      background-color: #ddd;
      transition: background-color 0.3s;
    }

    nav a:hover {
      background-color: #ccc;
    }

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #f0f0f0;
        }

        th, td {
            border: 1px solid #dddddd; 
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #e6e6e6; 
        }
    </style>
 
</head>
<body  style="background-image: url('{{ asset('user.jpeg') }}');">

  <header>
    <h1>User Dashboard</h1>
  </header>

  <main  style="background-color:white;margin:0 auto;!important;" >
    <aside>
      <p>{{$userData->name}}  {{$userData->lastName}}</p>
      <nav>
        <a href="#">Dashboard</a>
        <a href="#">Profile</a>
        <a href="#">Chat</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
      </nav>
    </aside>

    <section>
      <h2 style="text-align:center;">Welcome {{$userData->name}} {{$userData->lastName}}! We are happy to have you here!!!</h2>
      <div class="quotation">“Do not limit your challenges. Challenge your limits.” </div>

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
                        <th scope="col">Edit the data&nbsp;</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                        
                      <tr>
                       
                        <td>{{$userData->name}} &nbsp;</td>
                        <td>{{$userData->lastName}}&nbsp;</td>
                        <td>{{$userData->email}}&nbsp;</td>
                        <td>{{$userData->birthday}}&nbsp;</td>
                        
                        <td>{{$userData->address}}&nbsp;</td>
                        <td>{{$userData->profile_picture}}&nbsp;</td>
                        <td>{{$userData->password}}&nbsp;</td>
                        <td><button class="btn btn-rounded  " ><a href="{{ route('editUsers',['id'=>$userData->id]  ) }}">Edit </a></button>
                          <button class="btn btn-rounded  "><a href="{{ route('deleteUsers',['id'=>$userData->id]  ) }}">Delete </a></button>
                          <button class="btn btn-rounded  "><a href="{{ route('form' ) }}">Add </a></button></td>
                        
                       
                      </tr>
                   
                     
                    </tbody>
                  </table>
    
    
               
                
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>

</body>
</html>
@include('footer_user')
