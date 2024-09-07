<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <!-- ------------------------------------------------------------------------- -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../CSS/login.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    
</head>
    <!-- ------------------------------------------------------------------------- -->

<body>
    
        <header>
            <a href="#"><h2 class="logo" id="main-logo"></h2></a>
            <nav class="navigation">
                <a href="home.html">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
            </nav>
        </header>
    
    <section class="section">
        
        <div class="login-box">
            <div>
                
                <h2>Supplier-Login</h2>

            <form action="" method="post">
                <!-- ------------------------------------------------------------------------- -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name=""></ion-icon>
                    </span>
                    <input type="email" id="phone_no" name="email" placeholder="Enter your Email" required >
                    <!-- <label>Email</label> -->
                </div>
                <!-- ------------------------------------------------------------------------- -->

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input id="pass_user" name="password" type="password" placeholder="Password" required>
                    <!-- <label>Password</label> -->
                </div>
           

                <button type="submit" name="login" id="loginbtn" class="btn">Login</button>
                <!-- ------------------------------------------------------------------------- -->

                <div class="login-register">
                    <p>Don't have an account? <a href="../worker_register.php" class="register-link">Register</a></p>
                </div>
                <!-- ------------------------------------------------------------------------- -->
            </form>

            <!-- // $conn = new mysqli('172.16.15.7', 'dbms18', 'dbms@18', 'dbms18'); -->
            <?php 
				if(isset($_POST['login'])){
					// $connection = mysqli_connect("172.16.15.7","dbms18","dbms@18");
					// $db = mysqli_select_db($connection,"dbms18");
                    include '../db_connect.php';
					$query = "select * from worker_register where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
                                $_SESSION['id'] = $row['id'];
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['mobile'] =  $row['mobile'];
                                $_SESSION['address'] =  $row['address'];
                             $_SESSION['category'] =  $row['category'];
								header("Location: supply_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
            
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>