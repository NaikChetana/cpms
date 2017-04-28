<?php
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }
 
mysql_select_db("Project", $con);

/*$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password , "proj");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */
$t=11;
$a=12;
$query = "INSERT INTO abstract (Abstract_id,Topic_id,Content ) ".
"VALUES ('$a','$t','$content')";

// mysqli_query($conn,$query) or die('Error, query failed');
if (!mysql_query($query,$con))

 {

  die('Error: ' . mysql_error());
  //header('Location:insertp.html');

 }

 else
 {   //Do all the submission part or storing in DB work and all here
  
   header('Location:inserta.php');
   
  }
 //mysqli_query($conn,$query) or die('Error, query failed');



}
?>