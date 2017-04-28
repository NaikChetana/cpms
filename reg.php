<?php
$user =$_POST['user-email'];
$cont=$_POST['user-contact'];
$pass=$_POST['user-pw'];
$addr=$_POST['user-addr'];
$name=$_POST['user-name'];
$server="localhost";
$username="root";
$password="";
$dbname="proj";
$conn = mysql_connect($server, $username, $password, $dbname);
if ($conn === false ) {
    die("Connection failed: " .mysqli_connect_error());
} 

mysql_select_db("root", $conn);
 $sql="INSERT INTO author (Author_id,Name,Password,Conf_id,Contact,address) VALUES ('$user','$name','$pass','$cont','','$addr')";
if($_POST['submit'])
{
  
if ($_POST['role'] === "A_id") {          
     $sql="INSERT INTO author (Author_id,Name,Password,Conf_id,Contact,address) VALUES ('$user','$name','$pass','$cont','','$addr')";
} 
else if($answer ==="C_id") {
     $sql="INSERT INTO coordinator (Co_id,Name,Password,Contact,address) VALUES ('$user','$name','$pass','$cont','$addr')";
} 
else if($answer ==="R_id") {
     $sql="INSERT INTO reviewer (Reviewer_id,Name,Password,Contact,Address) VALUES ('$user','$name','$pass','$cont','$addr')";
} 
else
{
echo "Please select a role";
}
}

if(mysql_query($conn,$sql)) {
echo "New Record Created successfully";
}
else{
echo "ERROR: could not execute $sql . " . mysql_error($conn);
}


mysqli_close($conn);       

?>

