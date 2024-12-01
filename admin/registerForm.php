
<?php
session_start();
$connect=new Mysqli('localhost','root','','open_library');
//check connect 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Registerform.css">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<nav class="bg-white bg-light">

   <h1 class="text-center text-muted "><a href="" class="text-decoration-none">Open library</a> </h1> 
    
</nav>


    <div class="logn-form">
        <div class="content">
            <h1 class="text-center">Register</h1> 
                    <?php
                      if(isset($_SESSION['status']))
                      {
                        ?>
                        <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['status']; ?>
                          </div>
                      <?php 
                        
                         unset($_SESSION['status']);
                     }

                  ?>
            <form action="code.php" method="POST">
                    <!-- <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Fist name</label>
                    <input type="text" name="Fistname" id="form2Example22" required class="form-control" />
                  </div> -->

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Name</label>
                    <input type="text" id="form2Example22" name="LastName" class="form-control" />
                    <?php
                      if(isset($_SESSION['emptyname']))
                      {
                        ?>
                        <div class="text-danger">
                        <?php echo $_SESSION['emptyname']; ?>
                          </div>
                      <?php 
                        
                         unset($_SESSION['emptyname']);
                     }

                  ?>
                  
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">username</label>
                    <input type="text" id="form2Example22" name="Username" class="form-control" />
                    <?php
                      if(isset($_SESSION['empty']))
                      {
                        ?>
                        <div class="text-danger">
                        <?php echo $_SESSION['empty']; ?>
                          </div>
                      <?php 
                        
                         unset($_SESSION['empty']);
                     }

                  ?>
                    <?php
                      if(isset($_SESSION['username']))
                      {
                        ?>
                        <div class="text-danger">
                        <?php echo $_SESSION['username']; ?>
                          </div>
                      <?php 
                        
                         unset($_SESSION['username']);
                     }

                  ?>
                  </div>

                  <div class="form-outline mb-4">
                 
                  <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" id="form2Example22"name="Password" class="form-control" />
                    <?php
                      if(isset($_SESSION['empty']))
                      {
                        ?>
                        <div class="text-danger">
                        <?php echo $_SESSION['empty']; ?>
                          </div>
                      <?php 
                        
                         unset($_SESSION['empty']);
                     }

                  ?>
                    <?php
                      if(isset($_SESSION['message']))
                      {
                        ?>
                        <div class="text-danger">
                        <?php echo $_SESSION['message']; ?>
                          </div>
                      <?php 
                        
                         unset($_SESSION['message']);
                     }

                  ?>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">comfirm password</label>
               
                    <input type="password" id="form2Example22" name="ComfPas"  class="form-control" />
                    <?php
                      if(isset($_SESSION['incorrect']))
                      {
                        ?>
                        <div class="text-danger">
                        <?php echo $_SESSION['incorrect']; ?>
                          </div>
                      <?php 
                        
                         unset($_SESSION['incorrect']);
                     }

                  ?>
                  </div>
              

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Email</label>
                    <input type="Email" id="form2Example22" name="Email" class="form-control" />
                  </div>

                  <button class="btn btn-primary" type="submit" name="btn_Register">Register</button>
                  <!-- <button class="btn btn-warning"> Login</button> -->
                  <a href="loginForm.php"class="btn btn-warning">Login</a>
                  <a href="loginForm.php"class="btn btn-danger"> cancel</a>

            </form>
          
        </div>
    </div>
    <!-- footer -->
    <div>
        <p class="text-center text-white text-uppercase text-muted text-underline">seangkongheng 2023</p>
    </div>
</body>
</html>