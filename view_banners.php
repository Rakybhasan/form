<?php
  // require 'session_check.php';

 require 'db.php';


 require 'dash_header.php';

  $select = "SELECT * FROM banners";
  $select_result = mysqli_query($db_con, $select);
 ?>

   <div class="container">
     <div class="row">
       <div class="col-lg-12 m-auto py-3">
         <div class="head bg-dark text-white">
           <h1 class="text-center py-3">Banners</h1>
         </div>

            <table class="table table-dark table-striped">
              <tr>
                <th>ID</th>
                <th>Banner Title</th>
                <th>Banner Desc</th>
                <th>Banner Button</th>
                <th>Image</th>
                <th>Status</th>
              </tr>

                  <?php foreach($select_result as $banner){ ?>
                    <tr>
                    <td><?php echo $banner['id'] ?></td>
                    <td><?php echo $banner['banner_title'] ?></td>
                    <td><?php echo $banner['banner_desc'] ?></td>
                    <td><?php echo $banner['banner_btn'] ?></td>
                    <td>
                      <img src="uploads/banners/<?php echo $banner['banner_image'] ?>" alt="" width="200" height="150">
                    </td>
                    <td>

                      <?php if($banner['status'] == 1){ ?>
                        <a href="activate_banner.php?id=<?php echo $banner['id'] ?>" class="btn btn-success">Active</a>
                      <?php } else{?>
                       <a href="activate_banner.php?id=<?php echo $banner['id'] ?>" class="btn btn-danger">Deactivated</a>
                     <?php } ?>

                    </td>

                  </tr>
                      <?php } ?>

                <?php
                    if($select_result->num_rows == 0){ ?>
                     <tr>
                       <td>No data Available</td>
                     </tr>
              <?php      }
                 ?>

                 <!-- Button trigger modal -->





            </table>

              <a href="logout.php" class="btn btn-danger">LogOut</a>


          </div>
       </div>
     </div>
   </div>




















 <?php
  require 'dash_footer.php';
  ?>
