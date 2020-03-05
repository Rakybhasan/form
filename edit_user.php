<?php
 require 'db.php';
 $id = $_GET['id'];

 $select = "SELECT * FROM users WHERE id= $id";
 $select_result = mysqli_query($db_con, $select);
 $after_assoc = mysqli_fetch_assoc($select_result);

  require 'header.php';
 ?>



 <div class="container mt-5">
        <div class="row">
          <div class="col-lg-12 m-auto py-3">
            <div class="head bg-dark text-white">
              <h1 class="text-center py-3">Edit User</h1>
            </div>

            <div class="col-lg-12 m-auto bg-info">
              <form class="form-group" action="update_user.php" method="post" enctype="multipart/form-data">
                 <div class="py-3">
                   <input type="hidden" name="id" value="<?php echo $after_assoc['id'] ?>">
                   <input class="form-control" type="text" name="fname" value="<?php echo $after_assoc['fname'] ?>">
                 </div>
                 <div class="py-3">
                   <input class="form-control" type="text" name="email" value="<?php echo $after_assoc['email'] ?>">

                 </div>
                 <div class="py-3">
                   <input class="form-control" type="password" name="password" placeholder="Enter Your password">

                 </div>
                 <div class="py-3">
                   <input class="form-control" type="text" name="country" value="<?php echo $after_assoc['country'] ?>">
                 </div>
                 <div class="py-3 text-center">
                   <p>Present Photo:</p>
                   <img src="uploads/users/<?php echo $after_assoc['image'] ?>" alt="" height="150">
                 </div>
                 <div class="py-3">
                   <input class="form-control" type="file" name="image">
                 </div>
                 <div class="py-3 text-center">
                   <button class="btn btn-primary" type="submit" name="button">Update</button>
                 </div>


              </form>
            </div>
          </div>
        </div>


 </div>











<?php
  require 'footer.php';
 ?>
