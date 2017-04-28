<html>

<body>

<?php
if(isset($_POST['submit']))
   {
$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }
  
  mysql_select_db("Project", $con);
  
   if (isset($_POST['A']))
   
   {
    
        $sql="INSERT INTO author (Author_id,Name,Password,Email_id,Contact,address,Role)  
	       VALUES        
	      ('$_POST[id]','$_POST[name]','$_POST[pw]','$_POST[email]','$_POST[contact]','$_POST[addr]' ,'$_POST[A]')"; 
		  }
		  
		  else if( isset($_POST['R']))
   
   {
    
        $sql="INSERT INTO reviewer (Reviewer_id,Name,Password,Phone,Email_id,Address,Role)  
	       VALUES        
	      ('$_POST[id]','$_POST[name]','$_POST[pw]','$_POST[contact]','$_POST[email]','$_POST[addr]' ,'$_POST[A]')"; 
		  }
		  
		else if( isset($_POST['C']))
   
   {
    
        $sql="INSERT INTO coordinator (Co_id,Name,Password,Email_id,Contact,address,Role)  
	       VALUES        
	      ('$_POST[id]','$_POST[name]','$_POST[pw]','$_POST[email]','$_POST[contact]','$_POST[addr]' ,'$_POST[A]')"; 
		  
		  }
		  
  if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());
  header('Location:signup.php');

  }

 else
 {   //Do all the submission part or storing in DB work and all here
    header('Location:signin.php');
   }



    }




mysql_close($con);

?>

</body>

</html>



		  