

<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <div class="top">
    <h1>ABC Management System</h1>

    <h3>We Create Future</h3>
  </div>

<div class="menu">
  <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">About Us</a></li>
  <li><a href="#contact">Shop</a></li>

</ul>
</div>

<div class="reg">
  <h2> Registration Form</h2>
</div>

  <form action=" validation.php" method="POST">
  First  Name : <input type="text" name="fname" value=""><br><br>
  Last  Name : <input type="text" name="lname" value=""><br><br>
  Age :          <input type="number" name="age" value=""><br><br>





  Designation : <input type="radio" id="Programmer"  name="Programmer" value="Junior">
  <label for="Programmer">junior</label>
  <input type="radio" id="Programmer" name="Programmer" value="senior">
  <label for="Programmer">senior</label>
  <input type="radio" id="Programmer" name="Programmer" value="Lead">
  <label for="Programmer">lead</label> <br>




  <input type="checkbox" id="lang1" name="lang1" value="java">
  <label class="Programmer"  >java</label><br>
  <input type="checkbox" id="lang2" name="lang2" value="PHP">
  <label class="Programmer" >php</label><br>
  <input type="checkbox" id="lang3" name="lang3" value="C++">
  <label class="Programmer" >C++</label><br>



  Email : <input type="text" name="email" value="" required><br><br>
  password : <input type="password" name="pass" value="" required ><br><br>
Choose a file : <input type="file" value="file "> <br><br>
    <input type="submit" value="Submit" class="submit">
    <input type="submit" value="Reset" id="rest">
  </form>


</body>
</html>
