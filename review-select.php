<?php 
$server="localhost";
$username="root";
$password="";
$t=0;
$dbname="proj";
$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}           
$topics=mysql_query("select Topic_name from Topics where( (select Paper_id from Paper as p1 and Paper_id from Review as p2 where p1==p2) )and (select Abstract_id as a1 from Abstracts and Abstract_id as a2 from Paper where a1==a2 )and (select Topic_id as t1 from Topics and Topic _id as t2 from Abstract where t1=t2 )) ");
$abstract=mysql_query("select Abstract_id from abstract")
if($conn->query($sql) === TRUE) {
echo "New Record Created successfully";

}
else{
echo "ERROR:".$sql."<br>".$conn->error;
}
$conn->close();         

>