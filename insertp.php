<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <head>
  <title>Write Paper</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>

<body class="yellow lighten-3 ">
  <nav class="lime lighten-1 " role="navigation">
    <div class="nav-wrapper container ">
      <a id="logo-container" href="logo.png" class="brand-logo ">
          <img src="logo.png" alt="LOGO" class="circle responsive-img" height="60" width="70" />
      </a>
	  
     <ul  class=" right hide-on-med-and-down">
	    
	    
		  <li><div>Hey, User </div></li>
		  
		  <li>
		  <a id="UserPic" href="UserPic.png" class="brand-logo">
		  <img src="Userpic.png" alt="LOGO" class="circle responsive-img" height="50" width="50" /></a>
		  </li>
		
		<li class="lime-text text-lighten-1" >
		bla bla bla bla
		</li>
		<li>
		
		<a class="waves-effect waves-light btn lime darken-4 " href="index.html" >Sign Out</a>
		
		</li>
		<li>
		
		<a class="waves-effect waves-light btn lime darken-4 " href="Userhome.html" >Home</a>
		
		</li>
			  
	</ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a class="waves-effect waves-light btn lime darken-4" href="Userhome.html">Home</a></li>
        <li><a class="waves-effect waves-light btn lime darken-4" href="#" >About Us</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  

<body class="center">
<h5>
 Please upload your Paper
 </h5>
 <div class="row">

  </div>
  
 
  <br />
 <div class="row center">
 
 
 
 
    <form class="col s12" align="center" method ="post" enctype="multipart/form-data" action="insert_paper.php">
      
		<h5>
		 Upload
		</h5>
		<div>
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file"  name="userfile" id="userfile">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" name="fileu" type="text">
      </div>
    </div>
		</div>
      
	  <input  type="submit" value="Upload" name="upload" class="waves-effect waves-light btn lime darken-4">
    </form>
	  </div>
  </div>

    <footer class="page-footer yellow lighten-3">
      <div class="footer-copyright">
      <div class="container">
      Conference Paper Manegement System
      </div>
    </div>
  </footer>


</body>
</html>
