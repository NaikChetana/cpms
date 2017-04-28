<!DOCTYPE html>
<html >
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Catchy Name</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <meta charset="UTF-8">
    <title>Login/Sign-In</title>
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="css/reg.css">
  
  
  </head>

  <body  background="reglog.jpg">

    <div class="logmod" >
  <div class="logmod__wrapper">
     
	 <a href="index.html"  >
    <span class="logmod__close" >Close</span>
	</a>
    <div class="logmod__container">
	 <a id="logo-container" href="logo.png" class="brand-logo">
          <img src="logo.png" alt="LOGO" class="circle responsive-img" height="60" width="70" />
      </a>
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <!--<div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
        </div>
		-->
        <div class="logmod__form">
		
          <form accept-charset="utf-8" class="simform"  name="regform" action="register.php" method="post">
		   <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-email">ID*</label>
                <input class="string optional" maxlength="255" name="id" placeholder="Your Id Please..." type="text" size="25" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-email">Email*</label>
                <input class="string optional" maxlength="255" name="email" placeholder="Email" type="text" size="50" />
              </div>
            </div>
			
			<div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Name*</label>
                <input class="string optional" maxlength="255"  name="name" placeholder="Text" type="text" size="50" />
              </div>
			 </div>
			 <div class="sminputs">
			  <div class="input full">
                <label class="string optional" for="user-contact">Contact*</label>
                <input class="string optional" maxlength="255" name="contact" placeholder="Contact" type="text" size="50" />
              </div>
            </div>
			
			<div class="sminputs">
			  <div class="input full">
                <label class="string optional" for="user-contact">Address</label>
                <input class="string optional" maxlength="255" name="address" placeholder="Address" type="text" size="50" />
              </div>
            </div>
            
			<div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" name="pw" placeholder="Password" type="text" size="50" />
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="string optional" maxlength="255" id="pw-repeat" placeholder="Repeat password" type="text" size="50" />
              </div>
            </div>

    <p>
      <input name="radio" type="radio"  value="A_id" />
      <label for="A_id">Author</label>
    </p>
    <p>
      <input name="radio" type="radio"  value="R_id" />
      <label for="R_id">Reviewer</label>
    </p>
    <p>
      <input  name="radio" type="radio" value="C_id" checked="checked"  />
      <label for="C_id">Coordinator</label>
    </p>

			<div class="simform__actions">
              <input class="sumbit" name="submit" type="submit" value="Create Account" /> 
			   <input type="reset" value="reset" />

              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
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
                <span>Create an account with <strong>Facebook</strong></span>
              </div>
            </a>
              
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <!--<div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
        </div> 
		-->
		
		
        <div class="logmod__form">
          <form accept-charset="utf-8" class="simform" action="login.php">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" name="email"  accesskey="e"placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw"  name="pass"  accesskey="p" placeholder="Password" type="password" size="50" />
                						<span class="hide-password">Show</span>
              </div>
            </div>
            <div class="simform__actions">
               <input class="sumbit" name="submit" type="submit" value="Log_In" /> 
             <span class="simform__actions-sidetext"><a class="special" role="link">Forgot your password?<br>Click here</a></span>
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
      </div>
    </div>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/reglog.js"></script>


  </body>
</html>
