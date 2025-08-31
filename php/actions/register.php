<?php 
    $name = $_POST['name']; // name ..
    $email = $_POST['email']; // email ..
    $whatsapp = $_POST['whatsapp']; // whatsapp ..
    $password = $_POST['password']; // password ..
    $cpassword = $_POST['confirm_password']; // cofirm password ..
    $gender = $_POST['gender'];
    if($password == $cpassword){
        // for connection ...
        $cn = mysqli_connect('localhost','root','','fswd35ls') or die('cant connect with database');
        $query = "INSERT INTO `users`(name,email,whatsapp,password,gender) VALUES ('$name','$email','$whatsapp','$password','$gender')";
        mysqli_query($cn,$query) or die(mysqli_error($cn));
        $error = "Thank you for register";
        header('Location:../register.php?success='.$error);
    } else {
        $error = "Password did not match";
        header('Location:../register.php?error='.$error);
    }
?>