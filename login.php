<?php
session_start();
 require 'header.php';
 ?>

    <div class="container mt-5">
           <div class="row">
             <div class="col-lg-12 m-auto py-3">
               <div class="head bg-dark text-white">
                 <h1 class="text-center py-3">Login Form</h1>
               </div>

               <div class="col-lg-12 m-auto bg-info">
                 <form class="form-group" action="login-post.php" method="post">

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


                    <div class="py-3 text-center">
                      <button class="btn btn-primary" type="submit" name="button">Login</button>

                      <?php
                       if(!empty($_SESSION['login_error'])){ ?>

                        <div class="alert alert-danger">
                          <?php echo $_SESSION['login_error'];
                            unset($_SESSION['login_error']);
                          ?>
                        </div>


                    <?php   }
                       ?>


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
