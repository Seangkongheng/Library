<?php 

include('include/header.php');



 include('include/navbar.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Admin">
            Edit catagory</button>
        </div>
        
            <div class="card-body">
            <?php
            $connect=new Mysqli('localhost','root','','open_library');
                        if(isset($_POST['btneditadmin'])){
                        $id=$_POST['admin_id_edit'];
                $query = "select * from admin_register where Register_Id ='$id'";
                $query_run=Mysqli_query($connect,$query);
                                

                foreach($query_run as $row){
                    ?>

                        <form action="code.php" method="POST">
                    <!-- <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Fist name</label>
                    <input type="text" name="Fistname" id="form2Example22" required class="form-control" />
                  </div> -->
                  <input type="hidden" name="admin_id_edit" value="<?php  echo $row["Register_Id"]; ?>">
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Name</label>
                    <input type="text" id="form2Example22" name="name_admin_edit" value="<?php  echo $row["Name"]; ?>" class="form-control" />
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
                    <input type="text" id="form2Example22" name="Username_admin_edit"   value="<?php  echo $row["userName"]; ?>"class="form-control" />
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
                    <input type="password" id="form2Example22"name="Password_admin_edit"  value="<?php  echo $row["password"]; ?>" class="form-control" />
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
               
                    <input type="password" id="form2Example22" name="ComfPas_admin_edit"   value="<?php  echo $row["cf_password"]; ?>" class="form-control" />
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
                    <input type="Email" id="form2Example22" name="Email_admin_edit"  value="<?php  echo $row["Email"]; ?>" class="form-control" />
                  </div>

                 <form action="code.php" method="post">
                 <button class="btn btn-primary" type="submit" name="btn_edit_admin">Update</button>
                 </form>
                  <!-- <button class="btn btn-warning"> Login</button> -->
                  <!-- <a href="loginForm.php"class="btn btn-warning">Login</a>
                  <a href="admin.php"class="btn btn-danger"> cancel</a> -->

            </form>
                         <?php
                }
    
            }
        ?>
             </div>
        </div>
    </div>
</div>

<?php
include('include/script.php');
include('include/footer.php');
?>
