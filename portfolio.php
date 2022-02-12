<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<link rel="stylesheet" href="styles.css">
    <!-- <link rel="icon" type="image/x-icon" href="logo.png"> -->
</head>
<body>
	<div class="header">
		<h2>Portfolio Page</h2>
	</div>

    <div class="nav-header">
        <?php if(isLoggedIn())
		{
		?>
      	    <nav class="nav-list">
                <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="portfolio.php">Portfolio</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="profileinfo.php">Profile</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="index.php?logout='1'">Logout</a></li>
        </nav>
		<?php }else{ ?>
			<nav class="nav-list">
                <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="portfolio.php">Portfolio</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="login.php">Login</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="register.php">Register</a></li>
                </nav>
		<?php } ?>
        </div>
        

    <div class="main-content">
        <p>
            Portfolio here
        </p>

        <div class="row">
  <div class="column">
    <div class="box">
    <div class="top-bar"></div>
    <div class="content">
      <h3>My Work[Box 1]</h3>
      <p>Lorem ipsum..</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="box">
    <div class="top-bar"></div>
    <div class="content">
      <h3>My Work[Box 2]</h3>
      <p>Lorem ipsum..</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="box">
    <div class="top-bar"></div>
    <div class="content">
      <h3>My Work[Box 3]</h3>
      <p>Lorem ipsum..</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="box">
    <div class="top-bar"></div>
    <div class="content">
      <h3>My Work[Box 4]</h3>
      <p>Lorem ipsum..</p>
      </div>
    </div>
  </div>
</div>


    </div>
</body>
</html>