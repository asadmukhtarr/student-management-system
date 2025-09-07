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
        // it will fetch your data from database in array form ..
        $row = mysqli_fetch_array($result);
     //   var_dump($row['name']);
        session_start(); // its for start session ..
        $_SESSION['name'] = $row['name']; // session_name() creating a global variable ..
       header('Location:../home.php'); // redirecting to home .php
    } else { 
        $error = "Email or password does not exist";
        header('Location:../index.php?error='.$error);
    }
?>