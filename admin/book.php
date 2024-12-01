<?php include('include/header.php');
 include('include/navbar.php');


 $connect=new Mysqli('localhost','root','','open_library');
 ;?>




        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">BOOK</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                  
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add book
</button><br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="code.php" method="POST" enctype="multipart/form-data">
                        <label for="">Book title</label>
                        <input  class="form-control" name="booktitle" type="text">
                         
                        <label for="">catagory</label>
                        <select name="catagory" class="form-select" >
                                <option selected>NO Select</option>
                                <?php
                                    $sql="SELECT * from catagory_tbl";
                                    $result=mysqli_query($connect,$sql);
                                    while($row =mysqli_fetch_assoc($result)){
                                        $category_name=$row['catagory_name'] ; 
                                        $category_id=$row['catagory_id'] ;
                                        echo "<option value='$category_id'>$category_name</option>";
                                    }
                                ?>
                             
                        </select>
                        <label for="">Barcode</label>
                        <input  class="form-control" name="barcode" type="text">

                        <label for="">Number of page</label>
                        <input  class="form-control" name="numberPage" require type="text">

                        <label for="">Author</label>
                        <input  class="form-control" name="Author" require type="text">
                        <label for="">Short_aticle</label>
                        
                        <input  class="form-control" name="ShorAticle" require type="text">

                        
                        <label for="">Publicer</label>
                        <input  class="form-control" name="Publicer" require type="text">
                        <label for="">Language</label>
                        
                        <input  class="form-control" name="Language" require type="text">
                        <!-- <label for="">date</label>
                        <input  class="form-control" name="date" require type="date"> -->


                     <label for="formFileLg" class="form-label">image</label>
                    <input class="form-control form-control" name ="image_book"id="formFileLg" type="file"/>
                        <div class="modal-footer mt-5">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="btn_add_book">Save changes</button>
      </div>
            </form>

      </div>
   
    </div>
  </div>
</div><br>
<?php 
          ?>

    <table id="bookData" class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book Title</th>
      <th scope="col">Catagory</th>
      <th scope="col">bacode</th>
      <th scope="col">Page number</th>
      <th scope="col">Author</th>
      <th scope="col">Short Atticle</th>
      <th scope="col">Publicer</th>
      <th scope="col">Language</th>
      <th scope="col">image</th>
      <th scope="col">public date</th>
      <th scope="col">Action</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody class="table-group-divider table-divider-color">
   <?php
    $sql="SELECT b.book_id,b.book_title,b.book_title,b.book_catagory,b.Barcode,b.PageNumber,b.Author,b.Shortaticle,b.Publicer,b.Language,b.book_image,b.date_publice,c.catagory_id,c.catagory_name,c.Decsription
    FROM book_tbl b
    INNER JOIN catagory_tbl c
    ON b.book_catagory =c.catagory_id;";
        // $sql="SELECT * FROM book_tbl";
        $query=mysqli_query($connect,$sql);
        if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                <td><?php  echo $row["book_id"]; ?>  </td>
                  <td><?php  echo $row["book_title"]; ?>  </td>
                  <td><?php  echo $row["catagory_name"]; ?> </td> 
                  <td><?php  echo $row["Barcode"]; ?>  </td>
                  <td><?php  echo $row["PageNumber"]; ?>  </td>
                  <td><?php  echo $row["Author"]; ?>  </td>
                  <td><?php  echo $row["Shortaticle"]; ?>  </td>
                  <td><?php  echo $row["Publicer"]; ?>  </td>
                  <td><?php  echo $row["Language"]; ?>  </td>
                  <td>  <img src="<?php echo "./upload/" .$row['book_image'];?>"width ="50px" height="50px"alt=""></td>
                  <td><?php  echo $row["date_publice"]; ?>  </td>
             
                  <td>
                    
                   <form action="bookEdit.php" method="POST">
                    <input type="hidden" name="bood_id_edit" value="<?php  echo $row["book_id"]; ?>">
                    <input type="hidden" name="catagoryID_id" value=" <?php echo $row["catagory_id"]; ?>">


                    <!-- <input type="hidden" name="catagoryID_id" value=" <?php //echo $row["category_id"]; ?>">
                    <input type="hidden" name="prodcutedit" value="<?php  //echo $row['product_id'];?>  "> -->

                    <button class="btn btn-warning" name="btn-edit">Edit</button>
                   </form>
                 </td>
                 <td>
                    <form action="code.php" method="post">
                        <input type="hidden" name="deleteproduct" value="<?php echo $row['book_id']; ?>">
                        <button type="submit" name="btn_delete_book"class="btn btn-danger text-uppercase"> delet</button>
                  </form> </td>
                </tr>
                <?php
                ?>          
            <?php

            }
        }
        else
        {
            echo "no recode found";
          }
    ?>
  </tbody>
</table>

<?php

include('include/footer.php');
include('include/script.php');
?>


  
