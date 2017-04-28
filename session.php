<?php 
// Establishing Connection with Server by passing server_name, user_id and password as a parameter 
$con = mysql_connect("localhost","root","");
// Selecting Database 
$db = mysql_select_db("Project", $con); 
session_start();// Starting Session 
// Storing Session 
$user_check=$_SESSION['login_user']; 
// SQL Query To Fetch Complete Information Of User 

$ses_sql=mysql_query("select  Author_id from author where Email_id='$user_check'", $con); 
$row = mysql_fetch_assoc($ses_sql); 
$login_session =$row['Author_id']; 
/*
if(!isset($login_session)){ 
mysql_close($con); // Closing Connection 
header('Location: index.html'); // Redirecting To Home Page 
} */

$sess_sql=mysql_query("select Abstract_id  from abstract where Topic_id='11' ", $con); 
$row2= mysql_fetch_assoc($sess_sql); 
$login_session2 =$row2['Abstract_id']; 

/*
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select Co_id from coordinator where Email_id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Co_id'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
*/
?> 