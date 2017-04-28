<?php
if(isset($_POST['submit']))
   {
   
$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }
 
mysql_select_db("Project", $con);
$id=13;

$sql="INSERT INTO topics (Conf_id,Topic_Name)  
	       VALUES        
	      ('$id','$_POST[tname]')"; 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());
   // header('Location:signup.php');

  }

 else
 {   //Do all the submission part or storing in DB work and all here
    header('Location:topics.php');
   }


}
//mysql_close($con);

?>




		  
