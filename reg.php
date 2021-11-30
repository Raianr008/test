<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if(isset($_POST["submit"]))
{

	 $connection = new db();
	 $conobj=$connection->OpenCon();
	 if($connection->insertdata($conobj,"student",$_POST["username"],$_POST["email"],$_POST["password"]))
	 {
		 echo "data inserted successfully";
	 }
	 else
	 {
		 echo "Error in updating";
	 }
	 $connection->CloseCon($conobj);
}

?>

<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>

</body>
</html>
