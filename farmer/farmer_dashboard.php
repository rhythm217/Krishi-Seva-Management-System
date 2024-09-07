<?php
	session_start();
	#fetch data from database
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"agri");
   include '../db_connect.php';
	$id = "";
	$name = "";
	$category = "";
	$email = "";
   $mobile = "";
   $address = "";
	$query = "select * from farmer_register";
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Farmer_Dashboard</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../admin/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../admin/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../admin/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../admin/images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="../admin/css/owl.carousel.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="../admin/css/bootstrap-datepicker.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="../admin/images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <div class="full_bg">
         <!-- header -->
         <header class="header-area">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3">
                     <div class="logo">
                        <a href="admin_dashboard.html">Krishi<span>Seva</span></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                              <li><a class="active" href="farmer_dashboard.php">Home</a></li>
                              <li><a href="#about">About</a></li>
                              <li><a href="#services">Service</a></li>
                              <!-- <li><a href="blog.html">Blog</a></li> -->
                              <li><a href="#contact">Contact</a></li>
                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
                  <div class="col-md-2 padd_0 d_none">
                     <ul class="email text_align_right">
                        <li><a href="../logout.php">Logout</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </header>
         <!-- end header inner -->
         <!-- top -->
         <div class="slider_main">
            <!-- carousel code -->
             <div id="banner1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
                              <!-- <ol class="carousel-indicators">
                                 <li data-target="#banner1" data-slide-to="0" class="active"></li>
                                 <li data-target="#banner1" data-slide-to="1"></li>
                                 <li data-target="#banner1" data-slide-to="2"></li>
                              </ol> -->
                              <div class="carousel-inner" role="listbox">
                                 <!-- /.carousel-item -->
                                 <div class="carousel-item active">
                                    <picture>
                                     
                                       <img srcset="../admin/images/F1.jpg" alt="responsive image" class="d-block img-fluid">
                                    </picture>
                                    <div class="carousel-caption relative">
                                       
                                    </div>
                                 </div>

                                 <!-- /.carousel-item -->
                              </div>
                              <!-- /.carousel-inner -->
                              <!-- <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                              <i class="fa fa-angle-left" aria-hidden="true"></i>
                              <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                              <i class="fa fa-angle-right" aria-hidden="true"></i>
                              <span class="sr-only">Next</span>
                              </a> -->
                           </div>
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="willom">
                                      <h1>Farmer Dashboard</h1>
                                    </div>
                                 </div>
                              </div>
                           </div>
         </div>
      </div>
      <!-- end banner -->
      <!-- about -->
      <div class="about" id="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-lg-6 col-md-12">
                  <div class="titlepage text_align_left">
                     <span>About Us</span>
                     <h2>AGRICULTURE MARKET</h2>
                     <p>The Farmer Dashboard is designed to be user-friendly and intuitive, with a clean and straightforward interface that makes it easy for farmers to access the information they need. Whether you're a small-scale farmer or a large agricultural operation, the Farmer Dashboard can help you stay on top of the latest trends and insights in the industry, enabling you to make informed decisions about everything from planting schedules to pricing strategies.</p>
                     <a class="read_more" href="weather.php">Weather Report</a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="row d_flex">
                   <div class="col-md-7">
                     <div class="about_img">
                        <figure><img src="../admin/images/about_img.jpg" alt="#"/>
                        </figure>
                     </div>
                   </div>
                   <div class="col-md-5">
                     <div class="about_img">
                        <figure><img src="../admin/images/about_img1.jpg" alt="#"/>
                        </figure>
                     </div>
                   </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- services -->
      <div class="services" id="services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <span>What We Do</span>
                         <h2>SERVICES WE OFFER</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service1.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>FRESH<br>VEGETABLES</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="crop.php">Crop Manage</a>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service2.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>SCHEMES<br>LIST</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="scheme_list_farmer.php">VIEW SCHEMES</a>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service2.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>MACHINARY<br>PRODUCTS</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="view_machinery.php">Machinery Manage</a>
                  </div>
               </div>

               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service2.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>WORKER<br>HiRING</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="manage_worker.php"> Manage</a>
                  </div>
               </div>
               
               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service2.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>INTERESTED<br>WORKERS</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="hiring.php"> Available workers</a>
                  </div>
               </div>

               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service2.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>LIST OF<br>WORKERS</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="list_worker.php"> Available workers</a>
                  </div>
               </div>


               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service3.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>LOAN<br>SUPPORT</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="farmer_loan_form.php">Loan Manage</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end services -->

      <!-- contact -->
      <div class="contact">
         <div class="container" id="contact">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage text_align_center">
                     <span>Our Contact</span>
                     <h2>Requste A Call Back From Government</h2>
                  </div>
               </div>
               <div class="col-md-8 offset-md-2">
                   <form id="request" class="main_form" action="farmer_message.php"  method="post">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="form_control" placeholder="Your Name" type="text" id="Name" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="form_control" placeholder="Phone Number" type="number" id="number" name="Phone_no">                          
                        </div>
                        <div class="col-md-12">
                           <input class="form_control" placeholder="Email ID" type="email" id="email" name="email">                          
                        </div>
                       
                        <div class="col-md-12">
                           <input class="textarea" placeholder="Message" type="text" id="message" name="Message"> 
                        </div>
                        <div class="col-md-12">
                           <div class="group_btn">
                           <button type="submit" id="submit" name="farmer_contact" class="send_btn">Send</button>
                         </div>
                        </div>
                     </div>
                  </form> 
                  
                 <!-- Mailing section -->

<script src="https://smtpjs.com/v3/smtp.js">
</script>

<script>
  const myButton = document.getElementById('submit');
  myButton.onclick = function() {
    let name = document.getElementById("Name").value;
    let phone = document.getElementById("number").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;



      Email.send({
        Host : "smtp.elasticemail.com",
        Username : "bittusharmashiv@gmail.com",
        Password : "07A427BC205609177B20CBFC4C67719B027D",
        To : email,
        From : "bittusharmashiv@gmail.com",
        Subject : "Krisi Seva Contact You",
        Body :"Your Name: " + Name + "<br><br>" "Your Phone Number: " + number + "<br><br>" "Your Email ID: " + email + "<br><br>" "Your Reason: " + message + "<br><br>" "Dear User," + "<br><br>" + "Thank you for reaching out to Krisi Seva System. We appreciate your interest in our services and we are committed to providing the best possible support to our users." + "<br><br>" + "We are pleased to introduce our Krishi Seva Management System, which has been designed to provide farmers with a comprehensive platform to manage all aspects of their farming operations. We will soon contact number you provide to us " + phone + ", We take pride in our responsive customer service and we always strive to provide timely and accurate solutions to our users' queries. We are here to help you and ensure that your experience with our system is a smooth and enjoyable one." + "<br><br>" + "Thank you for choosing Krisi Seva." + "<br><br>" + "Best regards," + "<br><br>" + "The Krisi Seva System Team."
    }).then(
      message => alert(message)
    );

  };

</script>

<!-- End of Mailing Section -->


               </div>
            </div>
         </div>
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Delhi+PMO" width="600" height="430" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
         </div>
      </div>
      <!-- end contact -->
      
         <!-- Start footer -->    
            <div class="copyright">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-8">
                        <p>© 2023 All Rights Reserved. Design by <a href="https://html.design/">IIIT Allahabad 2025 Batch</a></p>
                     </div>
                     <div class="col-md-4">
                           <ul class="social_icon ">
                              <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="../admin/js/jquery.min.js"></script>
      <script src="../admin/js/bootstrap.bundle.min.js"></script>
      <script src="../admin/js/jquery-3.0.0.min.js"></script>
      <script src="../admin/js/owl.carousel.min.js"></script>
      <script src="../admin/js/bootstrap-datepicker.min.js"></script>
      <script src="../admin/js/custom.js"></script>
   </body>
</html>

