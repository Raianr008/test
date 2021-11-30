<?php
class db{

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "patient";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function insertdata($conn,$table,$username,$email,$password)
{


  $result =$conn->query("INSERT INTO $table (`username`, `email`, `password`) VALUES ('$username','$email','$password');");

  return $result;
}

 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 function SearchProduct($conn,$table,$pid)
 {
$result = $conn->query("SELECT * FROM $table WHERE P_id=$pid");
 return $result;
 }


 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$firstname,$email,$gender,$dob)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email', gender='$gender',dob='$dob' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 function UpdateProduct($conn,$table,$pid,$pname,$pdesc,$pcategory,$pprice)
 {
     $sql="UPDATE $table SET P_Name='$pname',P_Desc='$pdesc',P_Category='$pcategory',P_Price=$pprice WHERE P_Id=$pid";
     if($conn->query($sql)===TRUE)
     {
         return TRUE;
     }
     else
     {
         return FALSE;
     }
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
