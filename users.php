<?php
 require 'db.php';
 require 'header.php';

  $select = "SELECT * FROM users";
  $select_result = mysqli_query($db_con, $select);
 ?>

   <div class="container">
     <div class="row">
       <div class="col-lg-12 m-auto py-3">
         <div class="head bg-dark text-white">
           <h1 class="text-center py-3">Users</h1>
         </div>

            <table class="table table-dark table-striped">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Country</th>
                <th>Image</th>
                <th>Action</th>
              </tr>

                  <?php foreach($select_result as $user){ ?>
                    <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['fname'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td>*****</td>
                    <td><?php echo $user['country'] ?></td>
                    <td>
                      <img src="uploads/users/<?php echo $user['image'] ?>" alt="" width="200" height="150">
                    </td>
                    <td>
                        <a href="single_view.php?id=<?php echo $user['id'] ?>" class="btn btn-info">View</a>
                        <a href="edit_user.php?id=<?php echo $user['id'] ?>" class="btn btn-warning">Edit</a>

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $user['id'] ?>">
                          Delete
                        </button>
                    </td>

                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Are You sure ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                              <a href="delete_users.php?id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>

                <?php  }  ?>

                <?php
                    if($select_result->num_rows == 0){ ?>
                     <tr>
                       <td>No data Available</td>
                     </tr>
              <?php      }
                 ?>

                 <!-- Button trigger modal -->





            </table>


          </div>
       </div>
     </div>
   </div>




















 <?php
  require 'footer.php';
  ?>
