<?php
 require 'dash_header.php';
 require 'session_check.php';
 ?>


 <div class="container mt-5">
        <div class="row">
          <div class="col-lg-12 m-auto py-3">
            <div class="head bg-dark text-white">
              <h1 class="text-center py-3">Banner Form</h1>
            </div>

            <div class="col-lg-12 m-auto bg-info">
              <form class="form-group" action="banner-post.php" method="post" enctype="multipart/form-data">

                 <div class="py-3">
                   <input type="file" name="banner_image" class="form-control">

                 </div>
                 <div class="py-3">
                   <input type="text" name="banner_title" class="form-control"  placeholder="banner title">

                 </div>
                 <div class="py-3">
                   <textarea type="text" name="banner_desc" class="form-control" placeholder="banner dfescription"></textarea>

                 </div>
                 <div class="py-3">
                   <input type="text" name="banner_btn" class="form-control" placeholder="banner button text">

                 </div>
                 <div class="py-3 text-center">
                   <button class="btn btn-primary" type="submit" name="button">Add banner</button>
                   <div class="<?=(!empty($_GET['succ_msg'])?'py-3 mt-2 alert alert-success': '')?>">
                     <?php
                      if(isset($_GET['succ_msg'])){
                        echo $_GET['succ_msg'];
                      }
                      ?>
                   </div>


                 </div>

              </form>
            </div>
          </div>
        </div>


 </div>



<?php
  require 'dash_footer.php';
 ?>
