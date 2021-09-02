<?php

require_once 'db/conn.php';

//Get values from post operation
if(isset($_POST['submit'])){
    //extract value from the $_POST array
    $id = $_POST['id'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $dob = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['speciality'];

    //call Crud function
    $result=$crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty);
    //Redirect to index.php
    if($result){
        header("Location: viewrecords.php");
    }else{
        echo 'error';
    }

}else{
    echo 'error';

}

?>