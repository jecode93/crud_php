<?php 
    $title = 'All attendees';
    
require_once 'includes/header.php';
require_once 'db/conn.php';

$results = $crud->getAttendees();

?>
 <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Email Adress</th>
            <th>Contact Number</th>
            <th>Specialty</th>
            <th>Actions</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
            <tr>
                <td> <?php echo $r['attendee_id'] ?> </td>
                <td> <?php echo $r['firstname'] ?> </td>
                <td> <?php echo $r['lastname'] ?> </td>
                <td> <?php echo $r['birthday'] ?> </td>
                <td> <?php echo $r['email'] ?> </td>
                <td> <?php echo $r['contact'] ?> </td>
                <td> <?php echo $r['name'] ?> </td>
                <td> 
                    <a href="view.php?id=<?php echo $r['attendee_id']?>" class="btn btn-primary">View</a> 
                    <a href="update.php?id=<?php echo $r['attendee_id']?>" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        <?php }?>
    </table>

 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <?php
include 'includes/footer.php';
?>