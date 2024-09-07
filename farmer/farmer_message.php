 <?php
   $Name = $_POST['Name'];
   $Phone_no = $_POST['Phone_no'];
   $Message = $_POST['Message'];
   $email = $_POST['email'];

   //Data base connection...
   include '../db_connect.php';
  //  $conn = new mysqli('localhost', 'root', '', 'agri');
  //  if($conn->connect_error){
  //   die('Connection Failed : ' .$conn->connect_error);
  //  }else{
    $stmt = $connection->prepare("insert into farmer_contact(Name, Phone_no,email, Message) values(?,?,?,?)");
    $stmt->bind_param("siss",$Name, $Phone_no,$email, $Message);
    $stmt->execute();
   //  echo "Registration Successfully...";
    $stmt->close();
    $connection->close();
  //  }
 ?>   

 


 <script type="text/javascript">
	alert("Submission successfull...!!");
	window.location.href = "farmer_dashboard.php";
</script> 
