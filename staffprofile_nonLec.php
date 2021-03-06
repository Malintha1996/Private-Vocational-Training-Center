<?php                                     //access controlling
  session_start();
  if( !isset($_SESSION['signed_in']) ) {
    header('location:index.php');
    exit();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- style sheets -->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/navpannel.css">
    <link rel="stylesheet" href="css/subnav.css">
    <link rel="stylesheet" href="css/profile.css">

    <!-- javascript sources -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/subnav.js" type="text/javascript"></script>
    <script src="js/load_staffprofile_nonLec.js" type="text/javascript"></script>
  </head>
  <body>

    <!-- include header and navigation panel -->
    <?php
      include_once("inc/header.php");
      include_once("inc/navpannel.php");
      include_once("inc/subnavlec.php");
    ?>

    <!-- popup for change password-->
    <div class="popupbox" id="popupbox2" style="display:none;height:auto;position:fixed;top:2vh;">
      <form action="dbOperations\db_changePassword_staff.php" method="POST" id="changer2">
        Current Password: <input type="password" id="current_password" required><br>
        New Password: <input type="password" id="new_password" required><br>
        Re-enter New Password: <input type="password" id="reent_new_password" required><br>
        <button class="button" id="back2" style="display:inline-block;width:40%;">Cancel</button>
        <button type="submit" class="button" id="change_pass" style="display:inline-block;width:40%;">Change</button>
     </form>
    </div>

    <!-- popup for upload profile picture-->
    <div class="popupbox" id="popupbox" style="display:none;height:auto">
      <form action="dbOperations/db_change_profilepicture_staff_nonLec.php" method="POST" id="changer" enctype="multipart/form-data">
        <input id="chooser" name="chooser" type="file" style="height:auto"></input>
        <button class="button" id="back" style="display:inline-block;width:40%;">Cancel</button>
        <button type="submit" class="button" style="display:inline-block;width:40%;">Upload</button>
     </form>
    </div>

    <div id="test"></div>
    <div class="row">
      <div class="column">
        <div class="card">
          <div id="image"></div>
          <div class="container">
            <p id="name"></p>
             <button class="button"  id="picchange">change profile picture</button>
             <button class="button"  id="passwordchange">change password</button>
          </div>
        </div>
      </div>
    </div>
    <div id="profdata" class="lightbox">

    </div>

    <?php include_once("inc/footer.php"); ?><br><br>
  </body>
</html>
