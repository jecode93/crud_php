<?php
    $title = 'Form success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){

      $fname = $_POST['firstName'];
      $lname = $_POST['lastName'];
      $dob = $_POST['birthday'];
      $email = $_POST['email'];
      $contact = $_POST['phone'];
      $specialty = $_POST['speciality'];

      $isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $specialty);

      if($isSuccess){
          echo "<h1 class='text-center text-success'>You have been registered</h1>";
      }
      else{
          echo "<h1 class= 'text-center text-danger'>There was an error in processing</h1>";
      }

    }
?>
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