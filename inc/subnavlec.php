<div class="subnav">

  <img src="img\login\login_staff.jfif" alt="profile-photo" id="profile_image" width="10%" href="#">
  <div class="dropdown">
     <button onclick="displaylist()" class="dropbtn"><img src="icons/menu.svg" width="100%"></button>
     <div id="myDropdown" class="dropdown-content">
          <a href="#"><img src="icons/account.svg" width="10%" alt="img profile"> Profile</a>
          <a href="#"><img src="icons/settings.svg" width="10%" alt="img settings"> Settings</a>
          <a href="log-in.php"><img src="icons/logout.svg" width="10%" alt="img logout"> Log out</a>
     </div>
  </div>
  <p>Logged in as <?php $_SESSION['username']?></p>
</div>
