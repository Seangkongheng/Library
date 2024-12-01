<?php 

include('include/header.php');



 include('include/navbar.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          Edit Form
        </div>
        
            <div class="card-body">
            <?php
            $connect=new Mysqli('localhost','root','','open_library');
                        if(isset($_POST['btn-edit'])){
                            $id=$_POST['bood_id_edit'];
                $query = "select * from book_tbl where book_id ='$id'";
                $query_run=Mysqli_query($connect,$query);
                                

                foreach($query_run as $row){
                    ?>

             <form action="code.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="bood_id_edit" value="<?php  echo $row["book_id"]; ?>">
                        <label for="">Book title</label>
                        <input  class="form-control"value="<?php  echo $row["book_title"]; ?>" name="booktitle_edit" type="text">
                         
                        <label for="">catagory</label>
                        <select name="catagory_edit"class="form-select" >
                                <option selected>

                                <?php   
                                      
                                     $categories="SELECT catagory_id,catagory_name,Decsription FROM catagory_tbl";
                                     $query=mysqli_query($connect,$categories);
                                     while($categories = mysqli_fetch_assoc($query)) {
                                      $cate_id = $categories['catagory_id'];
                                      $category_name=$categories['catagory_name'] ; 
                                      $catagoryID_id=['catagoryID_id'];
                                   
                                         if ($_POST['catagoryID_id']==$cate_id) {
                                              echo "<option value='$cate_id' selected>". $categories['catagory_name']. "</option>";
                                    
                                         } 
                                         else {
                                             echo "<option value='$cate_id'>" . $categories['catagory_name'] . "</option>";
                                         }
                                     }
                                ?>
                
                                </option>
                               



                             
                        </select>
                        <label for="">Barcode</label>
                        <input  class="form-control"value="<?php  echo $row["Barcode"]; ?>" name="barcode_edit" type="text">
                        <label for="">PageNumber</label>
                        <input  class="form-control" value="<?php  echo $row["PageNumber"];?>" name="pageNumber_edit" type="text">

                        <label for="">Author</label>
                        <input  class="form-control" value="<?php  echo $row["Author"];?>" name="Author" type="text">

                        <label for="">Short Atticle</label>
                        <input  class="form-control" value="<?php  echo $row["Shortaticle"];?>" name="Shortaticle" type="text">

                        <label for="">publicer</label>
                        <input  class="form-control" value="<?php  echo $row["Publicer"];?>" name="Publicer" type="text">

                        <label for="">language</label>
                        <input  class="form-control" value="<?php  echo $row["Language"];?>" name="Language" type="text">

                     <label for="formFileLg" class="form-label">image</label>
                    <input class="form-control form-control"value="<?php  echo $row["book_image"]; ?>" name ="image_book"id="formFileLg" type="file"/>
                    <img src="./upload/<?php  echo $row['book_image']?>" alt="" width="100px">
                        <div class="modal-footer mt-5">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
               <form action="code.php" method="post">
               <input type="hidden" name="bood_id_edit" value="<?php  echo $row["book_id"]; ?>"> 
               <button type="submit" class="btn btn-primary" name="btn_update_book">Update</button>
               </form>
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
