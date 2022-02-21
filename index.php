<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="fav.png">
</head>
<body>
	<div class="header">
    <div class="logo">
		<h2>Home Page</h2>
</div>
<div class="nav-header">
  <div id="nav-list">
    <li class="nav-list-item"><a class="nav-list-link" href="/">Home</a></li>
    <li class="nav-list-item"><a class="nav-list-link" href="documentation.php">Documentation</a></li>
    <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
  </div>
  <hr style="width:50%">
  <div class="nav-list-log">
    <?php if(isLoggedIn()){?>
    <div id="profilelogout">
      <div class="dropdown">
        <span>Profile</span>
        <div class="dropdown-content">
          <li class="nav-list-item"><a id="profile" href="profileinfo.php">Dashboard</a></li>
          <li class="nav-list-item"><a id="logout" href="/?logout='1'">Logout</a></li>
        </div>
      </div>
    </div>
		<?php }else{ ?>
    <div id="loginreg">
      <li class="nav-list-item"><a id="login" href="account.php">My Account</a></li>
    </div>
		<?php } ?>
  </div>
</div>

	
        
  </div>
        

    <div class="main-content">
        <p>
            This is some random content!
        </p>
    </div>
</body>
</html>