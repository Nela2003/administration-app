<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Example</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap">
  <link rel="stylesheet" href="{{ asset('employee_dashboard/styles.css')}}" >
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

    nav {
      background-color: black;
      padding: 15px;
      display: flex;
      justify-content: space-around;
      align-items: center;
      height:20px;
      text-color:black;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    li {
      margin-right: 20px;
      position: relative;
    }

    a {
      text-decoration: none;
      color: #fff;
      font-weight: bold;
      font-size: 18px;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    a:hover {
      background-color: #555;
    }

    section {
      display: none;
      padding: 20px;
      border: 1px solid #ddd;
      margin: 20px;
      border-radius: 5px;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #fff;
      z-index: 1;
    }

    li:hover section {
      display: block;
    }
  </style>
</head>
<body>
  <nav>
    <ul>
      <li>
        <a href="#">Home</a>
        <section style="width:800px;height:500px; text-alig:left;" class="quotation">
          <h2>Home </h2>
          <p style="font-size:28px;">This is your home.A home that Nela Company has dedicated to you.You are a valuable member of our company.
           <pre style="font-size:20px;" class="quotation">Inspires, Motivates  and Leads towards success
                                          Nela Company,
                                              The one && The only
                     </pre>
          </p>
        </section>
      </li>
      <li>
        <a href="#">About</a>
        <section style="width:800px;height:500px;" class="quotation">
          <h2>About </h2>
          <p  style="font-size:28px;">Nela company is a leader in the market.With a great experience in the technology field ,our target is to implement the latest technology and to be the first innovators... </p>
        </section>
      </li>
      <li>
        <a href="#">Services</a>
        <section  style="width:800px;height:500px;"  class="quotation">
          <h2>Services </h2>
          <p  style="font-size:28px;">
            Please feel free to contact us for any issues or concerns.Nela Company is always there to reach out to you and to make the best to solve your problems and offer unique applications to you !!
          </p>
        </section>
      </li>
      <li>
        <a href="#">Contact</a>
        <section style="width:800px;height:500px;" class="quotation">
          <h2>Contact us </h2>
          <p  style="font-size:28px;">
            Phone number: +355683041726<br>
            Email address: nelacompany@gmail.com <br>
            or contact   us through  chatbot and social media
          </p>
        </section>
      </li>
    </ul>
  </nav>
</body>
</html>
