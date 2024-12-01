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
                        if(isset($_POST['btneditCatagory'])){
                            $id=$_POST['edit_id_catagroy'];
                $query = "select * from catagory_tbl where catagory_id ='$id'";
                $query_run=Mysqli_query($connect,$query);
                                

                foreach($query_run as $row){
                    ?>

                        <form action="code.php" method="post">
                            <input type="hidden" name="edit_id" value="<?php  echo $row['catagory_id']?>">
                                <div class="form-group">
                                    <label> catagory Name</label>
                                    <input type="text" name="catageName" class="form-control" value="<?php  echo $row['catagory_name']?>" placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label>Decrtiption</label>
                                    <input type="text" name="categoryDec" class="form-control checking_email"  value="<?php  echo $row['Decsription']?>">
                                    <small class="error_email" style="color: red;"></small>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="updateCatagory"class="btn btn-primary">UPDATE</button>
                                </div>

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
