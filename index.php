<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open library</title>
    <!-- costome css -->
    <link rel="stylesheet" href="style.css">
    <!-- fonavsoome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- bootstapp -->

</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="nav-top-header">
                <div class="logo">
                    <span> <i class="fa-solid fa-book"></i></span> <a href="">Open Library</a>
                </div>
                <div class="donate-languge">
                    <div class="donate">
                        <a href="" class="btn-donate">Donate <span><i class="fa-solid fa-heart"></i></span></a>
                    </div>
                    <div class="google-translate" onclick="Myfuntion()">
                        <i class="fa-solid fa-language"></i><span><i class="fa-solid fa-angle-down"></i></span>

                        <ul id="My_dropDown">
                            <li class="flag">
                                <div class="image"><img src="image/cambodia.png" alt=""></div>
                                <div class="text"><a href="">Cambodia</a></div>
                            </li>

                            <li class="flag">
                                <div class="image"><img src="image/united-kingdom.png" alt=""></div>
                                <div class="text"><a href="">English</a></div>
                            </li>
        
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Navbar -->
<section>
    <div class="navbar">
        <ul>
            <li> <a href="">LIBRARY</a></li>
            <li><a href="" class="mybook">my book</a></li>
            <li><a href="" class="mybrower">Browse</a></li>
            <li><a href="" class="serch-btn-responsive"></a></li>
            <li class="serch">
                <a href="" class="btn-all-search">All</a>
                <input type="search" name="" id="" placeholder="search book..">
                <span><i class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
            </li>
        
                    <?php
                       
                if(!isset($_SESSION['register']))
                {
                        echo " <a href='admin/member_register.php' class='text-decoration-none text-white'>Resgiter</a>";
                }
                else
                {
                    echo "hellow word";
                }
                ?>


             <?php

            if(isset($_SESSION['user'])){

                    echo"<a href='logout.php'class='text-decoration-none  text-dark'> | <p class='text-white'>Logout</p></a>";
          }
          else
           {
          echo"  <a href='admin/MemberLogin.php' class='text-decoration-none text-white'> | login</a>";
            }

            ?> 



            </a></li>
   
            <li><a href="" class="hambergur"> <span><i class="fa-solid fa-bars"></i></span></a>
            
            
            </li>
        </ul>
       
    </div>
    <!-- dropdown  -->
    <div class="dropdown">
        <div class="content-dropdown">
            <h1>My open Library</h1>
            <div class="all-btn">
            <button class="btn-all-login">Login</button><br>
            <button class="sign-up-login">sign up</button><br>
            <button class="btn-all-google">sing with google</button><br>
            </div>
        </div>
        <div class="list-dorpdown">
            <ul class="nav-item">
                <li class="list"> <a href=""><h2>BROWES</h2></a></li>
                <li class="list"> <a href="">subjects</a></li>
                <li class="list"> <a href="">Treding</a></li>

                <li class="list"> <a href="">Library Explorer</a></li>
                <li class="list"> <a href="">Lists</a></li>
                <li class="list"> <a href="">Colection</a></li>
                <li class="list"> <a href="">K-12 student library</a></li>
                <li class="list"> <a href="">Book Talks</a></li>
                <li class="list"> <a href="">Random</a></li>
                <li class="last-child"> <a href="">Advanced Search</a></li>
            
            </ul>
        </div>

    </div>
   
</section>
<!-- body -->
<section>
    <div class="all-content">
        <h1 class="text-decoration-none">Trending Movie</h1>
       <div class="book1"> 
       <div class="owl-carousel owl-theme">
            <?php 
            $connect=new Mysqli('localhost','root','','open_library');
           
            $query = "select * from book_tbl where book_catagory=2";
            $query_run=Mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                $id=$row['book_id'];
                ?>
                    <div class="item">
                        <div class="zoom">
                            <a href="bookDetail.php?id=<?php echo $id ?>" >  <img src="./admin/upload/<?php echo $row["book_image"]?>" alt=""></a> 
                        </div>
                          <div class="button-check-out">
                        <button class="btn-check"><a href="">borrow</a></button>
                  
                    </div> 
                </div>
                <?php
            }
            
            ?>
            </div>
       </div>

       <h1>Classic Books</h1>
       <div class="book1"> 
       <div class="owl-carousel owl-theme">
            <?php 
            $connect=new Mysqli('localhost','root','','open_library');
           
            $query = "select * from book_tbl where book_catagory=3";
            $query_run=Mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
                    <div class="item">
                        <div class="zoom">
                            <a href="">  <img src="./admin/upload/<?php echo $row["book_image"]?>" alt=""></a>
                        </div>
                          <div class="button-check-out">
                        <button class="btn-check"><a href="">borrow</a></button>
                  
                    </div>  
                </div>
                <?php
            }
            
            ?>
            </div>
       </div>

       <h1>Books We Love</h1>
       <div class="book1"> 
       <div class="owl-carousel owl-theme">
            <?php 
            $connect=new Mysqli('localhost','root','','open_library');
           
            $query = "select * from book_tbl where book_catagory=6";
            $query_run=Mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
                  <div class="item">
                        <div class="zoom">
                            <a href="">  <img src="./admin/upload/<?php echo $row["book_image"]?>" alt=""></a>
                        </div>
                          <div class="button-check-out">
                        <button class="btn-check"><a href="">borrow</a></button>
                  
                    </div> 
                </div>
                <?php
            }
            
            ?>
            </div>
       </div>
       
       
       <h1>	Recently Returned</h1>
       <div class="book1"> 
       <div class="owl-carousel owl-theme">
            <?php 
            $connect=new Mysqli('localhost','root','','open_library');
           
            $query = "select * from book_tbl where book_catagory=7";
            $query_run=Mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
                  <div class="item">
                        <div class="zoom">
                            <a href="">  <img src="./admin/upload/<?php echo $row["book_image"]?>" alt=""></a>
                        </div>
                          <div class="button-check-out">
                        <button class="btn-check"><a href="">borrow</a></button>
                  
                    </div> 
                </div>
                <?php
            }
            
            ?>
            </div>
       </div>

       <h1>	Romance</h1>
       <div class="book1"> 
       <div class="owl-carousel owl-theme">
            <?php 
            $connect=new Mysqli('localhost','root','','open_library');
           
            $query = "select * from book_tbl where book_catagory=8";
            $query_run=Mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
                    <div class="item">
                        <div class="zoom">
                            <a href="">  <img src="./admin/upload/<?php echo $row["book_image"]?>" alt=""></a>
                        </div>
                          <div class="button-check-out">
                        <button class="btn-check"><a href="">borrow</a></button>
                  
                    </div> 
                </div>
                <?php
            }
            
            ?>
            </div>
       </div>
       
       
       <h1>	Kids</h1>
       <div class="book1"> 
       <div class="owl-carousel owl-theme">
            <?php 
            $connect=new Mysqli('localhost','root','','open_library');
           
            $query = "select * from book_tbl where book_catagory=9";
            $query_run=Mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
                   <div class="item">
                        <div class="zoom">
                            <a href="">  <img src="./admin/upload/<?php echo $row["book_image"]?>" alt=""></a>
                        </div>
                          <div class="button-check-out">
                        <button class="btn-check"><a href="">borrow</a></button>
                  
                    </div> 
                </div>
                <?php
            }
            
            ?>
            </div>
       </div>
         
       <h1>Thrillers</h1>
       <div class="book1"> 
       <div class="owl-carousel owl-theme">
            <?php 
            $connect=new Mysqli('localhost','root','','open_library');
           
            $query = "select * from book_tbl where book_catagory=10";
            $query_run=Mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
                    <div class="item">
                        <div class="zoom">
                            <a href="">  <img src="./admin/upload/<?php echo $row["book_image"]?>" alt=""></a>
                        </div>
                          <div class="button-check-out">
                        <button class="btn-check"><a href="">borrow</a></button>
                  
                    </div> 
                </div>
                <?php
            }
            
            ?>
            </div>
       </div>
       <h1>	Textbooks</h1>
       <div class="book1"> 
       <div class="owl-carousel owl-theme">
            <?php 
            $connect=new Mysqli('localhost','root','','open_library');
           
            $query = "select * from book_tbl where book_catagory=11";
            $query_run=Mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
                    <div class="item">
                        <div class="zoom">
                            <a href="">  <img src="./admin/upload/<?php echo $row["book_image"]?>" alt=""></a>
                        </div>
                          <div class="button-check-out">
                        <button class="btn-check"><a href="">borrow</a></button>
                  
                    </div> 
                </div>
                <?php
            }
            
            ?>
            </div>
       </div>

       <h1>Authors Alliance & MIT Press</h1>
       <div class="book1"> 
       <div class="owl-carousel owl-theme">
            <?php 
            $connect=new Mysqli('localhost','root','','open_library');
           
            $query = "select * from book_tbl where book_catagory=12";
            $query_run=Mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
                    <div class="item">
                        <div class="zoom">
                            <a href="">  <img src="./admin/upload/<?php echo $row["book_image"]?>" alt=""></a>
                        </div>
                          <div class="button-check-out">
                        <button class="btn-check"><a href="">borrow</a></button>
                  
                    </div> 
                </div>
                <?php
            }
            
            ?>
            </div>
       </div>
       

        </div>
        <div class="grap">
            <h1>Browse by Subject</h1>
            <div class="all-grab">
                <div class="owl-carousel owl-theme">
                    <div class="item"><i class="icon fa-solid fa-earth-americas"></i></div>
                    <div class="item"><i class="icon fa-brands fa-squarespace"></i></div>
                    <div class="item"><i class="icon fa-solid fa-wifi"></i></div>
                    <div class="item"><i class="icon fa-solid fa-city"></i></div>
                    <div class="item"><i class="icon fa-solid fa-palette"></i></div>
                </div>
            </div>
            <h2>Around the Library</h2>
            <div class="all-data">
                <div class="one-chart">
                    <img src="image/Bar-Chart-Vertical.png" alt="">
                </div>
                <div class="one-chart">
                    <img src="image/chaat2.png" alt="">
                </div>
                <div class="one-chart">
                    <img src="image/3.png" alt="">
                </div>
                <div class="one-chart">
                    <img src="image/4.jpg" alt="">
                </div>
                <div class="one-chart">
                    <img src="image/5.png" alt="">
                </div>
                <div class="one-chart">
                    <img src="image/6.jpg" alt="">
                </div>
                <div class="one-chart">
                    <img src="image/5.png" alt="">
                </div>
                
            </div>
            <div class="title-about">
                <h2>About the Project</h2><br>
            </div>
           
            <div class="about-project">
                <div class="about-left">
                    <h3>Open Library is an open, editable library catalog, building towards a web page for every book ever published.</h3><br>
                    <p>Just like Wikipedia, you can contribute new information or corrections to the catalog. You can browse by subjects, authors or lists members have created. If you love books, why not help build a library?</p>
                </div>
                <div class="about-right">
                    <h3>Latest Blog Posts</h3><br>
                    <p>Book Talks: Watch Virtual Talks by Trailblazing Authors - March 10, 2023</p><br>
                    <p>Reach Your 2023 Reading Goals with Open Library - December 31, 2022</p><br>
                    <p>A Brand New My Books Experience - December 27, 2022</p>
                </div>
            </div>
        </div>
        
       </div>
       

    
    </div>
</section>
<section class="footer1">
    <div class="all-footter">
        <div class="openlibrary">
            <h2>Open Library</h2><br>
            <ul>
                <li><a href="">Vision</a> </li>
                <li><a href="">Volunteer</a></li>
                <li><a href="">Partner With Us</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Terms of Service</a></li>
                <li><a href="">Donate</a></li>
            </ul>
        </div>
        <div class="discover">
            <h2>Discover</h2><br>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Books</a></li>
                <li><a href="">Authors</a></li>
                <li><a href="">Authors</a></li>
                <li><a href="">Collections</a></li>
                <li><a href="">Return to Top</a></li>
                <li><a href="">Return to Top</a></li>
            </ul>
        </div>
        <div class="develop">
            <h2>Develop</h2><br>
            <ul>
                <li><a href="">Developer Center</a></li>
                <li><a href="">API Documentation</a></li>
                <li><a href="">Bulk Data Dumps</a></li>
                <li><a href="">Subjects</a></li>
                <li><a href="">Writing Bots</a></li>
                <li><a href="">Add a Book</a></li>
                <li><a href="">Return to Top</a></li>
            </ul>
        </div>
        <div class="help">
            <h2>Help</h2><br>
            <ul>
                <li><a href="">Help</a></li>
                <li><a href="">Help Center</a></li>
                <li><a href="">Bulk Data Dumps</a></li>
                <li><a href="">Suggesting Edits</a></li>
            </ul>
        </div>
        <div class="lagnguge">
            <h2>Change Website Language</h2><br>
            <ul>
                <li><a href="">Čeština (cs)</a></li>
                <li><a href="">English (en)</a></li>
                <li><a href="">Español (es)</a></li>
                <li><a href="">Français (fr)</a></li>
            </ul>
        </div>
    </div>
</section>​​
<section class="text-footer">
   <p> Open Library is an initiative of the Internet Archive, a 501(c)(3) non-profit, building a digital library of Internet sites and other cultural artifacts in digital form. Other projects include the Wayback Machine, archive.org and archive-it.org</p>
</section>

<footer>
    <p>copyrightBy seangkongheng</p>
</footer>
<!-- jQery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- costome js -->
<!-- ow -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="index.js"></script>
</body>
</html>