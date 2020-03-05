<?php
 require 'db.php';
 require 'header.php';
 $id = $_GET['id'];

 $select = "SELECT * FROM users WHERE id = '$id'";
 $select_result = mysqli_query($db_con, $select);
 $after_assoc_id = mysqli_fetch_array($select_result);

 ?>

 <div class="container">
   <div class="row">
     <div class="col-lg-8 m-auto py-3">
       <div class="head bg-dark text-white">
         <h1 class="text-center py-3">Users</h1>
       </div>

          <table class="table table-dark table-striped">
            <tr>
              <th>ID</th>
              <td><?php echo $after_assoc_id['id'] ?></td>
            </tr>
              <tr>
                <th>Name</th>
                <td><?php echo $after_assoc_id['fname'] ?></td>

              </tr>
              <tr>
                <th>Email</th>
                <td><?php echo $after_assoc_id['email'] ?></td>

              </tr>
              <tr>
                <th>Password</th>
                <td><?php echo $after_assoc_id['password'] ?></td>

              </tr>
              <tr>

                <th>Country</th>
                <td><?php echo $after_assoc_id['country'] ?></td>
              </tr>
              <tr>

                <th>Image</th>
                <td>
                  <img src="uploads/users/<?php echo $after_assoc_id['image'] ?>" alt="" width="500" height="200">
                </td>
              </tr>
              <tr>
                <th>Action</th>
                <td>
                  <a href="users.php" class="btn btn-primary">Go back</a>
                </td>

              </tr>
            </tr>

          </table>


        </div>
     </div>
   </div>
 </div>



 <?php
  require 'footer.php';
  ?>
