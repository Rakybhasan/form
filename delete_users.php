<?php
 require 'db.php';

 $id = $_GET['id'];


 $select = "SELECT image FROM users WHERE id = $id";
 $select_result = mysqli_query($db_con, $select);
 $after_assoc = mysqli_fetch_assoc($select_result);
 $delete_image = 'uploads/users/' . $after_assoc['image'];
 unlink($delete_image);

 $delete = "DELETE FROM users WHERE id = $id";

 $delete_result = mysqli_query($db_con, $delete);
 header('location:users.php');

 ?>
