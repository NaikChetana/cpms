<!DOCTYPE html>
<html >

  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="css/reg.css">
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="signup.js"></script>
  
  </head>
<body  background="reglog.jpg">


 <div class=" logmod logmod__wrapper">
     
	<a href="signup.php"  >
    <span class="logmod__close" >Close</span>
	</a>
    <div class="logmod__container">
	 <a id="logo-container" href="logo.png" class="brand-logo">
          <img src="logo.png" alt="LOGO" class="circle responsive-img" height="60" width="70" />
     </a>
	 
	<ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
      </ul>
	</div>
	
	
	
	<div class="logmod__tab lgm-2 logmod__heading logmod__heading-subtitle">
          <span >Enter your email and password <strong>to sign in</strong></span>
        </div> 
		
		<div class="logmod__form" id="">
          <form name="login" accept-charset="utf-8" method="post" class="simform" onSubmit=" return lformValidation()" action="login.php">
            <div class="sminputs input full">
              
                <label class="string optional" for="user-email">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" name="email" placeholder="Email" type="email" size="50" />
				
				        <p>
                <input name="A" type="radio" id="A_id" value="Author" />
                <label for="A_id">Author</label>
             
                <input name="R" type="radio" id="R_id"  value="Reviewer" />
                <label for="A">Reviewer</label>
          
                <input  name="C" type="radio" id="C_id"  value="Coordinator"  />
                <label for="C_id">Coordinator</label>
                </p>
        
              
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" name="pass" placeholder="Password" type="password" size="50" />
                						
              
            </div>
			
			<div class="simform__actions">
              <input class="sumbit" name="login" type="submit" value="Log In" />
              <span class="simform__actions-sidetext"><a class="special" role="link" href="">Forgot your password?<br>Click here</a></span>
            </div> 
          </form>


	 
	</div>
	
	
	  <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
	</div>
	</div>
	
	
	
</body>
</html>
