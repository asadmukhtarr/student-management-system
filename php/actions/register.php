<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    echo $name.' '.$email.' '.$whatsapp.' '.$password.' '.$cpassword.' '.$gender;
?>