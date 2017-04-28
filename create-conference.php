
<?php

if(isset($_POST['submit']))
   {
   
$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }
 
mysql_select_db("Project", $con);
$id=3;
$id1=12;
$sql="INSERT INTO conference (Co_id,Conf_id,Conf_date,Description,conference_name)  
	       VALUES        
	      ('$id','$id1','$_POST[cdate]','$_POST[cdescription]','$_POST[cname]')"; 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());
 
    header('Location:createconf.php');

  }

 else
 {   //Do all the submission part or storing in DB work and all here
  
    header('Location:topics.php');
 }


}
 
 
?>




		  
