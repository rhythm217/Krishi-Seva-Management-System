<!doctype html>
<html lang="en">
  <head>

  <!-- Icon Awsome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./CSS/style.css">

    <title>Krishi Seva</title>
    <style>
      .text{
  font-size: 30px;
  color:#fff;
  font-family: sans-serif;
  text-shadow: 0px 15px 12px #000;
}
.line{
  width:250px;
  height: 8px;
  background-color: #17ff8d;
  display: block;
  position: relative;
  border-radius: 5px;
  left:38%;
  box-shadow: 0px 15px 12px 0px #000;
}
      </style>

<script> 
function validateform()
{
	let x = document.forms["myForm"]["contactno"].value;
  if (x.length!=10) {
    alert("Number must be valid");
    return false;
  }
}
</script>
  </head>
  <body>



<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
       <img src="./image/leaf.png" width="30" class="logo"/>
    </a>
  <a class="navbar-brand" href="index.php" style="color:white;">Krishi Seva Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Sevices/aboutus.php">About Us</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Register
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="farmer_register.php">Farmer</a></li>
            <li><a class="dropdown-item" href="worker_register.php">Worker</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="farmer/farmer_login.php">Farmer</a></li>
            <li><a class="dropdown-item" href="supplier/supply_login.php">Worker</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="admin/admin_login.php">Admin</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>




<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="./image/c1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block c-img">
      <div class="text">
        <h1>Crop Monitoring</h1>
        <div class="line"></div>
      </div>
        <!-- <h1 class="font">Crop Monitoring</h1> -->
        <div class="text">
        <h3 class="font">The farmer is the only man in our economy who buys everything at retail, sells everything at wholesale, and pays the freight both ways.</h3></div>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="./image/a4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block c-img">
      <div class="text">
        <h1>Record Keeping</h1>
        <div class="line"></div>
      </div>
        <!-- <h1 class="font">Record Keeping</h1> -->
        <div class="text">
        <h3 class="font">Agriculture not only gives riches to a nation, but the only riches she can call her own.</h3></div>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="./image/x1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block c-img">
      <div class="text">
        <h1>Harvest Planning</h1>
        <div class="line"></div>
      </div>
        <!-- <h1 class="font">Harvest Planning</h1> -->
        <div class="text">
        <h3 class="font">Farming is a way of life that teaches the importance of patience, hard work, and perseverance.</h3></div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






<!-- {{!-- Services Section --}} -->

<section id="services_section" class="py-4">

  <div class="container">
    <h1 class="text-center text-secondary"> Services that we Provide</h1>

    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

      <!-- {{!-- first service col --}} -->
      
       <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="container text-center py-3">
            <i class="fa-solid fa-leaf icon"></i>
            </div>
            <h4 class="card-title">Crop management</h4>
            <p>This includes tracking crop planting, harvesting, and growth stages, as well as monitoring crop health, pest and disease control, and fertilization.</p>
            <a href="Sevices/Cropsupport.html" class="ml-3">Know more</a>
            <!-- <a href="#!" class="ml-3">Support</a> -->
          </div>
          </div>
         </div>




         <!-- {{!-- Second Services --}} -->

        <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="container text-center py-3">
            <i class="fa-solid fa-people-roof icon"></i>
            </div>
            <h4 class="card-title">Livestock management</h4>
            <p>This includes tracking the breeding, feeding, and health of livestock, as well as managing milk and egg production.</p>
            <a href="Sevices/Livestock.html" class="ml-3">Know more</a>
            <!-- <a href="#!" class="ml-3">Support</a> -->
          </div>
          </div>
         </div>


         <!-- {{!-- Third Service --}} -->

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="container text-center py-3">
            <i class="bi bi-bar-chart-fill icon"></i>
            </div>
            <h4 class="card-title">Inventory management</h4>
            <p>This includes tracking inventory of seeds, fertilizer, animal feed, and other inputs.</p>
            <a href="Sevices/Inventory.html" class="ml-3">Know more</a>
            <!-- <a href="#!" class="ml-3">Support</a> -->
          </div>
          </div>
         </div>


         <!-- {{!-- Fourth Service --}} -->

         <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="container text-center py-3">
            <i class="bi bi-cash-coin icon"></i>
            </div>
            <h4 class="card-title">Financial management</h4>
            <p>This includes tracking expenses, revenues, and profits for the farm, as well as managing budgets and financial planning.</p>
            <a href="Sevices/Financial.html" class="ml-3">Know more</a>
            <!-- <a href="#!" class="ml-3">Support</a> -->
          </div>
          </div>
         </div>


        <!-- {{!-- Fifth Service --}} -->

         <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="container text-center py-3">
            <i class="bi bi-file-earmark-bar-graph icon"></i>
            </div>
            <h4 class="card-title">Reporting and analysis</h4>
            <p>This includes generating reports on various aspects of the farm, such as crop yields, livestock performance, and financial performance.</p>
            <a href="Sevices/Reporting.html" class="ml-3">Know more</a>
            <!-- <a href="#!" class="ml-3">Support</a> -->
          </div>
          </div>
         </div>

        
        <!-- {{!-- Sixth Service --}} -->

         <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="container text-center py-3">
            <i class="bi bi-megaphone icon"></i>
            </div>
            <h4 class="card-title">Marketing and sales</h4>
            <p>Some agriculture management systems may include features to help farmers manage marketing and sales of their products.</p>
            <a href="Sevices/Marketing.html" class="ml-3">Know more</a>
            <!-- <a href="#!" class="ml-3">Support</a> -->
          </div>
          </div>
         </div>
         
         
         </div>
       </div>
    </section>


  <!-- {{!-- Contact Us Section --}} -->

   <section id="contact_us_section" class="py-5 background1">
    <div class="container">
      <h1 class="text-center text-secondary" style="color:black;">Contact Us</h1>
      <div class="row">
        <div class="col-md-12">

<form name="myForm" action="index_connextion.php" method="post" onsubmit="return validateform()">

<!-- onsubmit="Mail(); reset(); return false;" -->

<div class="mb-3 form-group">
  <label for="emailid" class="form-label" style="color:black;">Your Email address</label>
  <input type="email" class="form-control" id="emailid" name="emailid" aria-describedby="emailHelp"/>
  <div id="emailHelp" class="form-text" style="color:black;">We'll never share your email with anyone else.</div>
</div>


<div class="mb-3 form-group">
  <label for="contactno" class="form-label" style="color:black;">Your Contact number</label>
  <input type="number" class="form-control" id="contactno" name="contactno"/>
</div>

<div class="form-group my-3 ">
<label for="queryField" style="color:black;">Your Query</label>
<textarea type="text" class="form-control" id="queryField" name="queryField" rows="5"></textarea>
 </div>

<div class="container text-center">
  <a href="index.php">
  <button type="submit" id="submit" class="btn btn-dark"  >Submit</button>
</div>

</form>

        </div>
      </div>
    </div>
   </section>



   <!-- Mailing section -->

<script src="https://smtpjs.com/v3/smtp.js">
</script>

<script>
  const myButton = document.getElementById('submit');
  myButton.onclick = function() {
    let email = document.getElementById("emailid").value;
    let contact = document.getElementById("contactno").value;
    let query = document.getElementById("queryField").value;



      Email.send({
        Host : "smtp.elasticemail.com",
        Username : "bittusharmashiv@gmail.com",
        Password : "07A427BC205609177B20CBFC4C67719B027D",
        To : email,
        From : "bittusharmashiv@gmail.com",
        Subject : "Krisi Seva Contact You",
        Body : "Dear User," + "<br><br>" + "Thank you for reaching out to Krisi Seva System. We appreciate your interest in our services and we are committed to providing the best possible support to our users." + "<br><br>" + "At Krisi Seva, Our Service center contact you on this number you provided us " + contact + ", We take pride in our responsive customer service and we always strive to provide timely and accurate solutions to our users' queries. We are here to help you and ensure that your experience with our system is a smooth and enjoyable one." + "<br><br>" + "Thank you for choosing Krisi Seva." + "<br><br>" + "Best regards," + "<br><br>" + "The Krisi Seva System Team."
    }).then(
      message => alert(message)
    );

  };

</script>

<!-- End of Mailing Section -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>