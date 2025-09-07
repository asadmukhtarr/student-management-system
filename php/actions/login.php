<?php
    // for email ..
    $email = $_GET['email']; // email ..
    $password = $_GET['password']; // password ..
    include('cn.php'); // connection ...
    // for query...
    // * -> all  // WHERE 
    $query = "SELECT * FROM `users` WHERE email='$email' AND password = '$password'";
   // var_dump($query); // for testing ..
    $result = mysqli_query($cn,$query) or die('cant run query'.mysqli_error($cn)); // for run ...
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        $row = mysqli_fetch_array($result);
     //   var_dump($row['name']);
        session_start();
        $_SESSION['name'] = $row['name'];
       header('Location:../home.php');
    } else { 
        $error = "Email or password does not exist";
        header('Location:../index.php?error='.$error);
    }
?>