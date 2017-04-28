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
$paper= 7;//paper id frm session
$reviewer= 5;//reviewer '''' ''
$status='in progress';
 
$sql="INSERT INTO review(R_id,Paper_id,Content,Reviewer_id,Status)VALUES('$reviewer','$paper','$content','$reviewer','$status')"; 
if(!mysql_query($sql,$con)) 
 {
 die('Error: ' . mysql_error());
}
else
{
echo "<br>File $fileName uploaded<br>";
}

//mysqli_query($conn,$query) or die('Error, query failed');

//echo "<br>File $fileName uploaded<br>";
}
?>

