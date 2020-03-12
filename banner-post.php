<?php
   require 'db.php';
  $uploaded_image  = $_FILES['banner_image'];
  $banner_title = $_POST['banner_title'];
  $banner_desc = htmlentities($_POST['banner_desc'], ENT_QUOTES);
  $banner_btn = $_POST['banner_btn'];


    $after_explode = explode('.', $uploaded_image['name']);
    $extension = end($after_explode);
    $allowed_extension = array('jpg', 'jpeg', 'png', 'gif', 'html','mp3');



    if(in_array($extension, $allowed_extension))
    {
     if($uploaded_image['size'] <= 5e+6)
     {
       $insert = "INSERT INTO banners(banner_title, banner_desc, banner_btn,status)VALUES('$banner_title', '$banner_desc','$banner_btn', 0)";
       $inser_result = mysqli_query($db_con, $insert);

       $lastid = mysqli_insert_id($db_con);
       $file_name = $lastid . "." . $extension;
       $new_location = 'uploads/banners/' . $file_name;
       move_uploaded_file($uploaded_image['tmp_name'], $new_location);
       $update_image = "UPDATE banners SET banner_image = '$file_name' WHERE id = $lastid";
       $update_result= mysqli_query($db_con, $update_image);
       $err = "Registerd Successfully";
       header('location:add_banners.php?succ_msg=' . $err);


     }else{
         $err = "Size Thik nai";
         header('location:add_banners.php?file_error=' . $err);
     }
    }else{
      $err = "Format Thik nai";
      header('location:add_banners.php?file_error=' . $err);
    }



 ?>
