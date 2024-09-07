
<?php
    session_start();
    // include 'config.php';
    include '../db_connect.php';
 
    $update=false;
    $id="";
    $name="";
    $doc="";
    $date="";
    $image="";
 
    if(isset($_POST['add'])){
        $name=$_POST['name'];
        $doc=$_POST['doc'];
        $date=$_POST['date'];

        //PDF Upload...
        $target_dir = "../upload/";
	    $target_file = $target_dir . basename($_FILES["doc"]["name"]);
	    move_uploaded_file($_FILES["doc"]["tmp_name"], $target_file);
	    $doc = $target_file;
      

        // Image Upload...
        $image=$_FILES['image']['name'];
        $upload="../upload/".$image;
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);
 
        $query="INSERT INTO scheme(name,doc,date,image)VALUES(?,?,?,?)";
        $stmt=$connection->prepare($query);
        $stmt->bind_param("ssss",$name,$doc,$date,$upload);
        $stmt->execute();
 
        header('location:admin_schemes.php');
        $_SESSION['response']="Successfully Inserted to the database!";
        $_SESSION['res_type']="success";
    }
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
 
        $sql="SELECT image FROM scheme WHERE id=?";
        $stmt2=$connection->prepare($sql);
        $stmt2->bind_param("i",$id);
        $stmt2->execute();
        $result2=$stmt2->get_result();
        $row=$result2->fetch_assoc();
 
        $imagepath=$row['image'];
        unlink($imagepath);
 
        $query="DELETE FROM scheme WHERE id=?";
        $stmt=$connection->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
 
        header('location:admin_schemes.php');
        $_SESSION['response']="Successfully Deleted!";
        $_SESSION['res_type']="danger";
    }
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
 
        $query="SELECT * FROM scheme WHERE id=?";
        $stmt=$connection->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();
 
        $id=$row['id'];
        $name=$row['name'];
        $doc=$row['doc'];
        $date=$row['date'];
        $image=$row['image'];
 
        $update=true;
    }
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        // $doc=$_POST['doc'];
        $date=$_POST['date'];
        $oldimage=$_POST['oldimage'];
        $olddoc=$_POST['olddoc'];
 
        if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
            $newimage="upload/".$_FILES['image']['name'];
            unlink($oldimage);
            move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
        }
        else{
            $newimage=$oldimage;
        }
        if(isset($_FILES['doc']['name'])&&($_FILES['doc']['name']!="")){
            $newdoc="upload/".$_FILES['doc']['name'];
            unlink($olddoc);
            move_uploaded_file($_FILES['doc']['tmp_name'], $newdoc);
        }
        else{
            $newimage=$oldimage;
        }
        $query="UPDATE scheme SET name=?,doc=?,date=?,image=? WHERE id=?";
        $stmt=$connection->prepare($query);
        $stmt->bind_param("ssssi",$name,$newdoc,$date,$newimage,$id);
        $stmt->execute();
 
        $_SESSION['response']="Updated Successfully!";
        $_SESSION['res_type']="primary";
        header('location:admin_schemes.php');
    }
 
    if(isset($_GET['details'])){
        $id=$_GET['details'];
        $query="SELECT * FROM scheme WHERE id=?";
        $stmt=$connection->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();
 
        $vid=$row['id'];
        $vname=$row['name'];
        $vdoc=$row['doc'];
        $vdate=$row['date'];
        $vimage=$row['image'];
    }
?>