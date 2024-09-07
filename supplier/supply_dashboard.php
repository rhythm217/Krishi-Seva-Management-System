
<?php
	session_start();
	#fetch data from database
	// $connection = mysqli_connect("172.16.15.7","dbms18","dbms@18");
  // // $conn = new mysqli('172.16.15.7', 'dbms18', 'dbms@18', 'dbms18');
	// $db = mysqli_select_db($connection,"dbms18");
  include '../db_connect.php';
  $id="";
	$name = "";
	$email= "";
	$password = "";
	$address = "";
  $contact="";
  $resume="";
  $work="";
  $salary="";
	$query = "select * from worker_register where email='$_SESSION[email]'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Home</title>
    <style>
        *{
    margin: 0; padding: 0;
    box-sizing: border-box;
    font-family: 'Josefin Sans', sans-serif;
    }

    header{
     width: 100%;
     height: 100vh;
     background-image: url('https://www.zuplic.com/wp-content/uploads/2018/07/eCommerce-Animated-GIF.gif');
     background-color: #edffe7;
     background-size: cover;
     background-position: center;
     background-repeat: no-repeat;
    
    }
    
    .mainheader{
     width: 100%;
     height: 100px;
     display: flex;
     justify-content: space-between;
     align-items: center;
    }
    
    .mainheader .logo img{
     width: 250px; height: 70px;
     padding-left: 60px;
    }
    
    /* .mainheader nav{
     width: 450px;
     display: flex;
     justify-content: space-around;
     align-items: center;
    }
    
    .mainheader nav a{
     text-decoration: none;
     color: black;
     text-transform: uppercase;
    } */
    
    .menubtn{
     margin-right: 60px;
    }
    .mainheader .btn{
        padding: 10px 45px;
        text-align: center;
        font-size: 19px;
        font-weight: 600;
        color: black;
        border: none;
        border-radius: 10px;
    
    }
    .mainheader .button{
     padding: 10px 45px;
     text-align: center;
     font-size: 14px;
     color:#fff;
     border: none;
     background-image: linear-gradient(to right,#649bff,#0070fa,#649bff);
     border-radius: 10px;
    }
    
    .main{
        display: flex;
        align-items: center;
        justify-content:space-between;
        margin: 20px 90px 0px 90px;
    }
    main{
     width: 100%;
     display: flex;
     justify-content: space-between;
     align-items: center;
    }
    
    main .right-sec{
     padding-right: 70px;
    }
    
    main .left-sec{
     padding-left: 100px;
    }
    
    .left-sec h2{
     font-size: 20px;
     text-transform: capitalize;
     font-weight: lighter;
     color: #242424;
     margin-top: 100px;
    }
    
    .left-sec h1{
     font-size: 55px;
     text-transform: capitalize;
     font-weight: 700;
     margin: 15px 0;
    }
    
    .left-sec p{
     margin-bottom: 20px;
    }
    
    .left-sec button{
     padding: 15px 45px;
     text-align: center;
     font-size: 14px;
     color: #fff;
     border: none;
     background-image: linear-gradient(to right,#649bff,#0070fa,#649bff);
     border-radius: 10px;
    }
    .right-sec img{
        width: 700px;
    }
    .navigation a{
        position: relative;
        text-transform: uppercase;
        font-size: 1.1em;
        color:black;
        text-decoration: none;
        font-weight: 500;
        margin-left: 30px;
        top: -10%;
        cursor: pointer;
        left: 50px;
    }
    .navigation a::after{
        content: '';
        position: absolute;
        left: 0;
        bottom: -6px;
        width: 100%;
        height: 3px;
        background:black;
        border-radius: 5px;
        transform: scaleX(0);
        transition: transform .2s;
    }
    .navigation a:hover::after{
        transform-origin: left;
        transform: scaleX(1);
    }
    .explor{
        color: rgb(124, 247, 16);
    }

    .about{
        margin: 100px;
        text-align:center;
        
    }
    .about p{
        font-size: large;
        word-spacing: 2px;
    }
    
    /* section {
        width: 100%;
        display: inline-block;
        background: #333;
        height: 50vh;
        text-align: center;
        font-size: 22px;
        font-weight: 700;
        text-decoration: underline;
      } */
      
      .footer-distributed{
        background: #101010;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 16px sans-serif;
        padding: 55px 50px;
      }
      .footer-final{
          display:flex;
      }
      .footer-distributed .footer-left,
      .footer-distributed .footer-center,
      .footer-distributed .footer-right{
        display: inline-block;
        vertical-align: top;
      }
      
      /* Footer left */
      
      .footer-distributed .footer-left{
        width: 40%;
      }
      
      /* The company logo */
      
      .footer-distributed h3{
        color:  #ffffff;
        font: normal 36px 'Open Sans', cursive;
        margin: 0;
      }
      
      .footer-distributed h3 span{
        color:  lightseagreen;
      }
      
      /* Footer links */
      
      .footer-distributed .footer-links{
        color:  #ffffff;
        margin: 20px 0 12px;
        padding: 0;
      }
      
      .footer-distributed .footer-links a{
        display:inline-block;
        line-height: 1.8;
        font-weight:400;
        text-decoration: none;
        color:  inherit;
      }
      
      .footer-distributed .footer-company-name{
        color:white;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
      }
      
      /* Footer Center */
      
      .footer-distributed .footer-center{
        width: 35%;
      }
      
      .footer-distributed .footer-center i{
        background-color:  #33383b;
        color: #ffffff;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
      }
      
      .footer-distributed .footer-center i.fa-envelope{
        font-size: 17px;
        line-height: 38px;
      }
      
      .footer-distributed .footer-center p{
        display: inline-block;
        color: #ffffff;
        font-weight:400;
        vertical-align: middle;
        margin:0;
      }
      
      .footer-distributed .footer-center p span{
        display:block;
        font-weight: normal;
        font-size:14px;
        line-height:2;
      }
      
      .footer-distributed .footer-center p a{
        color:  lightseagreen;
        text-decoration: none;;
      }
      
      .footer-distributed .footer-links a:before {
        content: "|";
        font-weight:300;
        font-size: 20px;
        left: 0;
        color: #fff;
        display: inline-block;
        padding-right: 5px;
      }
      
      .footer-distributed .footer-links .link-1:before {
        content: none;
      }
      
      /* Footer Right */
      
      .footer-distributed .footer-right{
        width: 20%;
      }
      
      .footer-distributed .footer-company-about{
        line-height: 20px;
        color:  #92999f;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
      }
      
      .footer-distributed .footer-company-about span{
        display: block;
        color:  #ffffff;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
      }
      
      .footer-distributed .footer-icons{
        margin-top: 25px;
      }
      
      .footer-distributed .footer-icons a{
        display: inline-block;
        width: 35px;
        height: 35px;
        cursor: pointer;
        background-color:  #33383b;
        border-radius: 2px;
      
        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;
      
        margin-right: 3px;
        margin-bottom: 5px;
      }
      
      /* If you don't want the footer to be responsive, remove these media queries */
      
      @media (max-width: 880px) {
      
        .footer-distributed{
          font: bold 14px sans-serif;
        }
      
        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right{
          display: block;
          width: 100%;
          margin-bottom: 40px;
          text-align: center;
        }
      
        .footer-distributed .footer-center i{
          margin-left: 0;
        }
      
      }
      
    </style>
</head>
<body>
  <header>
    <div class="mainheader" data-aos="flip-down" data-aos-duration="500">
     <div class="logo">
      <a href="#"></a>
     </div>
   
     <nav class = "navigation">
      <a>Home</a>
      <a href="worker_profile.php">Profile</a>
      <!-- <a>About</a>
      <a>contact</a> -->
     </nav>
   
     <div class="menubtn">
       <!-- <a id="userlinka" href="login.html"><button class="button" id="userlink"></button></a> -->
      <a href="../logout.php"><button class="button"> LogOut</button></a>
      <!-- <a >Login</a> -->
     </div>
    </div>
   
    <div class="main">
     <div class="left-sec" data-aos="fade-right" data-aos-duration="1000">
      <h2> Welcome</h2>
      
      <?php
						// $connection = mysqli_connect("localhost","root","");
						// $db = mysqli_select_db($connection,"agri");
						$query = "select * from worker_register where email ='$_SESSION[email]'";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							
							
								<?php echo $row['name'];?>
                


							
							<?php
						}
					?>
      <h1>Worker</h1>
      <p> </p>
      <a href="view_jobs.php"><button>View Your Jobs</button></a>
      </button>
    </div>
   
     <div class="right-sec" data-aos="fade-left" data-aos-duration="1000">
      <figure>
      </figure>
   
    </div>
   
    </div>
   </header>
   <div class="about" data-aos="fade-down" data-aos-duration="1000"> 
       <h1>About</h1>
       <br>
       <p>General farm workers plant, cultivate and harvest crops, raise livestock and poultry and maintain and repair farm equipment and buildings. A Farmer manages farms, ranches, greenhouses, nurseries, and other agricultural production organizations. Farmers are involved in planting, cultivating, performing post-harvest duties, overseeing livestock, and supervising farm labor depending on the type of farm.
       </p>
   </div>
   
   <div class="footer-final">
       <footer class="footer-distributed">
       
           <div class="footer-left">
       
             <h3><span>Worker</span></h3>
       
             <p class="footer-links">
               <a href="#" class="link-1">Home</a>
       
               <a href="#">Profile</a>
       
               <a href="#">About</a>
       
       
               <a href="#">Contact</a>
             </p>
       
             <p class="footer-company-name">Worker @IIITA © 2023</p>
           </div>
       
         </footer>
   </div>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
     AOS.init();
   </script>
</body>
</html>