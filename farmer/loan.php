
<?php
include '../db_connect.php';
  include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Loan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <style>

      body {
 background-image: url("https://media.istockphoto.com/id/1208801336/photo/money-bag-on-the-background-of-agricultural-crops-in-the-hand-of-the-farmer-agricultural.jpg?s=612x612&w=0&k=20&c=u-NoNVYKZ0QXjgBObl-g_pJnGY3fGdjE_6mQw3qkeic=");
 background-color: #cccccc;
 background-repeat: no-repeat;
 background-size: cover;
}
    
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="farmer_dashboard.php">Krishi seva management system</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center text-dark mt-2">Loan Management</h3>
            <hr>
            <?php if (isset($_SESSION['response'])) { ?>
            <div class="alert alert-<?php echo  $_SESSION['res_type']; ?> alert-dismissible text-center">
              <b><?php echo  $_SESSION['response']; ?></b>
            </div>
            <?php } unset($_SESSION['response']); ?>
        </div>
    </div>
     
    <div class="row">
        <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                Request for loan
              </div>
              <div class="card-body">
                <form action="action.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo  $id; ?>">
                  <div class="mb-3">
                    <input type="text" name="name" value="<?php echo  $name; ?>" class="form-control" placeholder="Amount required" required>
                  </div>
                  <div class="mb-3">
                    <input type="model" name="model" value="<?php echo  $model; ?>" class="form-control" placeholder="Why do you need loan ? " required>
                  </div>
                  Upto What date will it be repayable ?
                  <div class="mb-3">
                    <input type="date" name="dated" value="<?php echo  $dated; ?>" class="form-control" placeholder="Enter Date" required>
                  </div>
                  Upload any government approved identity:-
                  <div class="mb-3">
                    <input type="hidden" name="oldimage" value="<?php echo  $image; ?>">
                    <input type="file" name="image" class="custom-file">
                    <img src="<?php echo  $image; ?>" width="120" class="img-thumbnail">
                  </div>
                  <div class="mb-3">
                    <?php if ($update == true) { ?>
                    <input type="submit" name="update" class="btn btn-success btn-block" value="Update Record">
                    <?php } else { ?>
                    <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">
                    <?php } ?>
                  </div>
                </form>
              </div>
            </div>
        </div>
        <div class="col-md-8">
            <?php
              $farmer_id = $_SESSION['id'];
              $query = "SELECT * FROM loan where farmer_id= $farmer_id";
              $stmt = $connection->prepare($query);
              $stmt->execute();
              $result = $stmt->get_result();
            ?>
            <div class="card">
            <div class="card-header">
                Record
            </div>
            <div class="card-body">
            <table class="table table-bordered table-striped table-hover" id="data-table">
              <thead>
                <tr>
                  <th>Loan ID</th>
                  <th>Identity</th>
                  <th>Amount</th>
                  <th>Reason </th>
                  <th>Repay Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo  $row['id']; ?></td>
                  <td><img src="<?php echo  $row['image']; ?>" width="25"></td>
                  <td><?php echo  $row['name']; ?></td>
                  <td><?php echo  $row['model']; ?></td>
                  <td><?php echo  $row['dated']; ?></td>
                  <td>
                    <a href="details_loan.php?details=<?php echo  $row['id']; ?>" class="btn btn-primary btn-sm">Details</a> |
                    <a href="action.php?delete=<?php echo  $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want delete this record?');">Delete</a> |
                    <a href="loan.php?edit=<?php echo  $row['id']; ?>" class="btn btn-info btn-sm">Edit</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
</script>
</body>
</html>