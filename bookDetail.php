<?php  

    

?>

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
                    <span> <i class="fa-solid fa-book"></i></span> <a href="index.php">Open Library</a>
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

<section>

<?php 
$id=$_GET['id'];
 $connect=new Mysqli('localhost','root','','open_library');       
        $query = "SELECT * FROM book_tbl where book_id ='$id'";
        $query_run=Mysqli_query($connect,$query);
        while($row=mysqli_fetch_assoc($query_run))
         echo $row['Author'];
            {

                ?>



        <div class="all-detail-bokk">
            <div class="deteail-book-left">
                <div class="deteail-book-left-block">
                    <div class="deteail-book-left-block-img">
                        <div class="image-book-detail">
                           <a href=""> <img src="image/treding.jpg" alt=""></a>
                        </div>
                        <div class="text">
                          <h1><a href="">Preview</a></h1>
                        </div>
                        <div class="serch-insert">  
                            <button>search insi</button>
                        </div>
                       <div class="want-to-read mt-5">
                          <button>Read</button>
                       </div>
                       <div class="star-book">
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       </div>
                       <div class="you-can-share">
                       <i class="fa-sharp fa-solid fa-book"></i>
                       
                       review|
                       <i class="fa-sharp fa-solid fa-book"></i>
                       Node |
                       <i class="fa-sharp fa-solid fa-book"></i> 
                       
                       share
                            <!-- <div class="renew">

                            </div>
                            <div class="node">

                            </div>
                            <div class="share">

                            </div> -->
                       </div>
                    </div>
                </div>
            </div>
            <div class="deteail-book-right">
                <nav>
                    <ul>
                        <li class="active"><a href="">Overview</a></li>
                        <li><a href="#view-page">View 25 Edition</a></li>
                        <li><a href="#detail-booksss">detail</a></li>
                        <li><a href="#12-review">12 Review</a></li>
                        <li><a href="#list">list</a></li>
                        <li><a href="#Releted-book">related book</a></li>
                    </ul>
                </nav>

                <!-- detail -->

                <div class="tile-book mt-5">
                    <p>Add edition by seang kong heng</p>
                    <h1><?php echo $row['book_title'] ?></h1>
                </div>
                <!-- write -->
                <div class="write">
                    <h1>By : <a href=""><?php echo $row['Author']?></a></h1>
                </div>
                <!-- star -->
                <div class="star-books">
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                       <i class="fa-solid fa-star"></i>
                      <p>  3.93 · 158 Ratings,  3327 Want to read 234 ,Currently reading 174, Have read</p>
                 </div>

                 <!-- sumaria movie -->

                 <div class="samari">
                    <p>Feyre has undergone more trials than one human woman can carry in her heart. Though she's now been granted the powers and lifespan of the High Fae, she is haunted by her time Under the Mountain and the terrible deeds she performed to save the lives of Tamlin and his people.

                        As her marriage to Tamlin approaches, Feyre's hollowness and nightmares consume her. She finds herself split into two different people: one who upholds her bargain with Rhysand, High Lord of the feared Night Court, and one who lives out her life in the Spring Court with Tamlin. While Feyre navigates a dark web of politics, passion, and dazzling power, a greater evil looms. She might just be the key to stopping it, but only if she can harness her harrowing gifts, heal her fractured soul, and decide how she wishes to shape her future-and the future of a world in turmoil.

                        Bestselling author Sarah J. Maas's masterful storytelling brings this second book in her dazzling, sexy, action-packed series to new heights.</p>
                 </div> 
                    <!-- About this book -->
            <div class="about-this-book">
            <p>About this book </p>
            </div>
                  
                    <div class="about-book">
                        <button>
                            <h1>Publish Date </h1>
                            <p>2023</p>
                        </button>
                        <button> 
                        <h1> Publisher</h1> 
                        <p>kongheng</p>
                        </button>
                        <button>
                          <h1> language</h1>
                            <p>English</p>
                        </button>
                        <button> 
                          <h1>page</h1>
                            <p>699</p>
                        </button>
                    </div>
                    <section id=view-page>
                           <div class="view25-page">
                                <div class="row-book">
                                    <div class="image-row-book">
                                        <img src="image/3.png" alt="">
                                    </div>
                                    <div class="desciption-row-book">
                                        <b> cuast of mist and fury</b></p>
                                        <p>2020 kompong cham publiser</p>
                                    </div>
                                    <div class="button-row-book">
                                            <button>Read now</button>
                                    </div>
                                </div>

                                <div class="row-book">
                                    <div class="image-row-book">
                                        <img src="image/3.png" alt="">
                                    </div>
                                    <div class="desciption-row-book">
                                        <b> cuast of mist and fury</b></p>
                                        <p>2020 kompong cham publiser</p>
                                    </div>
                                    <div class="button-row-book">
                                            <button>Read now</button>
                                    </div>
                                </div>

                                <div class="row-book">
                                    <div class="image-row-book">
                                        <img src="image/3.png" alt="">
                                    </div>
                                    <div class="desciption-row-book">
                                        <b> cuast of mist and fury</b></p>
                                        <p>2020 kompong cham publiser</p>
                                    </div>
                                    <div class="button-row-book">
                                            <button>Read now</button>
                                    </div>
                                </div>

                                <div class="row-book">
                                    <div class="image-row-book">
                                        <img src="image/3.png" alt="">
                                    </div>
                                    <div class="desciption-row-book">
                                        <b> cuast of mist and fury</b></p>
                                        <p>2020 kompong cham publiser</p>
                                    </div>
                                    <div class="button-row-book">
                                            <button>Read now</button>
                                    </div>
                                </div>
                           </div>
                     </section>
                     <section id="detail-booksss">
                           <div class="detail-booksss-content">
                                        <div class="book-detail">
                                             <h1>Book Detail</h1>

                                        </div>
                               <div class="title-detail"><br>
                               <h1>Public in</h1>   
                                    <p>cambodi</p>
                               </div><br>
                               <div class="Edite"><br>
                                    <h1>Edition node </h1><br>
                                        <p>Seang kong hneg</p>
                                        <p>pen Tech meng</p>
                                        <p>Oerng Chhengkheang</p>
                               </div><br>
                               <div class="physicale-object">
                                    <h1>Physy object</h1><br>
                                   <p>   format     :</p>
                                   <p>   Pagination :</p>  
                                   <p>   Number of pages :</p>  
                                   <p>    Dimensions      :</p>  

                               </div><br>

                               <div class="Id-number">
                                <h1>ID number</h1><br>
                                    <p>    Open Library    ::</p>
                                   <p>     InternetArchive :</p>  
                                   <p>     ISBN 10         :</p>  
                                   <p>     ISBN            :</p>  
                               </div>
                           </div>
                     </section>
                     <!-- <section id="12-review">
                           <div class="re12-review">
                                view page
                           </div>
                     </section>
                     <section id="list">
                           <div class="list">
                                 Book Details
                           </div>
                     </section>
                     <section id="Releted-book">
                           <div class="Releted-book">
                                 Book Details
                           </div>
                     </section> -->
            </div>
          
        </div>
       

        <?php

}
?>
</section>
<!-- body -->
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