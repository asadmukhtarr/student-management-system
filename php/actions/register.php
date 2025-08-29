<?php 
    $name = $_POST['name']; // name ..
    $email = $_POST['email']; // email ..
    $whatsapp = $_POST['whatsapp']; // whatsapp ..
    $password = $_POST['password']; // password ..
    $cpassword = $_POST['confirm_password']; // cofirm password ..
    $gender = $_POST['gender'];
    if($password == $cpassword){
        echo 'password matched';
    } else {
        $error = "Password did not match";
        header('Location:../register.php?error='.$error);
    }
?>