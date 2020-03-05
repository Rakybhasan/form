<?php
 require 'header.php';
 ?>

    <div class="container mt-5">
           <div class="row">
             <div class="col-lg-12 m-auto py-3">
               <div class="head bg-dark text-white">
                 <h1 class="text-center py-3">Registration Form</h1>
               </div>

               <div class="col-lg-12 m-auto bg-info">
                 <form class="form-group" action="form-post.php" method="post" enctype="multipart/form-data">
                    <div class="py-3">
                      <input class="form-control" type="text" name="fname" placeholder="Enter Your name">
                      <div class="<?=(!empty($_GET['nam_error'])?'py-3 mt-2 alert alert-danger': '')?>">
                        <?php
                         if(isset($_GET['nam_error'])){
                           echo $_GET['nam_error'];
                         }
                         ?>
                      </div>
                    </div>
                    <div class="py-3">
                      <input class="form-control" type="text" name="email" placeholder="Enter Your email">
                      <div class="<?=(!empty($_GET['email_error'])?'py-3 mt-2 alert alert-danger': '')?>">
                        <?php
                         if(isset($_GET['email_error'])){
                           echo $_GET['email_error'];
                         }
                         ?>
                      </div>
                    </div>
                    <div class="py-3">
                      <input class="form-control" type="password" name="password" placeholder="Enter Your password">
                      <div class="<?=(!empty($_GET['password_error'])?'py-3 mt-2 alert alert-danger': '')?>">
                        <?php
                         if(isset($_GET['password_error'])){
                           echo $_GET['password_error'];
                         }
                         ?>
                      </div>
                    </div>
                    <div class="py-3">
                      <input class="form-control" type="text" name="country" placeholder="Enter Your country">
                      <div class="<?=(!empty($_GET['country_error'])?'py-3 mt-2 alert alert-danger': '')?>">
                        <?php
                         if(isset($_GET['country_error'])){
                           echo $_GET['country_error'];
                         }
                         ?>
                      </div>
                    </div>
                    <div class="py-3">
                      <input type="file" name="image" class="form-control">
                      <div class="<?=(!empty($_GET['file_error'])?'py-3 mt-2 alert alert-danger': '')?>">
                        <?php
                         if(isset($_GET['file_error'])){
                           echo $_GET['file_error'];
                         }
                         ?>
                      </div>
                    </div>
                    <div class="py-3 text-center">
                      <button class="btn btn-primary" type="submit" name="button">Regster</button>
                      <a href="users.php" class="btn btn-success">All users</a>

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
     require 'footer.php';
     ?>
