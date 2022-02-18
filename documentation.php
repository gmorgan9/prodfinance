<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Documentation</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
  <link rel="icon" type="image/x-icon" href="fav.png">
</head>
<body>

	<div class="header">
		<h2>Documentation</h2>
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
          <li class="nav-list-item"><a id="profile" href="profileinfo.php">Profile</a></li>
          <li class="nav-list-item"><a id="logout" href="/?logout='1'">Logout</a></li>
        </div>
		  <?php }else{ ?>
        <div id="loginreg">
          <li class="nav-list-item"><a id="login" href="login.php">Login</a></li>
          <li class="nav-list-item"><a id="register" href="register.php">Register</a></li>
        </div>
		  <?php } ?>
    </div>
  </div>
        <br><br><br>

    <div class="main-content">
      <div class="content-header">
        <h2 style="text-align:center;">Knowledge Based Documentation</h2>
        <h4 style="text-align:center;color:gray;">Check out these documents</h4>
      </div>

<div class="row">
      <div class="column">
      <a href="document-1.php" style="text-decoration:none;color:black;"><div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>Creating Domain/Subdomains on Cloudflare</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
    </a>
      </div>
      <div class="column">
        <a href="testdocument.php" style="text-decoration:none;color:black;"><div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>Test Document</h3>
              <p>Here are the first few words of the document and hope that it fits and wraps the text..</p>
            </div>
        </div>
        </a>
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
    </div>
    <div class="row">
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