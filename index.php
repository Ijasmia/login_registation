<?php 
session_start();	
if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	} 
?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="az">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Log in</title>
  </head>
  
 
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        
		  	<form method="post" class="sign-in-form" action="index.php">
            <h2 class="title">Log in</h2>
			  <span style="color:red; font-size:16px"> <?php include('errors.php') ?></span>
			
            <div class="input-field">
              <i class="fas fa-envelope"></i>
           <input type="text" class="form-control" name="username" placeholder="username" required="">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" class="form-control" name="password" placeholder="Password" required="">
            
            </div>
             <a href="#"  class="href">I forgot my password</a>

           <button type="submit" class="btn" name="login_user">Login</button>
            <p class="social-text">You can access it through social networks. . . .</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
		
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
             <h3>Don't you have an account?</h3>
            <p>
            Once registered, you can take advantage of many of our store services. . . .
            </p>
            <button class="btn transparent"  onclick="window.location.href='register.php';">
			REGISTER
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="Register" />
		 
      </div>
    </div>

  </body>
</html>