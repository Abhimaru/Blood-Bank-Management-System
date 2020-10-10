<?php
  // session_start();
  if(!isset($_SESSION['Username'])){
  ?>
    <script>
      alert("You are Logged out");
    </script>
  <?php
  header("location:login.php");
  }
?>
<section>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: black;">
  <a class="navbar-brand" href="changeuserinfo.php">Username: <?php echo $_SESSION['Username']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php if(isset($Homepage)){echo $Homepage;}?>">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if(isset($Becomedonor)){echo $Becomedonor;}?>">
        <a class="nav-link" href="donor.php">BECOME A DONOR<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if(isset($Reqblood)){echo $Reqblood;}?>">
        <a class="nav-link" href="requestblood.php">REQUEST FOR BLOOD</a>
      </li>
      <li class="nav-item <?php if(isset($Changeinfo)){echo $Changeinfo;}?>">
        <a class="nav-link" href="update.php">CHANGE INFO</a>
      </li>
      <li class="nav-item <?php if(isset($Deleteinfo)){echo $Deleteinfo;}?>">
        <a class="nav-link" href="delete.php">DELETE INFO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>
</header>
</section>
		
