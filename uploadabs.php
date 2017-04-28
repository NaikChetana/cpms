<?php



$host="localhost";

$dbname="project";

$user="root";

$pass="";



 

 

$conn=mysql_connect($host,$user,$pass);

 

if($conn)

{

$db_selected = mysql_select_db($dbname, $conn);

if (!$db_selected) {

    die ('Can\\'t use foo : ' . mysql_error());

}

}

else

{

    die('Not connected : ' . mysql_error());

}

$domainname = "http://127.0.0.1/cpms";
$domainhost="ftp.127.0.0.1/cpms";
$domainuser="project";
$domainpass="abc";
$homelink = "/home/".$domainuser;
$publiclink = "/public_html/";
$savedfiledirectory="/";


//Function To Make FTP Connection


function ftp_connection($host, $user, $pass)

{
  $conn_id = @ftp_connect($host);
    $login_result = @ftp_login($conn_id, $user, $pass);
        
   if($login_result){     
    return $conn_id;
    }
    else
    {
    return 0;

    }

}


function ftp_connection_quit($conn_id){
    @ftp_quit($conn_id);
    @ftp_close($conn_id);
}

function PutFilesonFTPServer($host, $user, $pass, $folder, $newfilename,$existingfilename){

     

     global $publiclink;
     
     $uploaded = false;

     $conn = ftp_connection($host, $user, $pass);
      

     if($conn  == 0){

     exit("Error while connecting FTP Server");

     }
     
     @ftp_set_option($conn, FTP_TIMEOUT_SEC, 1000);
     

     $path = $publiclink.$folder;
          
     @ftp_site($conn,"CHMOD 0777 $path.");

     @ftp_pasv($conn, true);
     if(!@ftp_put($conn, $path.$newfilename, $existingfilename, FTP_BINARY)){

         

                $uploaded = false;
     }else{
        $uploaded = true;
     }
     @ftp_site($conn,"CHMOD 0755 $path.");
     ftp_connection_quit($conn);
     return $uploaded;
}

if(!empty($_FILES['uploadedfile']['name'])){

     

        $filename = $_FILES['uploadedfile']['name'];

      $ftmp =  $_FILES['uploadedfile']['tmp_name'];

      $imgtype = $_FILES['uploadedfile']['type'];

         

        $file_parts = explode('.', $filename);

        $ext = $file_parts[count($file_parts) - 1];

 

        ///Save file with today's date and time

        $todaysdate = date("d-m-Y")."-".time();

        $new_file_name = $todaysdate.".".$ext;

     

        $imagespath = $domainname.$savedfiledirectory.$new_file_name;

 

          

    if(PutFilesonFTPServer($domainhost, $domainuser, $domainpass, $savedfiledirectory, $new_file_name, $ftmp)){

         

         $query_update ="INSERT INTO 'images' ('imagespath','uploadedtime') VALUES ('".$imagespath."','".$todaysdate."') ";

         $sql_update = mysql_query($query_update) or die(mysql_error());

          

         echo "File Uploaded Successfully";

     

    }else{

         

        echo "Error while uploading of file";

         

    }

 
     

}else{

        echo "Please Select Any File to Upload";

}          

?>