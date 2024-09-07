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
      <title>Manage_Page</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
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
                              <!-- <li><a class="active" href="admin_dashboard.html">Home</a></li> -->
                              <!-- <li><a href="about.html">About</a></li>
                              <li><a href="service.html">Service</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="manage.php">Manage</a></li>
                              <li><a href="contact.html">Contact</a></li> -->
                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
                  <div class="col-md-2 padd_0 d_none">
                     <ul class="email text_align_right">
                        <li><a href="../logout.php ">Logout</a>
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
                              <ol class="carousel-indicators">
                                 <li data-target="#banner1" data-slide-to="0" class="active"></li>
                                 <li data-target="#banner1" data-slide-to="1"></li>
                                 <li data-target="#banner1" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner" role="listbox">
                                 <!-- /.carousel-item -->
                                 <div class="carousel-item active">
                                    <picture>
                                     
                                       <img srcset="images/banner6.jpg" alt="responsive image" class="d-block img-fluid">
                                    </picture>
                                    <div class="carousel-caption relative">
                                       
                                    </div>
                                 </div>

                                 <!-- /.carousel-item -->
                              </div>
                           </div>
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="willom">
                                      <h1>Management</h1>
                                    </div>
                                 </div>
                              </div>
                           </div>
         </div>
      </div>
      <!-- end banner -->
     
      <!-- services -->
      <div class="services">
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
                           <h3>CURRENT<br>SCHEMES</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="admin_schemes.php">Manage</a>
                  </div>
               </div>
               <!-- <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                        <div class="veget">
                           <h3>CROP<br>MSP</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="services.html">Manage</a>
                  </div>
               </div> -->
               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service2.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>COMPLAINTS<br>QUERY</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="complaint.php">Manage</a>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service2.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>LOAN<br>REQUIREMENT</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="admin_loan_requests.php">Manage</a>
                  </div>
               </div>
               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service2.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>CROP<br>AVAILABILITY</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="manage_crop.php">Manage</a>
                  </div>
               </div>


               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service2.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>ALL<br>FARMER'S</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="list_farmer.php">Manage</a>
                  </div>
               </div>


               
               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service2.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>ALL<br>WORKER'S</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="list_worker.php">Manage</a>
                  </div>
               </div>

               
               <div class="col-md-4">
               <div class="services_box_main">
                     <div  class="services_box text_align_left">
                          <!-- <figure><img src="images/service3.jpg" alt="#"/></figure> -->
                        <div class="veget">
                           <h3>MACHINARY<br>SUPPORT</h3>
                           
                        </div>
                     </div>
                     <a class="read_more" href="machinery.php">Manage</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end services -->
      
     
            <div class="copyright">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-8">
                        <p>© 2023 All Rights Reserved. Design by IIIT Allahabad 2025 batch.</a></p>
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
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>