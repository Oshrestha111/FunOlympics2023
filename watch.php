<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">

   <style>

      .dropbtn {
      background-color: #04AA6D;
      color: white;
      padding: 10px;
      font-size: 16px;
      border: none;
      }

      .dropdown {
      position: relative;
      display: flex;
      margin-left:10%;
      }

      .dropdown-content {
      display: none;
      position: absolute;
      background-color: grey;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      }

      .dropdown-content a {
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      }

      .dropdown-content a:hover {background-color: #ddd;}

      .dropdown:hover .dropdown-content {display: block;}

      .dropdown:hover .dropbtn {background-color: #3e8e41;}
   </style>


   </head>

   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loading-img.gif" alt="">
      </div>
      <!-- END LOADER -->
      <section id="top">
         <header>
            <div class="container">
               <?php include "topheader.php"; ?>
               <div id="myheader"></div>
            </div>
         </header>
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Our Team</h3>
               <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Watch LIVE</li>
               </ul>
            </div>
         </div>
      </section>  
      <section id="contant" class="contant main-heading team">
         <div class="dropdown">
            <button class="dropbtn">Select Channel</button>
            <div class="dropdown-content">
               <a id="channel-1" href='javascript:;' onclick='channel();' >Channel 1</a>
               <a id="channel-2">Channel 2</a>
               <a id="channel-3>">Channel 3</a>
            </div>
         </div>
         <div class="row">
            <div class="container">
               <div class="col-md-12">
                  <div class="feature-post">
                  
                  <iframe id="iframe" src="//stream.crichd.vip/update/wwe.php"allowfullscreen="true" controls="0" autoplay="0" width="850" height="480" scrolling="no" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" allow="encrypted-media"></iframe>
                  
                   <script id="cid0020000325016124116" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 239px;height: 485px;">{"handle":"funolympics","arch":"js","styles":{"a":"CC0000","b":100,"c":"FFFFFF","d":"FFFFFF","k":"CC0000","l":"CC0000","m":"CC0000","n":"FFFFFF","p":"10","q":"CC0000","r":100,"fwtickm":1}}</script>
                                      
                  </div>                
                
               
            </div>
         </div>
      </section>
      <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="#"><img src="images/logo.png" alt="#" /></a>
                        </div>
                        <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
                        <ul class="social-icons style-4 pull-left">
                           <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                           <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Menu</h3>
                        <ul class="footer-menu">
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="team.html">Our Team</a></li>
                           <li><a href="news.html">Latest News</a></li>
                           <li><a href="matche.html">Recent Matchs</a></li>
                           <li><a href="blog.html">Our Blog</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Contact us</h3>
                        <ul class="address-list">
                           <li><i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing..</li>
                           <li><i class="fa fa-phone"></i> 123 456 7890</li>
                           <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> funolympics@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="contact-footer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <p>Copyright © 2018 GameInfo.All rights reserved.</p>
            </div>
         </div>
      </footer>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


      <!-- ALL JS FILES -->
      <script src="js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>
      <script src="js/header.js"></script>
   </body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>