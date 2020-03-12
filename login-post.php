<?php
   session_start();
   require 'db.php';
   $email = $_POST['email'];
   $password = $_POST['password'];



   $select = "SELECT COUNT(*) as login, role, fname, image FROM users WHERE email = '$email' and password = '$password'";
   $select_result = mysqli_query($db_con, $select);
   $after_assoc = mysqli_fetch_array($select_result);

   if($after_assoc['login'] == 1){
    $_SESSION['login'] = "Ei lok login korse";
    $_SESSION['role'] = $after_assoc['role'];
    $_SESSION['fname'] = $after_assoc['fname'];
    $_SESSION['image'] = $after_assoc['image'];
        // setcookie('login', 'logout', time()+1000000);
    header('location:dash_index.php');

   }else {
     header('location:login.php');
     $_SESSION['login_error'] = "Incorrect Email or Password";
   }

 ?>
