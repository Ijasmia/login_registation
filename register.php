<?php 
session_start(); 
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
    <title>Register</title>
  </head>
 
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
		  
          <form method="post" action="register.php" class="sign-in-form" >
            <h2 class="title">Registration</h2>
		<span style="color:red; font-size:16px"> <?php include('errors.php') ?></span>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="UserName" name="username" required=""/>
            </div>
                      <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" required=""/>
            </div>
      
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="password" name="password_1" required=""/>
            </div>
                   
			<div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Con_password" name="password_2" required=""/>
            </div>		
<button type="submit" class="btn" name="reg_user">Register</button>			

          
            <p class="social-text">You can register via social networks. . . .</p>
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
            <h3>Do you have an account?</h3>
            <p>
            You have to enter to order from products in our store. Hurry up to join. . . .
            </p>
            <button class="btn transparent"  onclick="window.location.href='index.php';">
			LOG IN
            </button>
          </div>
          <img src="img/login.svg" class="image" alt="Login" />
        </div>
       
      
    </div>

  </body>
</html>