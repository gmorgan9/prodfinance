<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <!-- <link rel="icon" type="image/x-icon" href="logo.png"> -->
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	
        
        </div>

        <div class="nav-header">
    <div id="nav-list">
      <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="documentation.php">Documentation</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
    </div>
    <hr style="width:50%">
    <div class="nav-list-log">
      <?php if(isLoggedIn()){?>
        <div id="profilelogout">
          <li class="nav-list-item"><a id="profile" href="profileinfo.php">Profile</a></li>
          <li class="nav-list-item"><a id="logout" href="index.php?logout='1'">Logout</a></li>
        </div>
		  <?php }else{ ?>
        <div id="loginreg">
          <li class="nav-list-item"><a id="login" href="login.php">Login</a></li>
          <li class="nav-list-item"><a id="register" href="register.php">Register</a></li>
        </div>
		  <?php } ?>
    </div>
  </div>
        

    <div class="main-content">
        <p>
            This is some random content!
        </p>
    </div>
</body>
</html>