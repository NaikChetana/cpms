
<!-- The Modal -->
<html>
<head>

<title>conference topics</title>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>

<!--<!--background="review_it.jpg"
 --> 

<body class="yellow lighten-3" background="topic.jpg" >
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
        <li><a class="waves-effect waves-light btn lime darken-4" href="Userhome.html">Home</a></li>
        <li><a class="waves-effect waves-light btn lime darken-4" href="#" >About Us</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>    </div>
  </nav>
  
  <div class="center">
  <hr>
<h5>Enter the topics</h5>
<hr>
</div>
     <div class="row">
    <form class="col s12" action="topicCreation.php" method="post">
      <div class="row">
        <div class="input-field col s6">
		Topic:
          <input id="c_name" type="text" class="validate" name="tname">
          
        </div>
		</div>
      
	 <br><br>
  <input class="btn-floating btn-large waves-effect waves-light red" type="submit" value="ADD" name="submit">
    </form>
  </div>
  
    </div>
	
	
	<ul class="collapsible popout " data-collapsible="accordion">
    <li>
      <div class="collapsible-header active"><i class="material-icons">games</i>name of the conference</div>
      <div class="collapsible-body">
	  <p>list of topics in the conferecne</p>
	  
	  <table class="responsive-table centered striped">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="button"></th>
         
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Topic Name</td>
            <td>
		
    <a class="btn-floating btn-large red" href="#">
      <i class="large material-icons">delete</i>
    </a>
	       </td>
          </tr>
		  
		  <tr>
            <td>Topic Name</td>
            <td>
		
    <a class="btn-floating btn-large red" href="#">
      <i class="large material-icons">delete</i>
    </a>
	       </td>
          </tr>
        </tbody>
      </table>
	
	</div>
    </li>
    </ul>
	

    <footer class="page-footer yellow lighten-3">
      <div class="footer-copyright">
      <div class="container">
      Conference Paper Manegement System
      </div>
    </div>
  </footer>
  
  
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/index.js"></script>

</body>
</html>
