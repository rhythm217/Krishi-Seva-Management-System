
<?php
    session_start();
    // include 'config.php';
    include '../db_connect.php';
 
    $update=false;
    $id="";
    $name="";
    $model="";
    $dated="";
    $image="";
 
    if(isset($_POST['add'])){
        $name=$_POST['name'];
        $model=$_POST['model'];
        $dated=$_POST['dated'];
 
        $image=$_FILES['image']['name'];
        $upload="upload/".$image;
 
        $query="INSERT INTO machine(name,model,dated,image)VALUES(?,?,?,?)";
        $stmt=$connection->prepare($query);
        $stmt->bind_param("ssss",$name,$model,$dated,$upload);
        $stmt->execute();
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);
 
        header('location:machinery.php');
        $_SESSION['response']="Successfully Inserted to the database!";
        $_SESSION['res_type']="success";
    }
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
 
        $sql="SELECT image FROM machine WHERE id=?";
        $stmt2=$connection->prepare($sql);
        $stmt2->bind_param("i",$id);
        $stmt2->execute();
        $result2=$stmt2->get_result();
        $row=$result2->fetch_assoc();
 
        $imagepath=$row['image'];
        unlink($imagepath);
 
        $query="DELETE FROM machine WHERE id=?";
        $stmt=$connection->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
 
        header('location:index.php');
        $_SESSION['response']="Successfully Deleted!";
        $_SESSION['res_type']="danger";
    }
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
 
        $query="SELECT * FROM machine WHERE id=?";
        $stmt=$connection->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();
 
        $id=$row['id'];
        $name=$row['name'];
        $model=$row['model'];
        $dated=$row['dated'];
        $image=$row['image'];
 
        $update=true;
    }
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $model=$_POST['model'];
        $dated=$_POST['dated'];
        $oldimage=$_POST['oldimage'];
 
        if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
            $newimage="uploads/".$_FILES['image']['name'];
            unlink($oldimage);
            move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
        }
        else{
            $newimage=$oldimage;
        }
        $query="UPDATE machine SET name=?,model=?,dated=?,image=? WHERE id=?";
        $stmt=$connection->prepare($query);
        $stmt->bind_param("ssssi",$name,$model,$dated,$newimage,$id);
        $stmt->execute();
 
        $_SESSION['response']="Updated Successfully!";
        $_SESSION['res_type']="primary";
        header('location:index.php');
    }
 
    if(isset($_GET['details'])){
        $id=$_GET['details'];
        $query="SELECT * FROM machine WHERE id=?";
        $stmt=$connection->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();
 
        $vid=$row['id'];
        $vname=$row['name'];
        $vmodel=$row['model'];
        $vdated=$row['dated'];
        $vimage=$row['image'];
    }
?>