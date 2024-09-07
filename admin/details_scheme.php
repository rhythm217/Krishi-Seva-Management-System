
<?php
  include 'action_scheme.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Detail</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center text-dark mt-2">Details of Scheme</h3>
            <hr>
            <?php if (isset($_SESSION['response'])) { ?>
            <div class="alert alert-<?php echo  $_SESSION['res_type']; ?> alert-dismissible text-center">
              <b><?php echo  $_SESSION['response']; ?></b>
            </div>
            <?php } unset($_SESSION['response']); ?>
        </div>
    </div>
     
    <div class="row justify-content-center">
      <div class="col-md-6 mt-3 bg-info p-4 rounded">
        <h2 class="bg-light p-2 rounded text-center text-dark">ID : <?php echo  $vid; ?></h2>
        <div class="text-center">
          <img src="<?php echo  $vimage; ?>" width="300" class="img-thumbnail">
        </div>
        <h4 class="text-light">Name : <?php echo  $vname; ?></h4>
        <h4 class="text-light">Details : <?php echo  $vdoc; ?></h4>
        <h4 class="text-light">Date : <?php echo  $vdate; ?></h4>
      </div>
    </div>
</div>
</body>
</html>