<?php
    $title = 'Form success';
    require_once 'includes/header.php';
?>

<h1 class="text-center text-success">You have been registered</h1>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_GET['firstName']. ' ' .   $_GET['lastName'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_GET['speciality'] ?></h6>
    <p class="card-text"><?php echo $_GET['speciality'] ?></p>
    <p class="card-link"><?php echo $_GET['birthday'] ?></p>
    <p class="card-link"><?php echo $_GET['email'] ?></p>
  </div>
</div>



<?php
    require_once 'includes/footer.php';
?>