<?php 
    $name = $_POST['name']; // name ..
    $email = $_POST['email']; // email ..
    $whatsapp = $_POST['whatsapp']; // whatsapp ..
    $password = $_POST['password']; // password ..
    $cpassword = $_POST['confirm_password']; // cofirm password ..
    $gender = $_POST['gender']; // gender ..
    // testing for same password with confirmation ..
    if($password == $cpassword){
        // for connection ...
        include('cn.php'); // connectoin file ...
        $que = "SELECT * FROM `users` WHERE email = '$email'"; // its finding data from database table against email ..
        $result = mysqli_query($cn,$que) or die('cant run query'); // its runing queries ..
        $rows = mysqli_num_rows($result); // number count ..
       // echo $rows; // for testing ...
        if($rows > 0){
            $error = "Email Already Exists";
            header('Location:../register.php?error='.$error);   
        } else {
            $query = "INSERT INTO `users`(name,email,whatsapp,password,gender) VALUES ('$name','$email','$whatsapp','$password','$gender')";
            mysqli_query($cn,$query) or die(mysqli_error($cn));
            $error = "Thank you for register";
            header('Location:../register.php?success='.$error);
        }
        
    } else {
        $error = "Password did not match";
        header('Location:../register.php?error='.$error);
    }
?>