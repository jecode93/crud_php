<?php
    $title = 'Edit Record';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $results = $crud->getSpecialties();


    if(!isset($_GET['id'])){
        echo 'Error';
    }else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
    

    


?>



<h1 class="text-center">Edit Record</h1>

<form method="post" action="edit.php">
    <input type="hidden" name="id" value = "<?php echo $attendee['attendee_id'] ?>" >

  <div class="mb-3">
    <label for="firstName" class="form-label">First name</label>
    <input name="firstName" type="text" value = "<?php echo $attendee['firstname'] ?>" class="form-control" id="firstName">
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">Last name</label>
    <input name="lastName" type="text" value = "<?php echo $attendee['lastname'] ?>" class="form-control" id="lastName">
  </div>

  <div class="mb-3">
    <label for="birthday" class="form-label">Date of Birth</label>
    <input name="birthday" type="date" value = "<?php echo $attendee['birthday'] ?>" class="form-control" id="birthday" >
  </div>

  <div class="mb-3">
    <label for="speciality" class="form-label">Speciality</label>
    <select class="form-control" name="speciality" id="speciality">
        
          <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
            <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>> 
                <?php echo $r['name'] ?></option>
          <?php }?>
    </select>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input name="email" type="email" value = "<?php echo $attendee['email'] ?>" class="form-control" id="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Contact number</label>
    <input name="phone" type="text" value = "<?php echo $attendee['contact'] ?>" class="form-control" id="phone" >
    <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>

  </div>

  <button name="submit" type="submit" class="btn btn-success btn-block ">Save Changes</button>
</form>



<?php } ?>


<br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <?php
include 'includes/footer.php';
?>