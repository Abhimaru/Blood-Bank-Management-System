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
  <a class="navbar-brand" href="#">username :<?php echo $_SESSION['Username']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php if(isset($Homepage)){echo $Homepage;}?>">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if(isset($Becomedonor)){echo $Becomedonor;}?>">
        <a class="nav-link" href="adddonor.php">ADD DONOR<span class="sr-only"></span></a>
      </li>
      <li class="nav-item <?php if(isset($Reqblood)){echo $Reqblood;}?>">
        <a class="nav-link" href="donorlist.php">SEE DONORS</a>
      </li>
      <li class="nav-item <?php if(isset($Changeinfo)){echo $Changeinfo;}?>">
        <a class="nav-link" href="updateinfo.php">UPDATE INFO</a>
      </li>
      <li class="nav-item <?php if(isset($Deleteinfo)){echo $Deleteinfo;}?>">
        <a class="nav-link" href="deleteinfo.php">DELETE INFO</a>
      </li>
      <li class="nav-item <?php if(isset($Removeusr)){echo $Removeusr;}?>">
        <a class="nav-link" href="removeuser.php">REMOVE USER<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>
</header>
</section>
		
