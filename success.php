<?php
    $title = 'Form success';
    require_once 'includes/header.php';
?>

<h1 class="text-center text-success">You have been registered</h1>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstName']. ' ' .   $_POST['lastName'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['speciality'] ?></h6>
    <p class="card-link"><?php echo $_POST['birthday'] ?></p>
    <p class="card-link"><?php echo $_POST['email'] ?></p>
  </div>
</div>



<?php
    require_once 'includes/footer.php';
?>