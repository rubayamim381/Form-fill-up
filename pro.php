<?php include "errors.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home page of the profile</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">
      <div class="form-group">
        <div class="text-center">
          <label class="col-md-6 control-label "><h2 style="padding: 50px;">Home page</h2></label>

      </div>
      <div class="row">
        <div class="col-md-7">
          <img src="PngItem_59407.png" class="img-fluid" alt="Responsive image"  width="450" height="300" style="padding: 35px;">
        </div>
      <div class="col-md-4">
          <?php if(isset($_SESSION['success'])) :   ?>
          <h3>
              <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
              ?>
          </h3>
          <?php endif ?>

          <?php if(isset($_SESSION['email'])) :?>

              <p>Welcome

                <?php echo $_SESSION['username'].'<br>'.'<br>';
              include 'profile.php';  ?>

              <div class="">
                <a href="pro.php?logout='1'" style="color: red;">Signout</a>
              </div>
             </p>
               <?php endif ?>
            </div>
      </div>
    </div>
  </div>

  </body>
</html>
