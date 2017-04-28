<?php
  /* define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '' );
   define('DB_DATABASE', 'Project');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
*/
$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }
 
mysql_select_db("Project", $con);
?>