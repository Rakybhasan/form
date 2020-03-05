<?php
  require 'db.php';
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $country = $_POST['country'];
  $id = $_POST['id'];
  $uploaded_image = $_FILES['image'];




 if(!empty($_FILES['image']['name']))
 {
   $select = "SELECT image FROM users WHERE id = $id";
   $select_result = mysqli_query($db_con, $select);
   $after_assoc = mysqli_fetch_assoc($select_result);
   $delete_image = 'uploads/users/' . $after_assoc['image'];
   unlink($delete_image);

   $after_explode = explode('.', $uploaded_image['name']);
   $extension = end($after_explode);
   $allowed_extension = array('jpg', 'jpeg', 'png', 'gif');

   if(in_array($extension, $allowed_extension))
   {
    if($uploaded_image['size'] <= 5e+6)
    {
      $update = "UPDATE users SET fname = '$fname', email = '$email', password = '$password', country ='$country' WHERE id = $id";
      $update_result = mysqli_query($db_con,$update);

      $file_name = $id . "." . $extension;
      $new_location = 'uploads/users/' . $file_name;
      move_uploaded_file($uploaded_image['tmp_name'], $new_location);
      $update_image = "UPDATE users SET image = '$file_name' WHERE id = $id";
      $update_result= mysqli_query($db_con, $update_image);

      header('location:users.php');
    }else{
        $err = "Size Thik nai";
        header('location:index.php?file_error=' . $err);
    }
   }else{
     $err = "Format Thik nai";
     header('location:index.php?file_error=' . $err);
   }

 }else{
   $update = "UPDATE users SET fname = '$fname', email = '$email', password = '$password', country ='$country' WHERE id = $id";
   $update_result = mysqli_query($db_con,$update);
   header('location:users.php');
 }









  ?>
