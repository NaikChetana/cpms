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
    <title>Sign-Up</title>
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="css/reg.css">
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="signup.js"></script>
  
  </head>
<body  background="reglog.jpg">


 <div class=" logmod logmod__wrapper">
     
	 <a href="index.html"  >
    <span class="logmod__close" >Close</span>
	</a>
    <div class="logmod__container">
	 <a id="logo-container" href="logo.png" class="brand-logo">
          <img src="logo.png" alt="LOGO" class="circle responsive-img" height="60" width="70" />
     </a>
	 
	<ul class="logmod__tabs">
        <li data-tabtar="lgm-1"><a href="">Sign Up</a></li>
		<li data-tabtar="lgm-2"><a href="signin.php">Log-In</a></li>
      </ul>
	</div>
	
	<div class="logmod__tab-wrapper logmod__tab lgm-1 logmod__heading">
          <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
     </div> 
	
	<div class="logmod__form" >
          <form name="regform" accept-charset="utf-8" class="simform"  method="post" onSubmit=" return rformValidation()"  action="register.php">
            <div class="sminputs input full">
			    <label for="user-id">id*</label>
                <input maxlength="255" id="user-id" name="id" placeholder="id" type="text" size="50" />
				
                <label for="user-email">Email*</label>
                <input maxlength="255" id="user-email" name="email" placeholder="Email" type="text" size="50" />
				
				<label class="string optional" for="user-name">Name*</label>
                <input class="string optional" maxlength="255" id="user-name" name="name" placeholder="Name" type="text" size="50" />
				
				 <label class="string optional" for="user-contact">Contact*</label>
                <input class="string optional" maxlength="255" id="user-contact" name="contact" placeholder="Contact" type="text" size="50" />
				
				<label class="string optional" for="user-addr">Address</label>
                <input class="string optional" maxlength="255" id="user-addr" name="addr" placeholder="Address" type="text" size="50" />

				

         <p>
         <input name="A" type="radio"  id="A_id"  value="Author" />
         <label for="A_id">Author</label>
    
         <input name="R" type="radio"   id="R_id"  value="Reviewer" />
         <label for="R_id">Reviewer</label>
    
         <input  name="C" type="radio"  id="C_id"  value="Coordinator"  />
         <label for="C_id">Coordinator</label>
         </p>
				
						
				<label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" name="pw" placeholder="Password" type="password" size="50" />
				
				</div>


        
		<div class="simform__actions">
              
			  <input class="sumbit" name="submit" type="submit" value="Create Account" />
			  
              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            </div> 
          </form>
		 
	</div>
	
	<div class="logmod__alter logmod__alter-container">
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


 <footer class="page-footer yellow lighten-3">
    <div class="footer-copyright">
      <div class="container">
      Conference Paper Management System 
      </div>
    </div>
	
  </footer>

</body>
</html>
