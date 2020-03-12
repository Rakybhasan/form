<?php
session_start();
  require 'db.php';
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $country = $_POST['country'];
  $role = $_POST['role'];

  $uploaded_image = $_FILES['image'];

    $after_explode = explode('.', $uploaded_image['name']);
    $extension = end($after_explode);
    $allowed_extension = array('jpg', 'jpeg', 'png', 'gif', 'html','mp3');



   if(empty($fname)){
     $_SESSION['name_error'] = "Enter name";
     header('location:index.php');
   }
   elseif(empty($email)){
     $err = "Enter email";
     header('location:index.php?email_error=' . $err);
   }
   elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $err = "Enter correct email";
     header('location:index.php?email_error=' . $err);
   }
   elseif(empty($password)){
     $err = "Enter password";
     header('location:index.php?password_error=' . $err);
   }
   elseif(empty($country)){
     $err = "Enter country";
     header('location:index.php?country_error=' . $err);
   }
   else{



     if(in_array($extension, $allowed_extension))
     {
      if($uploaded_image['size'] <= 5e+6)
      {
        $insert = "INSERT INTO users(fname, email, password,country,role)VALUES('$fname', '$email','$password', '$country', '$role')";
        $inser_result = mysqli_query($db_con, $insert);

        $lastid = mysqli_insert_id($db_con);
        $file_name = $lastid . "." . $extension;
        $new_location = 'uploads/users/' . $file_name;
        move_uploaded_file($uploaded_image['tmp_name'], $new_location);
        $update_image = "UPDATE users SET image = '$file_name' WHERE id = $lastid";
        $update_result= mysqli_query($db_con, $update_image);
        $err = "Registerd Successfully";
        header('location:register.php?succ_msg=' . $err);


      }else{
          $err = "Size Thik nai";
          header('location:register.php?file_error=' . $err);
      }
     }else{
       $err = "Format Thik nai";
       header('location:register.php?file_error=' . $err);
     }














   }


  ?>
