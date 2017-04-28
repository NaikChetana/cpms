<?php
include('session.php'); 
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

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password , "Project");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$author=$login_session;//value of author
$a=$login_session2;//abstract id
$query = "INSERT INTO paper (Paper_id,Abstract_id,Author_id ,Content ) ".
"VALUES ('$a','$a','$author','$content')";
if (!mysqli_query($conn,$query))

 {

  die('Error: ' . mysql_error());
 // header('Location:insertp.html');

 }

 else
 {   //Do all the submission part or storing in DB work and all here
 echo "<br>File $fileName uploaded<br>";
  header('Location:insertp.php');
  }
 //mysqli_query($conn,$query) or die('Error, query failed');



}
?>