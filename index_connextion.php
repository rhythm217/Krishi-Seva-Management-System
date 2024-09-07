<?php
   $emailid = $_POST['emailid'];
   $contactno = $_POST['contactno'];
   $queryField = $_POST['queryField'];

   //Data base connection...
   include 'db_connect.php';
   // $conn = new mysqli('172.16.15.7', 'dbms18', 'dbms@18', 'dbms18');
   // if($conn->connect_error){
   //  die('Connection Failed : ' .$conn->connect_error);
   // }else{
    $stmt = $connection->prepare("insert into contact_us(emailid, contactno, queryField) values(?,?,?)");
    $stmt->bind_param("sis",$emailid, $contactno, $queryField);
    $stmt->execute();
   //  echo "Registration Successfully...";
    $stmt->close();
    $connection->close();
   // }
?>





<script type="text/javascript">
	alert("Submission successfull...!!");
	window.location.href = "index.php";
</script>
