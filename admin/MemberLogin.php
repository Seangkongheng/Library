<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loign.css">
    <title>login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<nav class="bg-white bg-light">

   <h1 class="text-center text-muted "><a href="" class="text-decoration-none">Open library</a> </h1> 
    
</nav>


    <div class="logn-form">
        <div class="content">
            <h1 class="text-center">Admin</h1> 
          
            <form action="code.php" method="POST">
                  <div class="form-outline ">
                  <label class="form-label" for="form2Example11">Username</label>
                    <input type="text" id="form2Example11"  name="txt_username" class="form-control">
                   
                  </div>
                  <!-- --------------------------------message sesstion-------------------- -->
                  <?php
                      if(isset($_SESSION['$userName_login']))
                      {
                        ?>
                        <div class="text-danger">
                        <?php echo $_SESSION['$userName_login']; ?>
                          </div>
                      <?php 
                        
                         unset($_SESSION['$userName_login']);
                     }

                  ?>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" id="form2Example22" name="txt_password" class="form-control" />
                    <a class="text-muted text-decoration-none" href="#!">Forgot password?</a>
                  </div>
<!-- --------------------------------message sesstion-------------------- -->
                  <?php
                      if(isset($_SESSION['$password_login']))
                      {
                        ?>
                        <div class="text-danger">
                        <?php echo $_SESSION['$password_login']; ?>
                          </div>
                      <?php 
                        
                         unset($_SESSION['$password_login']);
                     }

                  ?>

                  <div class="text-center  mb-2 ">
                    <button class="btn mb-3 w-100 text-white" type="submit" name="btn_login_user">Login</button>
                  </div>
               <!-- --------------------------------message sesstion-------------------- -->
               <?php
                      if(isset($_SESSION['correct_password']))
                      {
                        ?>
                        <div class="text-danger">
                        <?php echo $_SESSION['correct_password']; ?>
                          </div>
                      <?php 
                        
                         unset($_SESSION['correct_password']);
                     }

                  ?>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Not a member?</p>
                       <a href="registerForm.php" class="text-decoration-none">sigup now</a>
                  </div>

                </form>
        </div>
    </div>
    <!-- footer -->
    <div>
        <p class="text-center text-white text-uppercase text-muted text-underline">seangkongheng 2023</p>
    </div>
</body>
</html>