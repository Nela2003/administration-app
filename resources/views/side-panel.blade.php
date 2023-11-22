<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Side Panel</title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

    #side-panel {
      position: fixed;
      left: 0;
      top: 0;
      height: 100%;
      width: 400px;
      background-color: black;
      color: #fff;
      padding: 20px;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
    }

    #logo {
      margin-bottom: 20px;
    }

    #logo img {
      width: 100%;
      height: auto;
    }

    #nav-links {
      display: flex;
      flex-direction: column;
    }

    .nav-link {
      color: #fff;
      text-decoration: none;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .nav-link:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <div id="side-panel">
    <div id="logo" style="font-weight:bold;font-size:25px;">
        Welcome Admin
    </div>
    <div id="nav-links">
        <a href="#" class="nav-link">Dashboard</a>
        <a href="#" class="nav-link">Departments</a>
        <a href="#" class="nav-link">Users</a>
        <a href="#" class="nav-link">Chat</a>
        <a href="#" class="nav-link">Settings</a>
        <button class="button1" style="font-size:20px;text-align:left;padding:0px; width:40%;border-radius:0.7;">Sign out</button>
     
    </div>
  </div>



</body>
</html>
