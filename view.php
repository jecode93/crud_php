<?php
    $title = 'Attendee details';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if (!isset($_GET['id'])) {
        echo '<h1 class="text-danger">Please, check details and try again</h1>';
    }else{
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
    
?>


<div class="card" style="width: 50%;">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $result['firstname']. ' ' .   $result['lastname'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name'] ?></h6>
    <p class="card-text">Birthday : <?php echo $result['birthday'] ?></p>
    <p class="card-text">Email : <?php echo $result['email'] ?></p>
    <p class="card-text">Contact : <?php echo $result['contact'] ?></p>
  </div>
</div>



<?php }?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
    require_once 'includes/footer.php';
?>