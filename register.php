<?php
session_start();
 require 'dash_header.php';
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
                      <?php if(isset($_SESSION['name_error'])){ ?>
                          <div class="py-3 mt-2 alert alert-danger">
                            <?php echo $_SESSION['name_error']; unset($_SESSION['name_error']) ?>
                          </div>
                      <?php } ?>

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
                    <div class="py-3 position-relative">
                      <input id="myInput" class="form-control" type="password" name="password" placeholder="Enter Your password">
                      <a style="top:16px; right:0;" class="btn btn-success position-absolute" onclick="myFunction()">Show</a>

                      <script>
                      function myFunction() {
                          var x = document.getElementById("myInput");
                          if (x.type === "password") {
                            x.type = "text";
                          } else {
                            x.type = "password";
                          }
                          }
                      </script>
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

                      <div class="py-3 ">
                        <select class="form-control" name="role">
                          <option value="">Select Role</option>
                          <option value="1">Super Admin</option>
                          <option value="2">Moderator</option>
                          <option value="3">Editor</option>
                        </select>
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
                      <a href="login.php" class="btn btn-warning">Login</a>

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
