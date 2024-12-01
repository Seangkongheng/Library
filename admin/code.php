<?php
session_start();
$connect=new Mysqli('localhost','root','','open_library');
//create connection 


// -------------------------------------------------register form------------------------------


if(isset($_POST['btn_Register']))
{
  
    $lastName= $_POST['LastName'];
    $userName=$_POST['Username'];
    $Password=$_POST['Password'];
    $comfirmpassword=$_POST['ComfPas'];
    $email=$_POST['Email'];

    //cofirm with pass
    if(empty($userName)){

        $_SESSION['empty']="you must be inpute";
        header('location: registerForm.php');
    }
    elseif(!preg_match('/^\w{6,}$/',$userName)){
        
        $_SESSION['username']="You username must is charactor and more than 5";
         header('location: registerForm.php');
      
    }

    elseif(empty($Password)){
        $_SESSION['empty']="you must be inpute";
        header('location: registerForm.php');
    }
    elseif(strlen($Password)<=8){
        
        $_SESSION['message']="You password must be 8 charactor";
        header('location: registerForm.php');
    }
    else
    {
        if($Password==$comfirmpassword){
        
            
            $sql="INSERT INTO admin_register(Name,userName,password,cf_password,Email) 
            VALUES('$lastName','$userName','$Password',' $comfirmpassword','$email') ";
            $query_run =Mysqli_query($connect,$sql);
        
                if($query_run)
                {
                
                    $_SESSION['status']="admin profile added";
                    header('location: registerForm.php');
                }
                else
                {
                    echo "add not sucess full";
                    $_SESSION['status']="admin profile not added";
                    header('location: registerForm.php');
                }
              
            }
            else
            {
                // $_SESSION['status']="password and comfilm password is not match";
                // header('location: registerForm.php');
                $_SESSION['incorrect']="password incorrect";
                header('location: registerForm.php');
            }
    }
    }


// ---------------------register admin indasboard----------------------------


if(isset($_POST['btn_Register_admin']))
{
  
    $lastName= $_POST['LastName_admin'];
    $userName=$_POST['Username_admin'];
    $Password=$_POST['Password_admin'];
    $comfirmpassword=$_POST['ComfPas_admin'];
    $email=$_POST['Email_admin'];

    //cofirm with pass
    if(empty($userName)){

        $_SESSION['empty']="you must be inpute";
        header('location: registerForm.php');
    }
    elseif(!preg_match('/^\w{6,}$/',$userName)){
        
        $_SESSION['username']="You username must is charactor and more than 5";
         header('location: registerForm.php');
      
    }

    elseif(empty($Password)){
        $_SESSION['empty']="you must be inpute";
        header('location: registerForm.php');
    }
    elseif(strlen($Password)<=8){
        
        $_SESSION['message']="You password must be 8 charactor";
        header('location: registerForm.php');
    }
    else
    {
        if($Password==$comfirmpassword){
        
            
            $sql="INSERT INTO admin_register(Name,userName,password,cf_password,Email) 
            VALUES('$lastName','$userName','$Password',' $comfirmpassword','$email') ";
            $query_run =Mysqli_query($connect,$sql);
        
                if($query_run)
                {
                
                    $_SESSION['status']="admin profile added";
                    header('location: admin.php');
                }
                else
                {
                    echo "add not sucess full";
                    $_SESSION['status']="admin profile not added";
                    header('location: registerForm.php');
                }
              
            }
            else
            {
                // $_SESSION['status']="password and comfilm password is not match";
                // header('location: registerForm.php');
                $_SESSION['incorrect']="password incorrect";
                header('location: registerForm.php');
            }
    }
    }

// -------------------------------------delete admin from register----------------------------
if(isset($_POST['btn-delete-admin']))
{
    $addmin_id=$_POST['admin_id'];
    $sql_delete_admin="DELETE FROM admin_register where Register_Id ='$addmin_id'";
    $resul=mysqli_query($connect,$sql_delete_admin);
    if($resul)
    {
       header('location:admin.php');
    }
    else
    {
        echo "not susseffull";
    }
}
// -----------------------------edit add form register---------------------------
if(isset($_POST['btn_edit_admin']))
{
    $edite_addmin_id=$_POST['admin_id_edit'];
    $name_edit=$_POST['name_admin_edit'];
    $userName_edit=$_POST['Username_admin_edit'];
    $password_edit=$_POST['Password_admin_edit'];
    $comfirmpassword_edit=$_POST['ComfPas_admin_edit'];
    $Emial_edit=$_POST['Email_admin_edit'];

    $sql_udate_admin="UPDATE admin_register set Name='$name_edit',userName='$userName_edit',password='$password_edit',cf_password='$comfirmpassword_edit',Email='$Emial_edit' 
    
    WHERE Register_Id='$edite_addmin_id'";

    $query_run=mysqli_query($connect,$sql_udate_admin);
    if($query_run){
        header('location: admin.php');
    }
    else
    {
        echo "not sucessfull";
    }

}


    // --------------------------------------- lgoin in form
    // -----------------------------------------------

  if(isset($_POST['btn_login']))
  {
    $userName_login=$_POST['txt_username'];
    $password_login=$_POST['txt_password'];

    if(empty($userName_login)){
    

        $_SESSION['$userName_login']="you must be inpute username";
     header('location: loginForm.php');
    }
   
    elseif(empty($password_login)){
         $_SESSION['$password_login']= "you must be inpute password";
        header('location: loginForm.php');
    }
     else
     {

            $query = "SELECT * FROM admin_register WHERE userName ='$userName_login' AND password='$password_login'";
            $result =mysqli_query($connect,$query);

            if(mysqli_num_rows($result)==1){
                header('location: index.php');
            }
            else
            {
                echo "not success";
                $_SESSION['correct_password']= "password or username is incorrect ! ";
                header('location: loginform.php');
            }
    }
  }


// -----------------------------------------catagory insert-------------------------------

if(isset($_POST['btn-add-catagory'])){

    $catagroyname=$_POST['catagory_name'];
    $catagoryDes=$_POST['catagory_des'];

    $sql="INSERT INTO catagory_tbl(catagory_name,Decsription) 
    VALUES('$catagroyname','$catagoryDes') ";
    $query_run =Mysqli_query($connect,$sql);

    if($query_run){
        // $_SESSION['catagory_successfull']="Catagory has been added ";
        echo "<script>alert('catagory has been added'); location.href='catagory_book';</script>";

    }
    else
    {
        // $_SESSION['catagory_successfull']="Catagory can not added ";
        echo "<script>alert('catagory can not added'); location.href='catagory_book';</script>";
       
    }
}

// -----------------------------------add book-------------------------------------------

if(isset($_POST['btn_add_book'])){
$book_Title=$_POST['booktitle'];
$book_catagory=$_POST['catagory'];
$barcaode =$_POST['barcode'];
$NumberOfpage=$_POST['numberPage'];
$author=$_POST['Author'];
$Atticle=$_POST['ShorAticle'];
$Publicer=$_POST['Publicer'];
$Language=$_POST['Language'];
$image = $_FILES['image_book']['name'];
$image_tmp=$_FILES['image_book']['tmp_name'];
$folder="upload/".$image;
$current_date = date("Y-m-d");

   $sql="INSERT INTO book_tbl (book_title,book_catagory,Barcode,PageNumber,Author,Shortaticle,Publicer,Language,date_publice,book_image)
   VALUES('$book_Title','$book_catagory','$barcaode','$NumberOfpage','$author','$Atticle','$Publicer','$Language','$current_date','$image')";
   $query_run=mysqli_query($connect,$sql);
   if($query_run)
   {
    move_uploaded_file($image_tmp,$folder);
    header('location: book.php');
   }
   else
   {
    echo "not successfull";
   }

}

// -----------------------------delete book----------------------

if(isset($_POST['btn_delete_book']))
{
    $book_id=$_POST['deleteproduct'];
    $sql ="DELETE FROM book_tbl WHERE book_id ='$book_id'";
    $query_run=mysqli_query($connect,$sql);
    if($query_run){
       header('location: book.php');
    }
    else
    {
        echo "not successfull";
    }
}
  
// edit-book
if(isset($_POST['btn_update_book'])){
    $edit_book_id=$_POST['bood_id_edit'];
    $title_book_edit=$_POST['booktitle_edit'];
    $catagroy_book_edit=$_POST['catagory_edit'];
    $barcode_book_edit=$_POST['barcode_edit'];
    $pageNum=$_POST['pageNumber_edit'];
    $bookAuthor=$_POST['Author'];
    $bookShortaticle=$_POST['Shortaticle'];
    $bookPublicer=$_POST['Publicer'];	
    $Languagebook=$_POST['Language'];
    echo $pageNum;
    $image= $_FILES['image_book']['name'];
    $image_tmp=$_FILES['image_book']['tmp_name'];
    $folder="./upload";

$update_book="UPDATE book_tbl set book_title='$title_book_edit',book_catagory='$catagroy_book_edit',Barcode='$barcode_book_edit',
PageNumber='$pageNum',Author='$bookAuthor',Shortaticle=' $bookShortaticle',Publicer='$bookPublicer',Language='$Languagebook',book_image='$image'
 where book_id='$edit_book_id'";
$query_run=mysqli_query($connect,$update_book);
if($query_run)
{
// echo "succesfull";
// move_uploaded_file($image_tmp,$folder);
header('location:book.php');
}
else
{
    echo " not succesfull";
}


}
// delete_catagory

if(isset($_POST['btn-delete-catagory'])){
    $catagoryID=$_POST['deletecatagory'];
    $sql="DELETE FROM catagory_tbl where catagory_id ='$catagoryID'";
    $query_run=mysqli_query($connect,$sql);
    if($query_run){
        header('location:catagory_book.php');
    }
    else
    {
        echo " not successfull";
    }
}
// --------------------------edite catagroy--------------------------



if(isset($_POST['updateCatagory']))
{
    $id=$_POST['edit_id'];

    $catagoryName=$_POST['catageName'];
 
    $categoryDes=$_POST['categoryDec'];

    $sql_update="UPDATE catagory_tbl set catagory_name='$catagoryName',Decsription='$categoryDes' 
    WHERE catagory_id ='$id'";

    $query=mysqli_query($connect,$sql_update);
    if($query)
    {
        header('location:catagory_book.php');
    }
    else
    {
        echo "not sucessfull";
    }

}
// -------------------------Delete member----------------------

if(isset($_POST['btn-delete-member']))
{
    $member_id=$_POST['Delete-member_id'];
    $sql_delete_member="DELETE FROM member_tbl WHERE member_id='$member_id'";
    $query_run=mysqli_query($connect,$sql_delete_member);
    if($query_run)
    {
        header('location:member.php');
    }
    else
    {
        echo "not succesfull";
    }
}
// ------------------------user register---------------------

if(isset($_POST['btn_Register_member']))
{
  
    $lastName= $_POST['LastName'];
    $userName=$_POST['Username'];
    $Password=$_POST['Password'];
    $comfirmpassword=$_POST['ComfPas'];
    $email=$_POST['Email'];
    $adress=$_POST['address'];

    //cofirm with pass
    if(empty($userName)){

        $_SESSION['empty']="you must be inpute";
        header('location: member_register.php');
    }
    elseif(!preg_match('/^\w{6,}$/',$userName)){
        
        $_SESSION['username']="You username must is charactor and more than 5";
         header('location: member_register.php');
      
    }

    elseif(empty($Password)){
        $_SESSION['empty']="you must be inpute";
        header('location: member_register.php');
    }
    elseif(strlen($Password)<=8){
        
        $_SESSION['message']="You password must be 8 charactor";
        header('location: member_register.php');
    }
    else
    {
        if($Password==$comfirmpassword){
        
            
            $sql="INSERT INTO userregister(name,username,password,cf_password	,Email,address) 
            VALUES('$lastName','$userName','$Password','$comfirmpassword','$email','$adress') ";
            $query_run =Mysqli_query($connect,$sql);
        
                if($query_run)
                {
                
                    $_SESSION['status']="admin profile added";
                    header('location:../index.php');
                }
                else
                {
                    echo "add not sucess full";
                    $_SESSION['status']="user  not added";
                    header('location:member_register.php');
                }
              
            }
            else
            {
                // $_SESSION['status']="password and comfilm password is not match";
                // header('location: registerForm.php');
                $_SESSION['incorrect']="password incorrect";
                header('location: member_register.php');
            }
    }
    }



    // -------------------------login user---------------------
    if(isset($_POST['btn_login_user']))
    {
      $userName_login=$_POST['txt_username'];
      $password_login=$_POST['txt_password'];
  
      if(empty($userName_login)){
      
  
          $_SESSION['$userName_login']="you must be inpute username";
       header('location: loginForm.php');
      }
     
      elseif(empty($password_login)){
           $_SESSION['$password_login']= "you must be inpute password";
          header('location: loginForm.php');
      }
       else
       {
  
              $query = "SELECT * FROM userregister WHERE username ='$userName_login' AND password='$password_login'";
              $result =mysqli_query($connect,$query);

             
              if(mysqli_num_rows($result)==1){
                    $_SESSION['register']=$userName_login;
                    $rows=mysqli_fetch_array($result);
                  header('location: ../index.php');
              }
              else
              {
                  echo "not success";
                  $_SESSION['correct_password']= "password or username is incorrect ! ";
                  header('location: loginform.php');
              }
      }
    }
?>