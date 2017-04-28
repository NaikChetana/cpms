
<!-- The Modal -->
<html>
<head>

<title>create conference</title>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>



<body class="yellow lighten-3" background="review_it.jpg" >



  <nav class="lime lighten-1" role="navigation" >
    <div class="nav-wrapper container ">
      <a id="logo-container" href="logo.png" class="brand-logo">
          <img src="logo.png" alt="LOGO" class="circle responsive-img" height="60" width="70" />      </a>
	  
      <ul  class=" right hide-on-med-and-down">
	    
	    
		  <li><div>Hey, User </div></li>
		  
		  <li>
		  <a id="UserPic" href="UserPic.png" class="brand-logo">
		  <img src="Userpic.png" alt="LOGO" class="circle responsive-img" height="50" width="50" /></a>		  </li>
		
		<li class="lime-text text-lighten-1" >
		bla bla bla bla		</li>
		<li>
		
		<a class="waves-effect waves-light btn lime darken-4 " href="index.html" >Sign Out</a>		</li>
		<li>
		
		<a class="waves-effect waves-light btn lime darken-4 " href="Userhome.html" >Home</a>		</li>
	</ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a class="waves-effect waves-light btn lime darken-4" href="index.html" >Sign Out</a></li>
        <li><a class="waves-effect waves-light btn lime darken-4" href="Userhome.html" >Home</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>    </div>
  </nav>
  
  <div class="center">
  <hr>
<h5>Enter the conference details</h5>
<hr>
</div>
     <div class="row">
    <form class="col s12"  method="post"   action="create-conference.php">
      
      <div class="row">
        <div class="input-field col s6">
		Name:
          <input id="c_name" type="text" class="validate" name="cname">
          
        </div>
		</div>
		
		<div class="row">
        <div class="input-field col s4">
		Date:
         <input type="date" name="cdate">
  
        
        </div>
		<div class="input-field col s4">
	
		</div>
		</div>
		
		
		<div class="row">
        <div class="input-field col s6">
		Description:
          <input id="c_description" type="text" class="validate" name="cdescription">
          
        </div>
      </div>



Select Reviewers :
      
      
  <select  class="browser-default">
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Reviewer 1</option>
      <option value="2">Reviewer 2</option>
      <option value="3">Reviewer 3</option>
    </select>



	 
<br><br>
  <input  class="btn-large lime darken-4 waves-effect waves-light" name="submit" type="submit" value="CREATE">


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
