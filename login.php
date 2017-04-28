<?php
session_start();

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }
 
mysql_select_db("Project", $con);
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
   /*   $myusername = mysqli_real_escape_string($con,$_POST['email']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); */
	

       if (isset($_POST['A']))
   { 
   $id = $_POST['email'];
   $name = $_POST['pass'];
     $sql = "SELECT Author_id FROM author WHERE Email_id = '$id' and Password = '$name' ";
	  $result = mysql_query($sql,$con);
      $row = mysql_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysql_num_rows($result);
	  
	   if($count!= 1)   {
        $error = "Your Login Name or Password is invalid";
		echo $error;
		header("location:signin.php");
      }	
	  
	
	     $_SESSION['login_user'] = $id; // Initializing Session 
	   header("location:Author.php");
//header("location: retailer_profile.php"); Redirecting To Other Page    
      }
	  
	 
	 else if(isset($_POST['R']))
	 {
   $id = $_POST['email'];
   $name = $_POST['pass'];
     $sql = "SELECT Reviewer_id FROM Reviewer WHERE Email_id = '$id' and Password = '$name' ";
	  $result = mysql_query($sql,$con);
      $row = mysql_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysql_num_rows($result);
	    if($count == 1) {
	   header("location:review.html");
      }else {
        $error = "Your Login Name or Password is invalid";
		echo $error;
		header("location:signin.php");
      }
	  }
	 
	 
	 else if( isset($_POST['C']))
{
   $id = $_POST['email'];
   $name = $_POST['pass'];
     $sql = "SELECT Co_id FROM coordinator WHERE Email_id = '$id' and Password = '$name' ";
	  $result = mysql_query($sql,$con);
      $row = mysql_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysql_num_rows($result);
	    if($count == 1) {
	   header("location:cordinator.html");
      }else {
        $error = "Your Login Name or Password is invalid";
		echo $error;
		header("location:signin.php");
      }
	  }
	 }
	// $sql = "SELECT Co_id FROM coordinator WHERE Email_id = '$_POST[email]' and Password = '$_POST[pass]' ";
     /* $result = mysql_query($sql,$con);
      $row = mysql_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysql_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
*/         
?>